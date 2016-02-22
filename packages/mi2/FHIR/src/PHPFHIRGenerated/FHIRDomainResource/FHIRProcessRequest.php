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
 * This resource provides the target, request and response, and action details for an action to be performed by the target on or about existing resources.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcessRequest extends FHIRDomainResource
{
    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    public $action = null;

    /**
     * The ProcessRequest business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when this resource was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The organization which is the target of the request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The practitioner who is responsible for the action specified in thise request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the action speccified in thise request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Reference of resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $response = null;

    /**
     * If true remove all history excluding audit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $nullify = null;

    /**
     * A reference to supply which authenticates the process.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $reference = null;

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public $item = array();

    /**
     * Names of resource types to include.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $include = array();

    /**
     * Names of resource types to exclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $exclude = array();

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRActionList
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * The type of processing action being requested, for example Reversal, Readjudication, StatusRequest,PendedRequest.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRActionList $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * The ProcessRequest business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The ProcessRequest business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * The version of the style of resource contents. This should be mapped to the allowable profiles for this and supporting resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $ruleset
     */
    public function setRuleset($ruleset)
    {
        $this->ruleset = $ruleset;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $originalRuleset
     */
    public function setOriginalRuleset($originalRuleset)
    {
        $this->originalRuleset = $originalRuleset;
    }

    /**
     * The date when this resource was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when this resource was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * The organization which is the target of the request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * The organization which is the target of the request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * The practitioner who is responsible for the action specified in thise request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The practitioner who is responsible for the action specified in thise request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * The organization which is responsible for the action speccified in thise request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the action speccified in thise request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Reference of resource which is the target or subject of this action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Reference of a prior response to resource which is the target or subject of this action.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $response
     */
    public function setResponse($response)
    {
        $this->response = $response;
    }

    /**
     * If true remove all history excluding audit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getNullify()
    {
        return $this->nullify;
    }

    /**
     * If true remove all history excluding audit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $nullify
     */
    public function setNullify($nullify)
    {
        $this->nullify = $nullify;
    }

    /**
     * A reference to supply which authenticates the process.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * A reference to supply which authenticates the process.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * List of top level items to be re-adjudicated, if none specified then the entire submission is re-adjudicated.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProcessRequest\FHIRProcessRequestItem[] $item
     */
    public function addItem($item)
    {
        $this->item[] = $item;
    }

    /**
     * Names of resource types to include.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Names of resource types to include.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $include
     */
    public function addInclude($include)
    {
        $this->include[] = $include;
    }

    /**
     * Names of resource types to exclude.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * Names of resource types to exclude.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $exclude
     */
    public function addExclude($exclude)
    {
        $this->exclude[] = $exclude;
    }

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * A period of time during which the fulfilling resources would have been created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }


}