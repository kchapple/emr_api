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
 * A record of a request for a medication, substance or device used in the healthcare setting.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSupplyRequest extends FHIRDomainResource
{
    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * When the request was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Unique identifier for this supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Status of the supply request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus
     */
    public $status = null;

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $kind = null;

    /**
     * The item that is requested to be supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $orderedItem = null;

    /**
     * Who is intended to fulfill the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supplier = array();

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * When the request should be fulfilled.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen
     */
    public $when = null;

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person whom the ordered item is for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The Practitioner , Organization or Patient who initiated this order for the supply.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * When the request was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * When the request was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Unique identifier for this supply request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this supply request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Status of the supply request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the supply request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSupplyRequestStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Category of supply, e.g.  central, non-stock, etc. This is used to support work flows associated with the supply process.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * The item that is requested to be supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * The item that is requested to be supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $orderedItem
     */
    public function setOrderedItem($orderedItem)
    {
        $this->orderedItem = $orderedItem;
    }

    /**
     * Who is intended to fulfill the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Who is intended to fulfill the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $supplier
     */
    public function addSupplier($supplier)
    {
        $this->supplier[] = $supplier;
    }

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
    }

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Why the supply item was requested. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
    }

    /**
     * When the request should be fulfilled.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * When the request should be fulfilled.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRSupplyRequest\FHIRSupplyRequestWhen $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }


}