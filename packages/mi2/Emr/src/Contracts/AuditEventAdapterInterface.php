<?php

namespace Mi2\Emr\Contracts;
use PHPFHIRGenerated\FHIRDomainResource\FHIRAuditEvent;

/**
 * Interface AuditEventAdapterInterface
 * @package Mi2\Emr\Contracts
 *
 * Take AuditEventAdapterInterface and output something
 *
 */
interface AuditEventAdapterInterface extends BaseAdapterInterface
{
    public function modelToInterface( FHIRAuditEvent $patient );
    public function jsonToInterface( $data );
    public function storeInterface( AuditEventInterface $interface );
    public function interfaceToModel( AuditEventInterface $interface );
}