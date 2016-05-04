<?php

use Illuminate\Http\Response;

class PatientRepositoryTest extends TestCase
{
        public function testJsonPost()
        {
            $path = __DIR__."/data";
            $data = file_get_contents( "$path/everywoman_create.json");
            $response = $this->call( 'POST',
                '/fhir/Patient',
                [],
                [],
                [],
                $headers = ['HTTP_CONTENT_TYPE' => 'application/json'],
                $data );
        }
}