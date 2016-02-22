<?php namespace PHPFHIRGenerated\FHIRResource\FHIRAuditEvent;

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
 * A record of an event made for purposes of maintaining a security log. Typical uses include detection of intrusion attempts and monitoring for inappropriate usage.
 */
class FHIRAuditEventObject extends FHIRBackboneElement
{
    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * The type of the object that was involved in this audit event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $role = null;

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $lifecycle = null;

    /**
     * Denotes security labels for the identified object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = array();

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Text that describes the object in more detail.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The actual query for a query-type participant object.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $query = null;

    /**
     * Additional Information about the Object.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public $detail = array();

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Identifies a specific instance of the participant object. The reference should always be version specific.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the object that was involved in this audit event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Code representing the functional application role of Participant Object being audited.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * Identifier for the data life-cycle stage for the participant object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $lifecycle
     */
    public function setLifecycle($lifecycle)
    {
        $this->lifecycle = $lifecycle;
    }

    /**
     * Denotes security labels for the identified object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * Denotes security labels for the identified object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $securityLabel
     */
    public function addSecurityLabel($securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * An instance-specific descriptor of the Participant Object ID audited, such as a person's name.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Text that describes the object in more detail.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Text that describes the object in more detail.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The actual query for a query-type participant object.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * The actual query for a query-type participant object.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $query
     */
    public function setQuery($query)
    {
        $this->query = $query;
    }

    /**
     * Additional Information about the Object.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Additional Information about the Object.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventDetail[] $detail
     */
    public function addDetail($detail)
    {
        $this->detail[] = $detail;
    }


}