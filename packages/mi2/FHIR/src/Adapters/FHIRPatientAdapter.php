<?php

namespace Mi2\FHIR\Adapters;

use Illuminate\Support\Facades\App;
use Mi2\Emr\Contracts\PatientAdapterInterface;
use Mi2\Emr\Contracts\PatientInterface;

use PHPFHIRGenerated\FHIRDomainResource\FHIRPatient;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\PHPFHIRResponseParser;

class FHIRPatientAdapter implements PatientAdapterInterface
{
    /**
     * @param PatientInterface $patient
     * @return string
     *
     * Takes a PatientInterface and returns a FHIR JSON or XML string
     * in response
     */
    public function toOutput( PatientInterface $patient )
    {
        $fhirPatient = new FHIRPatient();

        $dob = new FHIRDate();
        $dob->setValue( $patient->getDOB() );
        $fhirPatient->setBirthDate( $dob );



        // TODO provide other data to FHIR models
        return $fhirPatient->jsonSerialize();
    }

    /**
     * @param string $data
     * @return PatientInterface
     *
     * Takes a FHIR post string and returns a PatientInterface
     */
    public function toPatientInterface( $data )
    {
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirPatient = $parser->parse( $data );
        $patientInterface = App::make( 'Mi2\Emr\Contracts\PatientInterface' );
        $patientInterface->setDOB( $fhirPatient->getBirthDate()->getValue() );
        return $patientInterface;
    }
}