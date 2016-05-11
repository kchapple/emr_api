<?php

namespace Mi2\Emr\Contracts;

interface AuditEventInterface extends BaseInterface
{
    public function getEventJson();
    public function setEventJson( $eventJson );

    public function getUsername();
    public function setUsername( $username );
}
