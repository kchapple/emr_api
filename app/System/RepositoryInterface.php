<?php

namespace App\System;

use Mi2\Emr\OpenEMR\Criteria\AbstractCriteria;

interface RepositoryInterface
{
    public function find( AbstractCriteria $criteria );
}