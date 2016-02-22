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
 * This resource provides the adjudication details from the processing of a Claim resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClaimResponse extends FHIRDomainResource
{
    /**
     * The Response business identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Original request resource referrence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $request = null;

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
     * The date when the enclosed suite of services were performed or completed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The Insurer who produced this adjudicated response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestOrganization = null;

    /**
     * Transaction status: error, complete.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $payeeType = null;

    /**
     * The first tier service adjudications for submitted services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public $item = array();

    /**
     * The first tier service adjudications for payor added services.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public $addItem = array();

    /**
     * Mutually exclusive with Services Provided (Item).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public $error = array();

    /**
     * The total cost of the services reported.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $totalCost = null;

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $unallocDeductable = null;

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $totalBenefit = null;

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $paymentAdjustment = null;

    /**
     * Reason for the payment adjustment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $paymentAdjustmentReason = null;

    /**
     * Estimated payment data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $paymentDate = null;

    /**
     * Payable less any payment adjustment.
     * @var \PHPFHIRGenerated\FHIRMoney
     */
    public $paymentAmount = null;

    /**
     * Payment identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $paymentRef = null;

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $reserved = null;

    /**
     * The form to be used for printing the content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $form = null;

    /**
     * Note text.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public $note = array();

    /**
     * Financial instrument by which payment information for health care.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public $coverage = array();

    /**
     * The Response business identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Original request resource referrence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Original request resource referrence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
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
     * The Insurer who produced this adjudicated response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * The Insurer who produced this adjudicated response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestProvider()
    {
        return $this->requestProvider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requestProvider
     */
    public function setRequestProvider($requestProvider)
    {
        $this->requestProvider = $requestProvider;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestOrganization()
    {
        return $this->requestOrganization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requestOrganization
     */
    public function setRequestOrganization($requestOrganization)
    {
        $this->requestOrganization = $requestOrganization;
    }

    /**
     * Transaction status: error, complete.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Transaction status: error, complete.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $outcome
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * A description of the status of the adjudication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisposition()
    {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $disposition
     */
    public function setDisposition($disposition)
    {
        $this->disposition = $disposition;
    }

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPayeeType()
    {
        return $this->payeeType;
    }

    /**
     * Party to be reimbursed: Subscriber, provider, other.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $payeeType
     */
    public function setPayeeType($payeeType)
    {
        $this->payeeType = $payeeType;
    }

    /**
     * The first tier service adjudications for submitted services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The first tier service adjudications for submitted services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseItem[] $item
     */
    public function addItem($item)
    {
        $this->item[] = $item;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[]
     */
    public function getAddItem()
    {
        return $this->addItem;
    }

    /**
     * The first tier service adjudications for payor added services.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseAddItem[] $addItem
     */
    public function addAddItem($addItem)
    {
        $this->addItem[] = $addItem;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseError[] $error
     */
    public function addError($error)
    {
        $this->error[] = $error;
    }

    /**
     * The total cost of the services reported.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * The total cost of the services reported.
     * @param \PHPFHIRGenerated\FHIRMoney $totalCost
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getUnallocDeductable()
    {
        return $this->unallocDeductable;
    }

    /**
     * The amount of deductible applied which was not allocated to any particular service line.
     * @param \PHPFHIRGenerated\FHIRMoney $unallocDeductable
     */
    public function setUnallocDeductable($unallocDeductable)
    {
        $this->unallocDeductable = $unallocDeductable;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getTotalBenefit()
    {
        return $this->totalBenefit;
    }

    /**
     * Total amount of benefit payable (Equal to sum of the Benefit amounts from all detail lines and additions less the Unallocated Deductible).
     * @param \PHPFHIRGenerated\FHIRMoney $totalBenefit
     */
    public function setTotalBenefit($totalBenefit)
    {
        $this->totalBenefit = $totalBenefit;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getPaymentAdjustment()
    {
        return $this->paymentAdjustment;
    }

    /**
     * Adjustment to the payment of this transaction which is not related to adjudication of this transaction.
     * @param \PHPFHIRGenerated\FHIRMoney $paymentAdjustment
     */
    public function setPaymentAdjustment($paymentAdjustment)
    {
        $this->paymentAdjustment = $paymentAdjustment;
    }

    /**
     * Reason for the payment adjustment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPaymentAdjustmentReason()
    {
        return $this->paymentAdjustmentReason;
    }

    /**
     * Reason for the payment adjustment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $paymentAdjustmentReason
     */
    public function setPaymentAdjustmentReason($paymentAdjustmentReason)
    {
        $this->paymentAdjustmentReason = $paymentAdjustmentReason;
    }

    /**
     * Estimated payment data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPaymentDate()
    {
        return $this->paymentDate;
    }

    /**
     * Estimated payment data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $paymentDate
     */
    public function setPaymentDate($paymentDate)
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * Payable less any payment adjustment.
     * @return \PHPFHIRGenerated\FHIRMoney
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Payable less any payment adjustment.
     * @param \PHPFHIRGenerated\FHIRMoney $paymentAmount
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * Payment identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPaymentRef()
    {
        return $this->paymentRef;
    }

    /**
     * Payment identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $paymentRef
     */
    public function setPaymentRef($paymentRef)
    {
        $this->paymentRef = $paymentRef;
    }

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getReserved()
    {
        return $this->reserved;
    }

    /**
     * Status of funds reservation (For provider, for Patient, None).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $reserved
     */
    public function setReserved($reserved)
    {
        $this->reserved = $reserved;
    }

    /**
     * The form to be used for printing the content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $form
     */
    public function setForm($form)
    {
        $this->form = $form;
    }

    /**
     * Note text.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Note text.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseNote[] $note
     */
    public function addNote($note)
    {
        $this->note[] = $note;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage[]
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Financial instrument by which payment information for health care.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClaimResponse\FHIRClaimResponseCoverage[] $coverage
     */
    public function addCoverage($coverage)
    {
        $this->coverage[] = $coverage;
    }


}