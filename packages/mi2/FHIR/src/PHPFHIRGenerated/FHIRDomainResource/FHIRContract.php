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
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRContract extends FHIRDomainResource
{
    /**
     * Unique identifier for this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * When this  Contract was issued.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Who and/or what this Contract is about: typically a Patient, Organization, or valued items such as goods and services.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $subject = array();

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $authority = array();

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $domain = array();

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $subType = array();

    /**
     * Action stipulated by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = array();

    /**
     * Reason for action stipulated by this Contract.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = array();

    /**
     * List of Contract actors.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor[]
     */
    public $actor = array();

    /**
     * Contract Valued Item List.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public $valuedItem = array();

    /**
     * Party signing this Contract.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public $signer = array();

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $term = array();

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $bindingAttachment = null;

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $bindingReference = null;

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public $friendly = array();

    /**
     * List of Legal expressions or representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public $legal = array();

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public $rule = array();

    /**
     * Unique identifier for this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique identifier for this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * When this  Contract was issued.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * When this  Contract was issued.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $issued
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract is applicable.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $applies
     */
    public function setApplies($applies)
    {
        $this->applies = $applies;
    }

    /**
     * Who and/or what this Contract is about: typically a Patient, Organization, or valued items such as goods and services.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who and/or what this Contract is about: typically a Patient, Organization, or valued items such as goods and services.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $subject
     */
    public function addSubject($subject)
    {
        $this->subject[] = $subject;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * A formally or informally recognized grouping of people, principals, organizations, or jurisdictions formed for the purpose of achieving some form of collective action such as the promulgation, administration and enforcement of contracts and policies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $authority
     */
    public function addAuthority($authority)
    {
        $this->authority[] = $authority;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Recognized governance framework or system operating with a circumscribed scope in accordance with specified principles, policies, processes or procedures for managing rights, actions, or behaviors of parties or principals relative to resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $domain
     */
    public function addDomain($domain)
    {
        $this->domain[] = $domain;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of Contract such as an insurance policy, real estate contract, a will, power of attorny, Privacy or Security policy , trust framework agreement, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * More specific type or specialization of an overarching or more general contract such as auto insurance, home owner  insurance, prenupial agreement, Advanced-Directive, or privacy consent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $subType
     */
    public function addSubType($subType)
    {
        $this->subType[] = $subType;
    }

    /**
     * Action stipulated by this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $action
     */
    public function addAction($action)
    {
        $this->action[] = $action;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason()
    {
        return $this->actionReason;
    }

    /**
     * Reason for action stipulated by this Contract.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $actionReason
     */
    public function addActionReason($actionReason)
    {
        $this->actionReason[] = $actionReason;
    }

    /**
     * List of Contract actors.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor[]
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * List of Contract actors.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractActor[] $actor
     */
    public function addActor($actor)
    {
        $this->actor[] = $actor;
    }

    /**
     * Contract Valued Item List.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem[]
     */
    public function getValuedItem()
    {
        return $this->valuedItem;
    }

    /**
     * Contract Valued Item List.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractValuedItem[] $valuedItem
     */
    public function addValuedItem($valuedItem)
    {
        $this->valuedItem[] = $valuedItem;
    }

    /**
     * Party signing this Contract.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner[]
     */
    public function getSigner()
    {
        return $this->signer;
    }

    /**
     * Party signing this Contract.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractSigner[] $signer
     */
    public function addSigner($signer)
    {
        $this->signer[] = $signer;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * One or more Contract Provisions, which may be related and conveyed as a group, and may contain nested groups.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractTerm[] $term
     */
    public function addTerm($term)
    {
        $this->term[] = $term;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getBindingAttachment()
    {
        return $this->bindingAttachment;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $bindingAttachment
     */
    public function setBindingAttachment($bindingAttachment)
    {
        $this->bindingAttachment = $bindingAttachment;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getBindingReference()
    {
        return $this->bindingReference;
    }

    /**
     * Legally binding Contract: This is the signed and legally recognized representation of the Contract, which is considered the "source of truth" and which would be the basis for legal action related to enforcement of this Contract. (choose any one of binding*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $bindingReference
     */
    public function setBindingReference($bindingReference)
    {
        $this->bindingReference = $bindingReference;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly[]
     */
    public function getFriendly()
    {
        return $this->friendly;
    }

    /**
     * The "patient friendly language" versionof the Contract in whole or in parts. "Patient friendly language" means the representation of the Contract and Contract Provisions in a manner that is readily accessible and understandable by a layperson in accordance with best practices for communication styles that ensure that those agreeing to or signing the Contract understand the roles, actions, obligations, responsibilities, and implication of the agreement.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractFriendly[] $friendly
     */
    public function addFriendly($friendly)
    {
        $this->friendly[] = $friendly;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal[]
     */
    public function getLegal()
    {
        return $this->legal;
    }

    /**
     * List of Legal expressions or representations of this Contract.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractLegal[] $legal
     */
    public function addLegal($legal)
    {
        $this->legal[] = $legal;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule[]
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * List of Computable Policy Rule Language Representations of this Contract.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRContract\FHIRContractRule[] $rule
     */
    public function addRule($rule)
    {
        $this->rule[] = $rule;
    }


}