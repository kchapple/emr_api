<?php

namespace Mi2\FHIR\Http\Controllers;

use Mi2\Emr\Contracts\BundleAdapterInterface;

class BundleController extends AbstractController
{
    public function __construct( BundleAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
}
