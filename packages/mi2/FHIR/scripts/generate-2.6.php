<?php

require __DIR__.'/../../../../vendor/autoload.php';

$xsdPath = __DIR__.'/../schemas/fhir-codegen-xsd-2.6';


// sudo chmod 777 vendor/dcarbone/php-fhir/output/
$generator = new \DCarbone\PHPFHIR\ClassGenerator\Generator($xsdPath);

$generator->generate();