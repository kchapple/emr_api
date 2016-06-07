<?php

namespace Mi2\Emr\Contracts;

use App\System\FinderInterface;

interface DocumentFinderInterface extends FinderInterface
{
    public function byPid( $pid );
}