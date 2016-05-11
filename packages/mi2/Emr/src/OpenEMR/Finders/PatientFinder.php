<?php

namespace Mi2\Emr\OpenEMR\Finders;

use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\OpenEMR\Eloquent\PatientData as Patient;

class PatientFinder extends AbstractFinder implements PatientFinderInterface
{
    public function byLastName( $lastName )
    {
        $patients = Patient::where( 'lname', $lastName )->get();
        return $patients;
    }

    public function byPid( $pid )
    {
        try {
            return Patient::where('pid', $pid)->firstOrFail();
        } catch ( ErrorException $e ) {
            //Do stuff if it doesn't exist.
        }
    }

    public function byId( $id )
    {
        try {
            return Patient::find($id);
        } catch ( ErrorException $e ) {
            //Do stuff if it doesn't exist.
        }
    }
}