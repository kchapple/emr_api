<?php namespace PHPFHIRGenerated\FHIRResource\FHIRSpecimen;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A sample to be used for analysis.
 */
class FHIRSpecimenCollection extends FHIRBackboneElement
{
    /**
     * Person who collected the specimen.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $collector = null;

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $comment = array();

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $collectedDateTime = null;

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $collectedPeriod = null;

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Person who collected the specimen.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * Person who collected the specimen.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $collector
     */
    public function setCollector($collector)
    {
        $this->collector = $collector;
    }

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * To communicate any details or issues encountered during the specimen collection procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $comment
     */
    public function addComment($comment)
    {
        $this->comment[] = $comment;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCollectedDateTime()
    {
        return $this->collectedDateTime;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $collectedDateTime
     */
    public function setCollectedDateTime($collectedDateTime)
    {
        $this->collectedDateTime = $collectedDateTime;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCollectedPeriod()
    {
        return $this->collectedPeriod;
    }

    /**
     * Time when specimen was collected from subject - the physiologically relevant time. (choose any one of collected*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $collectedPeriod
     */
    public function setCollectedPeriod($collectedPeriod)
    {
        $this->collectedPeriod = $collectedPeriod;
    }

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The quantity of specimen collected; for instance the volume of a blood sample, or the physical measurement of an anatomic pathology sample.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A coded value specifying the technique that is used to perform the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Anatomical location from which the specimen was collected (if subject is a patient). This is the target site.  This element is not used for environmental specimens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
    }


}