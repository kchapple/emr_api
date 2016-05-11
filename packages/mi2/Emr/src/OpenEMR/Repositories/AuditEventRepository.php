<?php
/**
 * Created by PhpStorm.
 * User: kchapple
 * Date: 2/5/16
 * Time: 9:44 AM
 */

namespace Mi2\Emr\OpenEMR\Repositories;

use Mi2\Emr\Contracts\AuditEventInterface;
use Mi2\Emr\Contracts\AuditEventRepositoryInterface;

class AuditEventRepository implements AuditEventRepositoryInterface
{
    public function create( AuditEventInterface $auditEventInterface )
    {
        if ( is_a( $auditEventInterface, '\Mi2\Emr\OpenEMR\Eloquent\AuditEvent' ) ) {
            $auditEventInterface->save();
        }

        return $auditEventInterface;
    }

    public function find()
    {
    }

}