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
 * A financial tool for tracking value accrued for a particular purpose.  In the healthcare field, used to track charges for a patient, cost centres, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRAccount extends FHIRDomainResource
{
    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Categorizes the account for reporting and searching purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Indicates whether the account is presently used/useable or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public $status = null;

    /**
     * Indicates the period of time over which the account is allowed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $activePeriod = null;

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $currency = null;

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $balance = null;

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $coveragePeriod = null;

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $owner = null;

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier used to reference the account.  May or may not be intended for human use (e.g. credit card number).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name used for the account when displaying it to humans in reports, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Categorizes the account for reporting and searching purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Indicates whether the account is presently used/useable or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the account is presently used/useable or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAccountStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Indicates the period of time over which the account is allowed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getActivePeriod()
    {
        return $this->activePeriod;
    }

    /**
     * Indicates the period of time over which the account is allowed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $activePeriod
     */
    public function setActivePeriod($activePeriod)
    {
        $this->activePeriod = $activePeriod;
    }

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Identifies the currency to which transactions must be converted when crediting or debiting the account.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Represents the sum of all credits less all debits associated with the account.  Might be positive, zero or negative.
     * @param \PHPFHIRGenerated\FHIRMoney $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getCoveragePeriod()
    {
        return $this->coveragePeriod;
    }

    /**
     * Identifies the period of time the account applies to; e.g. accounts created per fiscal year, quarter, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $coveragePeriod
     */
    public function setCoveragePeriod($coveragePeriod)
    {
        $this->coveragePeriod = $coveragePeriod;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, device, practitioner, location or other object the account is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Indicates the organization, department, etc. with responsibility for the account.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Provides additional information about what the account tracks and how it is used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}