<?php

namespace App\System;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $finder = null;

    public function find()
    {
        return $this->finder;
    }
}