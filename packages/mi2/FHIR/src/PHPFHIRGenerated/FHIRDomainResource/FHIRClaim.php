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
 * A provider issued list of services and products provided, or to be provided, to a patient which is provided to an insurer for payment recovery.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaim extends FHIRDomainResource
{
    /**
     * The category of claim this is.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClaimType
     */
    public $type = null;

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The version of the specification on which this instance relies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $ruleset = null;

    /**
     * The version of the specification from which the original instance was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $originalRuleset = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $target = null;

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $provider = null;

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public $use = null;

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $priority = null;

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $fundsReserve = null;

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $enterer = null;

    /**
     * Facility where the services were provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $facility = null;

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $originalPrescription = null;

    /**
     * The party to be reimbursed for the services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public $payee = null;

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $referral = null;

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public $diagnosis = array();

    /**
     * List of patient conditions for which care is sought.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $condition = array();

    /**
     * Patient Resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimCoverage[]
     */
    public $coverage = array();

    /**
     * Factors which may influence the applicability of coverage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $exception = array();

    /**
     * Name of school for over-aged dependents.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $school = null;

    /**
     * Date of an accident which these services are addressing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $accident = null;

    /**
     * Type of accident: work, auto, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $accidentType = null;

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $interventionException = array();

    /**
     * First tier of goods and services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public $item = array();

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $additionalMaterials = array();

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public $missingTeeth = array();

    /**
     * The category of claim this is.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRClaimType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The category of claim this is.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRClaimType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The business identifier for the instance: invoice number, claim number, pre-determination or pre-authorization number.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The version of the specification on which this instance relies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getRuleset()
    {
        return $this->ruleset;
    }

    /**
     * The version of the specification on which this instance relies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $ruleset
     */
    public function setRuleset($ruleset)
    {
        $this->ruleset = $ruleset;
    }

    /**
     * The version of the specification from which the original instance was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getOriginalRuleset()
    {
        return $this->originalRuleset;
    }

    /**
     * The version of the specification from which the original instance was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $originalRuleset
     */
    public function setOriginalRuleset($originalRuleset)
    {
        $this->originalRuleset = $originalRuleset;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Insurer Identifier, typical BIN number (6 digit).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * The provider which is responsible for the bill, claim pre-determination, pre-authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The organization which is responsible for the bill, claim pre-determination, pre-authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * Complete (Bill or Claim), Proposed (Pre-Authorization), Exploratory (Pre-determination).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUse $use
     */
    public function setUse($use)
    {
        $this->use = $use;
    }

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Immediate (stat), best effort (normal), deferred (deferred).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFundsReserve()
    {
        return $this->fundsReserve;
    }

    /**
     * In the case of a Pre-Determination/Pre-Authorization the provider may request that funds in the amount of the expected Benefit be reserved ('Patient' or 'Provider') to pay for the Benefits determined on the subsequent claim(s). 'None' explicitly indicates no funds reserving is requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $fundsReserve
     */
    public function setFundsReserve($fundsReserve)
    {
        $this->fundsReserve = $fundsReserve;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * Person who created the invoice/claim/pre-determination or pre-authorization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $enterer
     */
    public function setEnterer($enterer)
    {
        $this->enterer = $enterer;
    }

    /**
     * Facility where the services were provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Facility where the services were provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $facility
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Prescription to support the dispensing of Pharmacy or Vision products.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $prescription
     */
    public function setPrescription($prescription)
    {
        $this->prescription = $prescription;
    }

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOriginalPrescription()
    {
        return $this->originalPrescription;
    }

    /**
     * Original prescription to support the dispensing of pharmacy services, medications or products.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $originalPrescription
     */
    public function setOriginalPrescription($originalPrescription)
    {
        $this->originalPrescription = $originalPrescription;
    }

    /**
     * The party to be reimbursed for the services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimPayee
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * The party to be reimbursed for the services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimPayee $payee
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * The referral resource which lists the date, practitioner, reason and other supporting information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $referral
     */
    public function setReferral($referral)
    {
        $this->referral = $referral;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[]
     */
    public function getDiagnosis()
    {
        return $this->diagnosis;
    }

    /**
     * Ordered list of patient diagnosis for which care is sought.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimDiagnosis[] $diagnosis
     */
    public function addDiagnosis($diagnosis)
    {
        $this->diagnosis[] = $diagnosis;
    }

    /**
     * List of patient conditions for which care is sought.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * List of patient conditions for which care is sought.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $condition
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
    }

    /**
     * Patient Resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Patient Resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimCoverage[] $coverage
     */
    public function addCoverage($coverage)
    {
        $this->coverage[] = $coverage;
    }

    /**
     * Factors which may influence the applicability of coverage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Factors which may influence the applicability of coverage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $exception
     */
    public function addException($exception)
    {
        $this->exception[] = $exception;
    }

    /**
     * Name of school for over-aged dependents.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Name of school for over-aged dependents.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $school
     */
    public function setSchool($school)
    {
        $this->school = $school;
    }

    /**
     * Date of an accident which these services are addressing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getAccident()
    {
        return $this->accident;
    }

    /**
     * Date of an accident which these services are addressing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $accident
     */
    public function setAccident($accident)
    {
        $this->accident = $accident;
    }

    /**
     * Type of accident: work, auto, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getAccidentType()
    {
        return $this->accidentType;
    }

    /**
     * Type of accident: work, auto, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $accidentType
     */
    public function setAccidentType($accidentType)
    {
        $this->accidentType = $accidentType;
    }

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getInterventionException()
    {
        return $this->interventionException;
    }

    /**
     * A list of intervention and exception codes which may influence the adjudication of the claim.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $interventionException
     */
    public function addInterventionException($interventionException)
    {
        $this->interventionException[] = $interventionException;
    }

    /**
     * First tier of goods and services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * First tier of goods and services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimItem[] $item
     */
    public function addItem($item)
    {
        $this->item[] = $item;
    }

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getAdditionalMaterials()
    {
        return $this->additionalMaterials;
    }

    /**
     * Code to indicate that Xrays, images, emails, documents, models or attachments are being sent in support of this submission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $additionalMaterials
     */
    public function addAdditionalMaterials($additionalMaterials)
    {
        $this->additionalMaterials[] = $additionalMaterials;
    }

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth[]
     */
    public function getMissingTeeth()
    {
        return $this->missingTeeth;
    }

    /**
     * A list of teeth which would be expected but are not found due to having been previously  extracted or for other reasons.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaim\FHIRClaimMissingTeeth[] $missingTeeth
     */
    public function addMissingTeeth($missingTeeth)
    {
        $this->missingTeeth[] = $missingTeeth;
    }


}