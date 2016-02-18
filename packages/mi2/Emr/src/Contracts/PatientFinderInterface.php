<?php

namespace Mi2\Emr\Contracts;

use App\System\FinderInterface;

interface PatientFinderInterface extends FinderInterface
{
    public function byLastName( $lastName );
    public function byPid( $pid );
}