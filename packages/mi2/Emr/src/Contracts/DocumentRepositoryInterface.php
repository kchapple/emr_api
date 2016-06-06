<?php

namespace Mi2\Emr\Contracts;

use \App\System\RepositoryInterface;

interface DocumentRepositoryInterface extends RepositoryInterface
{
    public function find();
    public function create( DocumentInterface $documentInterface );
}