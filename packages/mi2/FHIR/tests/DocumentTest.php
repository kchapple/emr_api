<?php

use Mi2\Emr\OpenEMR\Repositories\DocumentRepository;

class PatientTest extends TestCase
{
        public function testGet()
        {

            $documentRepository = new DocumentRepository();
            $document = $documentRepository->get( 9 );
            $categories = $document->categories;
            foreach ( $categories as $cat ) {
                echo $cat;
            }
        }
}