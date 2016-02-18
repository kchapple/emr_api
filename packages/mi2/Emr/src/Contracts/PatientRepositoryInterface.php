<?php

namespace Mi2\Emr\Contracts;

use \App\System\RepositoryInterface;

interface PatientRepositoryInterface extends RepositoryInterface
{
    public function find();
    public function create( PatientInterface $patientInterface );
}