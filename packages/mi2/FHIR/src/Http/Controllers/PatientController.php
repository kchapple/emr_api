<?php

namespace Mi2\FHIR\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mi2\Emr\Contracts\PatientAdapterInterface;
use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\Contracts\PatientRepositoryInterface;

class PatientController extends AbstractController
{
    public function __construct( PatientRepositoryInterface $patientRepository, PatientAdapterInterface $patientAdapter )
    {
        $this->repository = $patientRepository;
        $this->adapter = $patientAdapter;
    }
}

