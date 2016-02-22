<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 22nd, 2016
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A sample to be used for analysis.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSpecimen extends FHIRDomainResource
{
    /**
     * Id for specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The availability of the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus
     */
    public $status = null;

    /**
     * The kind of material that forms the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $parent = array();

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $accessionIdentifier = null;

    /**
     * Time when specimen was received for processing or testing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $receivedTime = null;

    /**
     * Details concerning the specimen collection.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public $collection = null;

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public $treatment = array();

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public $container = array();

    /**
     * Id for specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Id for specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The availability of the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The availability of the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSpecimenStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The kind of material that forms the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The kind of material that forms the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Reference to the parent (source) specimen which is used when the specimen was either derived from or a component of another specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $parent
     */
    public function addParent($parent)
    {
        $this->parent[] = $parent;
    }

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Where the specimen came from. This may be from the patient(s) or from the environment or a device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * The identifier assigned by the lab when accessioning specimen(s). This is not necessarily the same as the specimen identifier, depending on local lab procedures.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $accessionIdentifier
     */
    public function setAccessionIdentifier($accessionIdentifier)
    {
        $this->accessionIdentifier = $accessionIdentifier;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * Time when specimen was received for processing or testing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $receivedTime
     */
    public function setReceivedTime($receivedTime)
    {
        $this->receivedTime = $receivedTime;
    }

    /**
     * Details concerning the specimen collection.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * Details concerning the specimen collection.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenCollection $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * Details concerning treatment and processing steps for the specimen.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenTreatment[] $treatment
     */
    public function addTreatment($treatment)
    {
        $this->treatment[] = $treatment;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * The container holding the specimen.  The recursive nature of containers; i.e. blood in tube in tray in rack is not addressed here.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSpecimen\FHIRSpecimenContainer[] $container
     */
    public function addContainer($container)
    {
        $this->container[] = $container;
    }


}