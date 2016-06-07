<?php

namespace Mi2\Emr\OpenEMR\Finders;

use Mi2\Emr\Contracts\PatientFinderInterface;
use Mi2\Emr\OpenEMR\Eloquent\Document;
use Mi2\Emr\OpenEMR\Eloquent\PatientData as Patient;

class DocumentFinder extends AbstractFinder implements DocumentFinderInterface
{

    public function byPid( $pid )
    {
        try {
            $documents = Document::where('foreign_id', $pid)->all();
            return $documents;
        } catch ( ErrorException $e ) {
            //Do stuff if it doesn't exist.
        }
    }
}