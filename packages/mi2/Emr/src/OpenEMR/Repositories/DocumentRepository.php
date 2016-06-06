<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 2/5/16
 * Time: 9:44 AM
 */

namespace Mi2\Emr\OpenEMR\Repositories;

use App\System\AbstractRepository;
use Illuminate\Support\Facades\DB;
use Mi2\Emr\Contracts\DocumentRepositoryInterface;
use Mi2\Emr\Contracts\DocumentInterface;

class DocumentRepository extends AbstractRepository implements DocumentRepositoryInterface
{
    public function create( DocumentInterface $documentInterface )
    {
        $documentInterface->save();
        $id = $documentInterface->getId();
        foreach ( $documentInterface->getCategories() as $categoryId ) {
            $results = DB::table('categories_to_documents')->insert(
                [ 'category_id' => $categoryId, 'document_id' => $id ]
            );
        }
    }

    public function update( $id, array $data )
    {

    }

    public function delete( $id )
    {

    }

    public function fetchAll()
    {
        return Document::all();
    }

    public function get( $id )
    {
        return Document::find( $id );
    }

}