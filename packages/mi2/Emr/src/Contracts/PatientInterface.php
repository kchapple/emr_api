<?php

namespace Mi2\Emr\Contracts;

interface PatientInterface
{
    public function getId();
    public function getFirstName();
    public function setFirstName( $firstName );
    public function getLastName();
    public function setLastName( $lastName );
    public function getDOB();
    public function setDOB( $DOB );

}
