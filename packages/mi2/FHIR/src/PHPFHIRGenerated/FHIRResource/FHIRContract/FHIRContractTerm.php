<?php namespace PHPFHIRGenerated\FHIRResource\FHIRContract;

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
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 */
class FHIRContractTerm extends FHIRBackboneElement
{
    /**
     * Unique identifier for this particular Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * When this Contract Provision was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * Who or what this Contract Provision is about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Action stipulated by this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = array();

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = array();

    /**
     * List of actors participating in this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor1[]
     */
    public $actor = array();

    /**
     * Human readable form of this Contract Provision.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Contract Provision Valued Item List.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem1[]
     */
    public $valuedItem = array();

    /**
     * Nested group of Contract Provisions.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $group = array();

    /**
     * Unique identifier for this particular Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this particular Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * When this Contract Provision was issued.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * When this Contract Provision was issued.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $applies
     */
    public function setApplies($applies)
    {
        $this->applies = $applies;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * Who or what this Contract Provision is about.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what this Contract Provision is about.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $action
     */
    public function addAction($action)
    {
        $this->action[] = $action;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason()
    {
        return $this->actionReason;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $actionReason
     */
    public function addActionReason($actionReason)
    {
        $this->actionReason[] = $actionReason;
    }

    /**
     * List of actors participating in this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor1[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * List of actors participating in this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor1[] $actor
     */
    public function addActor($actor)
    {
        $this->actor[] = $actor;
    }

    /**
     * Human readable form of this Contract Provision.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Human readable form of this Contract Provision.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Contract Provision Valued Item List.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem1[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * Contract Provision Valued Item List.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem1[] $valuedItem
     */
    public function addValuedItem($valuedItem)
    {
        $this->valuedItem[] = $valuedItem;
    }

    /**
     * Nested group of Contract Provisions.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Nested group of Contract Provisions.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[] $group
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
    }


}