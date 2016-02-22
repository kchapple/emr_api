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
 * Use to record detailed information about conditions, problems or diagnoses recognized by a clinician. There are many uses including: recording a diagnosis during an encounter; populating a problem list or a summary statement, such as a discharge summary.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCondition extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Indicates the patient who the condition record is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Encounter during which the condition was first asserted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Individual who is making the condition statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $asserter = null;

    /**
     * A date, when  the Condition statement was documented.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $dateRecorded = null;

    /**
     * Identification of the condition, problem or diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A category assigned to the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $clinicalStatus = null;

    /**
     * The verification status to support the clinical status of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    public $verificationStatus = null;

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $onsetDateTime = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRAge
     */
    public $onsetQuantity = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $onsetPeriod = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $onsetRange = null;

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $onsetString = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $abatementDateTime = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRAge
     */
    public $abatementQuantity = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $abatementBoolean = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $abatementPeriod = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $abatementRange = null;

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $abatementString = null;

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public $stage = null;

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public $evidence = array();

    /**
     * The anatomical location where this condition manifests itself.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this condition that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Indicates the patient who the condition record is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Encounter during which the condition was first asserted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * Individual who is making the condition statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * Individual who is making the condition statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $asserter
     */
    public function setAsserter($asserter)
    {
        $this->asserter = $asserter;
    }

    /**
     * A date, when  the Condition statement was documented.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDateRecorded()
    {
        return $this->dateRecorded;
    }

    /**
     * A date, when  the Condition statement was documented.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $dateRecorded
     */
    public function setDateRecorded($dateRecorded)
    {
        $this->dateRecorded = $dateRecorded;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identification of the condition, problem or diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * A category assigned to the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A category assigned to the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The clinical status of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getClinicalStatus()
    {
        return $this->clinicalStatus;
    }

    /**
     * The clinical status of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $clinicalStatus
     */
    public function setClinicalStatus($clinicalStatus)
    {
        $this->clinicalStatus = $clinicalStatus;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus
     */
    public function getVerificationStatus()
    {
        return $this->verificationStatus;
    }

    /**
     * The verification status to support the clinical status of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConditionVerificationStatus $verificationStatus
     */
    public function setVerificationStatus($verificationStatus)
    {
        $this->verificationStatus = $verificationStatus;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * A subjective assessment of the severity of the condition as evaluated by the clinician.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOnsetDateTime()
    {
        return $this->onsetDateTime;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $onsetDateTime
     */
    public function setOnsetDateTime($onsetDateTime)
    {
        $this->onsetDateTime = $onsetDateTime;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRAge
     */
    public function getOnsetQuantity()
    {
        return $this->onsetQuantity;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRAge $onsetQuantity
     */
    public function setOnsetQuantity($onsetQuantity)
    {
        $this->onsetQuantity = $onsetQuantity;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getOnsetPeriod()
    {
        return $this->onsetPeriod;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $onsetPeriod
     */
    public function setOnsetPeriod($onsetPeriod)
    {
        $this->onsetPeriod = $onsetPeriod;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getOnsetRange()
    {
        return $this->onsetRange;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $onsetRange
     */
    public function setOnsetRange($onsetRange)
    {
        $this->onsetRange = $onsetRange;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getOnsetString()
    {
        return $this->onsetString;
    }

    /**
     * Estimated or actual date or date-time  the condition began, in the opinion of the clinician. (choose any one of onset*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $onsetString
     */
    public function setOnsetString($onsetString)
    {
        $this->onsetString = $onsetString;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAbatementDateTime()
    {
        return $this->abatementDateTime;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $abatementDateTime
     */
    public function setAbatementDateTime($abatementDateTime)
    {
        $this->abatementDateTime = $abatementDateTime;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRAge
     */
    public function getAbatementQuantity()
    {
        return $this->abatementQuantity;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRAge $abatementQuantity
     */
    public function setAbatementQuantity($abatementQuantity)
    {
        $this->abatementQuantity = $abatementQuantity;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAbatementBoolean()
    {
        return $this->abatementBoolean;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $abatementBoolean
     */
    public function setAbatementBoolean($abatementBoolean)
    {
        $this->abatementBoolean = $abatementBoolean;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getAbatementPeriod()
    {
        return $this->abatementPeriod;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $abatementPeriod
     */
    public function setAbatementPeriod($abatementPeriod)
    {
        $this->abatementPeriod = $abatementPeriod;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAbatementRange()
    {
        return $this->abatementRange;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $abatementRange
     */
    public function setAbatementRange($abatementRange)
    {
        $this->abatementRange = $abatementRange;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAbatementString()
    {
        return $this->abatementString;
    }

    /**
     * The date or estimated date that the condition resolved or went into remission. This is called "abatement" because of the many overloaded connotations associated with "remission" or "resolution" - Conditions are never really resolved, but they can abate. (choose any one of abatement*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $abatementString
     */
    public function setAbatementString($abatementString)
    {
        $this->abatementString = $abatementString;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Clinical stage or grade of a condition. May include formal severity assessments.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionStage $stage
     */
    public function setStage($stage)
    {
        $this->stage = $stage;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * Supporting Evidence / manifestations that are the basis on which this condition is suspected or confirmed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCondition\FHIRConditionEvidence[] $evidence
     */
    public function addEvidence($evidence)
    {
        $this->evidence[] = $evidence;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * The anatomical location where this condition manifests itself.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $bodySite
     */
    public function addBodySite($bodySite)
    {
        $this->bodySite[] = $bodySite;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Additional information about the Condition. This is a general notes/comments entry  for description of the Condition, its diagnosis and prognosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }


}