<?php

require __DIR__.'/../../../../vendor/autoload.php';

$xsdPath = __DIR__.'/../schemas/fhir-codegen-xsd-2.6';

$outputPath = __DIR__.'/../src';

// sudo chmod 777 vendor/dcarbone/php-fhir/output/
$generator = new \DCarbone\PHPFHIR\ClassGenerator\Generator( $xsdPath, $outputPath );

$generator->generate();