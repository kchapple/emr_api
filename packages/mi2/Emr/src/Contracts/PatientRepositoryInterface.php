<?php

namespace Mi2\Emr\Contracts;

use \App\System\RepositoryInterface;
use Mi2\Emr\OpenEMR\Criteria\AbstractCriteria;

interface PatientRepositoryInterface extends RepositoryInterface
{
    public function find( AbstractCriteria $criteria );
    public function create( PatientInterface $patientInterface );
}