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
 * Used to record and send details about a request for referral service or transfer of a patient to the care of another provider or provider organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRReferralRequest extends FHIRDomainResource
{
    /**
     * The workflow status of the referral or transfer of care request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReferralStatus
     */
    public $status = null;

    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The healthcare provider or provider organization who/which initiated the referral/transfer of care request. Can also be  Patient (a self referral).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requester = null;

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $recipient = array();

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Date/DateTime the request for referral or transfer of care is sent by the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateSent = null;

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reason = null;

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceRequested = array();

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * The period of time within which the services identified in the referral/transfer of care is specified or required to occur.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $fulfillmentTime = null;

    /**
     * The workflow status of the referral or transfer of care request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReferralStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The workflow status of the referral or transfer of care request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReferralStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The healthcare provider or provider organization who/which initiated the referral/transfer of care request. Can also be  Patient (a self referral).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * The healthcare provider or provider organization who/which initiated the referral/transfer of care request. Can also be  Patient (a self referral).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requester
     */
    public function setRequester($requester)
    {
        $this->requester = $requester;
    }

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $recipient
     */
    public function addRecipient($recipient)
    {
        $this->recipient[] = $recipient;
    }

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * Date/DateTime the request for referral or transfer of care is sent by the author.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * Date/DateTime the request for referral or transfer of care is sent by the author.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateSent
     */
    public function setDateSent($dateSent)
    {
        $this->dateSent = $dateSent;
    }

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceRequested()
    {
        return $this->serviceRequested;
    }

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $serviceRequested
     */
    public function addServiceRequested($serviceRequested)
    {
        $this->serviceRequested[] = $serviceRequested;
    }

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $supportingInformation
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
    }

    /**
     * The period of time within which the services identified in the referral/transfer of care is specified or required to occur.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getFulfillmentTime()
    {
        return $this->fulfillmentTime;
    }

    /**
     * The period of time within which the services identified in the referral/transfer of care is specified or required to occur.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $fulfillmentTime
     */
    public function setFulfillmentTime($fulfillmentTime)
    {
        $this->fulfillmentTime = $fulfillmentTime;
    }


}