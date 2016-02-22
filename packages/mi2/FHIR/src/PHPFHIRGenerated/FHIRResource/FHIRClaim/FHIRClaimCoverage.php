<?php namespace PHPFHIRGenerated\FHIRResource\FHIRClaim;

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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 */
class FHIRClaimCoverage extends FHIRBackboneElement
{
    /**
     * A service line item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $sequence = null;

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $focal = null;

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $coverage = null;

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $businessArrangement = null;

    /**
     * The relationship of the patient to the subscriber.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $relationship = null;

    /**
     * A list of references from the Insurer to which these services pertain.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $preAuthRef = array();

    /**
     * The Coverages adjudication details.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $claimResponse = null;

    /**
     * The style (standard) and version of the original material which was converted into this resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * A service line item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * A service line item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $sequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFocal()
    {
        return $this->focal;
    }

    /**
     * The instance number of the Coverage which is the focus for adjudication. The Coverage against which the claim is to be adjudicated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $focal
     */
    public function setFocal($focal)
    {
        $this->focal = $focal;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Reference to the program or plan identification, underwriter or payor.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $coverage
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBusinessArrangement()
    {
        return $this->businessArrangement;
    }

    /**
     * The contract number of a business agreement which describes the terms and conditions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $businessArrangement
     */
    public function setBusinessArrangement($businessArrangement)
    {
        $this->businessArrangement = $businessArrangement;
    }

    /**
     * The relationship of the patient to the subscriber.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The relationship of the patient to the subscriber.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getPreAuthRef()
    {
        return $this->preAuthRef;
    }

    /**
     * A list of references from the Insurer to which these services pertain.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $preAuthRef
     */
    public function addPreAuthRef($preAuthRef)
    {
        $this->preAuthRef[] = $preAuthRef;
    }

    /**
     * The Coverages adjudication details.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getClaimResponse()
    {
        return $this->claimResponse;
    }

    /**
     * The Coverages adjudication details.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $claimResponse
     */
    public function setClaimResponse($claimResponse)
    {
        $this->claimResponse = $claimResponse;
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


}