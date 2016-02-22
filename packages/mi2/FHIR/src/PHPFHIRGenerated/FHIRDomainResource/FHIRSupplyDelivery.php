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
 * Record of delivery of what is supplied.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSupplyDelivery extends FHIRDomainResource
{
    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * A code specifying the state of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public $status = null;

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $suppliedItem = null;

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $supplier = null;

    /**
     * The time the dispense event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenPrepared = null;

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $time = null;

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Identifies the person who picked up the Supply.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $receiver = array();

    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier assigned by the dispensing facility when the item(s) is dispensed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * A code specifying the state of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying the state of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSupplyDeliveryStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person whom the delivered item is for.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of dispensing event that is performed. Examples include: Trial Fill, Completion of Trial, Partial Fill, Emergency Fill, Samples, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * The amount of supply that has been dispensed. Includes unit of measure.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSuppliedItem()
    {
        return $this->suppliedItem;
    }

    /**
     * Identifies the medication, substance or device being dispensed. This is either a link to a resource representing the details of the item or a simple attribute carrying a code that identifies the item from a known list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $suppliedItem
     */
    public function setSuppliedItem($suppliedItem)
    {
        $this->suppliedItem = $suppliedItem;
    }

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * The individual responsible for dispensing the medication, supplier or device.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * The time the dispense event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * The time the dispense event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $whenPrepared
     */
    public function setWhenPrepared($whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
    }

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * The time the dispensed item was sent or handed to the patient (or agent).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Identification of the facility/location where the Supply was shipped to, as part of the dispense event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Identifies the person who picked up the Supply.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Identifies the person who picked up the Supply.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $receiver
     */
    public function addReceiver($receiver)
    {
        $this->receiver[] = $receiver;
    }


}