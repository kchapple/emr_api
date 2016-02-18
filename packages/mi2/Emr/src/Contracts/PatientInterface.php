<?php

namespace Mi2\Emr\Contracts;

interface PatientInterface
{
    public function getId();
    public function getFirstName();
    public function getLastName();
    public function getDOB();
    public function setDOB( $DOB );

}
