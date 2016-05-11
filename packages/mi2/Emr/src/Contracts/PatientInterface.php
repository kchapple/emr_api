<?php

namespace Mi2\Emr\Contracts;

interface PatientInterface extends BaseInterface
{
    public function getFirstName();
    public function setFirstName( $firstName );
    public function getLastName();
    public function setLastName( $lastName );
    public function getDOB();
    public function setDOB( $DOB );
    public function getGender();
    public function setGender( $gender );
    public function getPrimaryPhone();
    public function setPrimaryPhone( $phone );

}
