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
class FHIRAuditEventParticipant extends FHIRBackboneElement
{
    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $role = array();

    /**
     * Direct reference to a resource that identifies the participant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * Unique identifier for the user actively participating in the event.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $userId = null;

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $altId = null;

    /**
     * Human-meaningful name for the user.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $requestor = null;

    /**
     * Where the event occurred.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public $policy = array();

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $media = null;

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public $network = null;

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $purposeOfUse = array();

    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Specification of the role(s) the user plays when performing the event. Usually the codes used in this element are local codes defined by the role-based access control security system used in the local context.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $role
     */
    public function addRole($role)
    {
        $this->role[] = $role;
    }

    /**
     * Direct reference to a resource that identifies the participant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Direct reference to a resource that identifies the participant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Unique identifier for the user actively participating in the event.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * Alternative Participant Identifier. For a human, this should be a user identifier text string from authentication system. This identifier would be one known to a common authentication system (e.g. single sign-on), if available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $altId
     */
    public function setAltId($altId)
    {
        $this->altId = $altId;
    }

    /**
     * Human-meaningful name for the user.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Human-meaningful name for the user.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Indicator that the user is or is not the requestor, or initiator, for the event being audited.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $requestor
     */
    public function setRequestor($requestor)
    {
        $this->requestor = $requestor;
    }

    /**
     * Where the event occurred.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Where the event occurred.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * The policy or plan that authorized the activity being recorded. Typically, a single activity may have multiple applicable policies, such as patient consent, guarantor funding, etc. The policy would also indicate the security token used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri[] $policy
     */
    public function addPolicy($policy)
    {
        $this->policy[] = $policy;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Type of media involved. Used when the event is about exporting/importing onto media.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Logical network location for application activity, if the activity has a network location.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRAuditEvent\FHIRAuditEventNetwork $network
     */
    public function setNetwork($network)
    {
        $this->network = $network;
    }

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getPurposeOfUse()
    {
        return $this->purposeOfUse;
    }

    /**
     * The reason (purpose of use), specific to this participant, that was used during the event being recorded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $purposeOfUse
     */
    public function addPurposeOfUse($purposeOfUse)
    {
        $this->purposeOfUse[] = $purposeOfUse;
    }


}