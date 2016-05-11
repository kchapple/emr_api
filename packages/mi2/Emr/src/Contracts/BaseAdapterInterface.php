<?php

namespace Mi2\Emr\Contracts;
use Illuminate\Http\Request;

/**
 * Interface BaseAdapterInterface
 *
 * @package Mi2\Emr\Contracts
 *
 * Take a collection and output something
 *
 */
interface BaseAdapterInterface
{
    public function retrieve( $id );
    public function store( Request $request );

}
