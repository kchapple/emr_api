<?php

use Illuminate\Http\Response;

class PatientRepositoryTest extends TestCase
{
        public function testJsonPost()
        {
            $path = __DIR__."/data";
            $data = file_get_contents( "$path/everywoman.json");
            $response = $this->call( 'POST',
                '/fhir/patient',
                [],
                [],
                [],
                $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
                $data );
        }
}