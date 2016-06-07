<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 2/5/16
 * Time: 9:44 AM
 */

namespace Mi2\Emr\OpenEMR\Repositories;

use App\System\AbstractRepository;
use Mi2\Emr\Contracts\DocumentRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\Contracts\PatientInterface;
use Mi2\Emr\Contracts\PatientRepositoryInterface;
use Illuminate\Support\Facades\App;
use Mi2\Emr\OpenEMR\Criteria\DocumentByPid;
use Mi2\Emr\OpenEMR\Eloquent\PatientData as Patient;

class PatientRepository extends AbstractRepository implements PatientRepositoryInterface
{
    public function __construct( PatientFinderInterface $finder )
    {
        $this->finder = $finder;
    }

    public function create( PatientInterface $patientInterface )
    {
        if ( is_a( $patientInterface, '\Mi2\Emr\OpenEMR\Eloquent\PatientData' ) ) {
            $photo = $patientInterface->getPhoto();

            if ( !$patientInterface->getId() ) {
                // If a pid is not provided, we have to increment the pid in SQL
                // because though it's not the primary key, it must be unique.
                // This subquery increments the pid from the max in the table
                $subquery = DB::table((new Patient)->getTable() . ' as PD')
                    ->selectRaw('pid + 1 as new_pid')
                    ->orderBy('pid', 'desc')
                    ->take(1)->toSql();

                $pid = DB::raw("($subquery)");
                $patientInterface->setAttribute( 'pid', $pid  );
                $patientInterface->setAttribute( 'pubpid', $pid  );
            }

            $patientInterface->save();
            $patientInterface = $this->get( $patientInterface->id );

            $docpath = "/Users/kchapple/Dev/www/openemr_github/sites/default/documents";
            mkdir( $docpath."/".$patientInterface->getPid() );
            $filepath = $docpath."/".$patientInterface->getPid()."/".$photo->filename;
            $ifp = fopen( $filepath, "wb");
            fwrite($ifp, base64_decode( $photo->base64Data ) );
            fclose($ifp);

            $documentRepo = App::make( 'Mi2\Emr\Contracts\DocumentRepositoryInterface' );
            $photo->setType( 'file_url' );
            $photo->setUrl( "file://$filepath" );
            $photo->setDate( date('Y-m-d') );
            $photo->setForeignId( $patientInterface->getPid() );
            $photo->addCategory( 10 ); // 10 === 'Patient Photograph'

            $documentRepo->create( $photo );
        }

        return $patientInterface;
    }

    public function onAfterFind( $entity )
    {
        $documentRepository = new DocumentRepository();
        $documents = $documentRepository->find( new DocumentByPid( array( 'pid' => $entity->getPid(), 'category' => '10' ) ) );
        $photo = null;
        foreach ( $documents as $d ) {
            foreach ( $d->categories as $category ) {
                if ( $category->id == '10' ) {
                    $photo = $d;
                    break;
                }
            }
        }
        $entity->setPhoto( $photo );
        return $entity;
    }

    public function update( $id, array $data )
    {

    }

    public function delete( $id )
    {

    }

    public function fetchAll()
    {
        return Patient::all();
    }

    public function get( $id )
    {
        return Patient::find( $id );
    }

}