<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 6/7/16
 * Time: 1:30 PM
 */
namespace Mi2\Emr\OpenEMR\Criteria;

use Mi2\Emr\OpenEMR\Eloquent\PatientData as Patient;

class PatientByPid extends AbstractCriteria
{
    public function execute()
    {
        $patient = null;
        try {
            $patient = Patient::where( 'pid', $this->pid )->firstOrFail();
            return $patient;
        } catch ( ErrorException $e ) {
            //Do stuff if it doesn't exist.
        }

        return $patient;
    }
}