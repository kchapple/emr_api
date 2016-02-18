<?php

namespace Mi2\Emr\Contracts;

/**
 * Interface PatientAdapterInterface
 * @package Mi2\Emr\Contracts
 *
 * Take PatientInterface and output something
 *
 */
interface PatientAdapterInterface
{

    public function toOutput( PatientInterface $patient );

    public function toPatientInterface( $data );

}