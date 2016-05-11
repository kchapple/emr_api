<?php

namespace Mi2\Emr\Contracts;

use \App\System\RepositoryInterface;

interface AuditEventRepositoryInterface extends RepositoryInterface
{
    public function create( AuditEventInterface $auditEventInterface );
}