<?php

namespace App\System;

use Mi2\Emr\OpenEMR\Criteria\AbstractCriteria;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $finder = null;

    public function find( AbstractCriteria $criteria )
    {
        $entity = $criteria->execute();
        $entity = $this->onAfterFind( $entity );
        return $entity;
    }

    public function onAfterFind( $entity )
    {
        return $entity;
    }
}