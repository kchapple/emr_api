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
 * A record of a clinical assessment performed to determine what problem(s) may affect the patient and before planning the treatments or management strategies that are best to manage a patient's condition. Assessments are often 1:1 with a clinical consultation / encounter,  but this varies greatly depending on the clinical workflow. This resource is called "ClinicalImpression" rather than "ClinicalAssessment" to avoid confusion with the recording of assessment tools such as Apgar score.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRClinicalImpression extends FHIRDomainResource
{
    /**
     * The patient being assessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The clinician performing the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $assessor = null;

    /**
     * Identifies the workflow status of the assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public $status = null;

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $previous = null;

    /**
     * This a list of the general problems/conditions for a patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $problem = array();

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $triggerCodeableConcept = null;

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $triggerReference = null;

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public $investigations = array();

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $protocol = null;

    /**
     * A text summary of the investigations and the diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $summary = null;

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public $finding = array();

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $resolved = array();

    /**
     * Diagnosis considered not possible.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public $ruledOut = array();

    /**
     * Estimate of likely outcome.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $prognosis = null;

    /**
     * Plan of action after assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $plan = array();

    /**
     * Actions taken during assessment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $action = array();

    /**
     * The patient being assessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient being assessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The clinician performing the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssessor()
    {
        return $this->assessor;
    }

    /**
     * The clinician performing the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $assessor
     */
    public function setAssessor($assessor)
    {
        $this->assessor = $assessor;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Identifies the workflow status of the assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRClinicalImpressionStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The point in time at which the assessment was concluded (not when it was recorded).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A summary of the context and/or cause of the assessment - why / where was it peformed, and what patient events/sstatus prompted it.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * A reference to the last assesment that was conducted bon this patient. Assessments are often/usually ongoing in nature; a care provider (practitioner or team) will make new assessments on an ongoing basis as new data arises or the patient's conditions changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $previous
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProblem()
    {
        return $this->problem;
    }

    /**
     * This a list of the general problems/conditions for a patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $problem
     */
    public function addProblem($problem)
    {
        $this->problem[] = $problem;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getTriggerCodeableConcept()
    {
        return $this->triggerCodeableConcept;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $triggerCodeableConcept
     */
    public function setTriggerCodeableConcept($triggerCodeableConcept)
    {
        $this->triggerCodeableConcept = $triggerCodeableConcept;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getTriggerReference()
    {
        return $this->triggerReference;
    }

    /**
     * The request or event that necessitated this assessment. This may be a diagnosis, a Care Plan, a Request Referral, or some other resource. (choose any one of trigger*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $triggerReference
     */
    public function setTriggerReference($triggerReference)
    {
        $this->triggerReference = $triggerReference;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[]
     */
    public function getInvestigations()
    {
        return $this->investigations;
    }

    /**
     * One or more sets of investigations (signs, symptions, etc.). The actual grouping of investigations vary greatly depending on the type and context of the assessment. These investigations may include data generated during the assessment process, or data previously generated and recorded that is pertinent to the outcomes.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionInvestigations[] $investigations
     */
    public function addInvestigations($investigations)
    {
        $this->investigations[] = $investigations;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * Reference to a specific published clinical protocol that was followed during this assessment, and/or that provides evidence in support of the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $protocol
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * A text summary of the investigations and the diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[]
     */
    public function getFinding()
    {
        return $this->finding;
    }

    /**
     * Specific findings or diagnoses that was considered likely or relevant to ongoing treatment.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionFinding[] $finding
     */
    public function addFinding($finding)
    {
        $this->finding[] = $finding;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getResolved()
    {
        return $this->resolved;
    }

    /**
     * Diagnoses/conditions resolved since the last assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $resolved
     */
    public function addResolved($resolved)
    {
        $this->resolved[] = $resolved;
    }

    /**
     * Diagnosis considered not possible.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[]
     */
    public function getRuledOut()
    {
        return $this->ruledOut;
    }

    /**
     * Diagnosis considered not possible.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRClinicalImpression\FHIRClinicalImpressionRuledOut[] $ruledOut
     */
    public function addRuledOut($ruledOut)
    {
        $this->ruledOut[] = $ruledOut;
    }

    /**
     * Estimate of likely outcome.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPrognosis()
    {
        return $this->prognosis;
    }

    /**
     * Estimate of likely outcome.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $prognosis
     */
    public function setPrognosis($prognosis)
    {
        $this->prognosis = $prognosis;
    }

    /**
     * Plan of action after assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Plan of action after assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $plan
     */
    public function addPlan($plan)
    {
        $this->plan[] = $plan;
    }

    /**
     * Actions taken during assessment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Actions taken during assessment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $action
     */
    public function addAction($action)
    {
        $this->action[] = $action;
    }


}