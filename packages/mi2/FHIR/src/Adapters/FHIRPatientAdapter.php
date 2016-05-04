<?php

namespace Mi2\FHIR\Adapters;

use Illuminate\Support\Facades\App;
use Mi2\Emr\Contracts\PatientAdapterInterface;
use Mi2\Emr\Contracts\PatientInterface;

use PHPFHIRGenerated\FHIRDomainResource\FHIRPatient;
use PHPFHIRGenerated\FHIRElement\FHIRCode;
use PHPFHIRGenerated\FHIRElement\FHIRDate;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifier;
use PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse;
use PHPFHIRGenerated\FHIRElement\FHIRNameUse;
use PHPFHIRGenerated\FHIRElement\FHIRHumanName;
use PHPFHIRGenerated\FHIRElement\FHIRString;
use PHPFHIRGenerated\PHPFHIRResponseParser;
use ArrayAccess;

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

        $identifier = new FHIRIdentifier();
        $use = new FHIRIdentifierUse();
        $use->setValue( "usual" );
        $identifier->setUse( $use );
        $value = new FHIRString();
        $value->setValue( $patient->getId() );
        $identifier->setValue( $value );
        $fhirPatient->addIdentifier( $identifier );

        $dob = new FHIRDate();
        $dob->setValue( $patient->getDOB() );
        $fhirPatient->setBirthDate( $dob );

        $name = new FHIRHumanName();
        $nameUse = new FHIRNameUse();
        $nameUse->setValue( "usual" );
        $name->setUse( $nameUse );
        $givenName = new FHIRString();
        $name->addGiven( $givenName->setValue( $patient->getFirstName() ) );
        $familyName = new FHIRString();
        $name->addFamily( $familyName->setValue( $patient->getLastName() ) );
        $fhirPatient->addName( $name );

        // TODO provide other data to FHIR models
        return $fhirPatient;
    }

    /**
     * @param ArrayAccess $collection
     * @return array
     */
    public function collectionToOutput( ArrayAccess $collection )
    {
        $output = array();
        foreach ( $collection as $element ) {
            if ( $element instanceof PatientInterface ) {
                $fhirPatient = $this->toOutput( $element );
                $output[]= $fhirPatient;
            }
        }

        return $output;
    }

    /**
     * @param string $data
     * @return PatientInterface
     *
     * Takes a FHIR post string and returns a PatientInterface
     */
    public function toInterface( $data )
    {
        $parser = new \PHPFHIRGenerated\PHPFHIRResponseParser();
        $fhirPatient = $parser->parse( $data );
        $patientInterface = App::make( 'Mi2\Emr\Contracts\PatientInterface' );
        if ( $patientInterface instanceof PatientInterface ) {
            $birthDate = $fhirPatient->getBirthDate()->getValue();
            $patientInterface->setDOB( $birthDate );
            $humanName = $fhirPatient->getName();
            $familyName = $humanName[0]->getFamily();
            $lname = $familyName[0]->getValue();
            $patientInterface->setLastName( $lname );
            $givenName = $humanName[0]->getGiven();
            $fname = $givenName[0]->getValue();
            $patientInterface->setFirstName( $fname );
        }
        return $patientInterface;
    }
}