<?php

namespace Mi2\Emr\Contracts;
use PHPFHIRGenerated\FHIRDomainResource\FHIRPatient;

/**
 * Interface PatientAdapterInterface
 * @package Mi2\Emr\Contracts
 *
 * Take PatientInterface and output something
 *
 */
interface PatientAdapterInterface extends BaseAdapterInterface
{
    public function modelToInterface( FHIRPatient $patient );
    public function jsonToInterface( $data );
    public function storeInterface( PatientInterface $interface );
    public function interfaceToModel( PatientInterface $interface );
}