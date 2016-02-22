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
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCarePlan extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public $status = null;

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $modified = null;

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * A description of the scope and nature of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $addresses = array();

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $support = array();

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
     */
    public $relatedPlan = array();

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    public $participant = array();

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $goal = array();

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public $activity = array();

    /**
     * General notes about the care plan not covered elsewhere.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient or group whose intended care is described by the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the plan is currently being acted upon, represents future intentions or is now a historical record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Identifies the context in which this particular CarePlan is defined.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Indicates when the plan did (or is intended to) come into effect and end.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies the individual(s) or ogranization who is responsible for the content of the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $author
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
    }

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Identifies the most recent date on which the plan has been revised.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Identifies what "kind" of plan this is to support differentiation between multiple co-existing plans; e.g. "Home health", "psychiatric", "asthma", "disease management", "wellness plan", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $category
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
    }

    /**
     * A description of the scope and nature of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the scope and nature of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Identifies the conditions/problems/concerns/diagnoses/etc. whose management and/or mitigation are handled by this plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $addresses
     */
    public function addAddresses($addresses)
    {
        $this->addresses[] = $addresses;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Identifies portions of the patient's record that specifically influenced the formation of the plan.  These might include co-morbidities, recent procedures, limitations, recent assessments, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $support
     */
    public function addSupport($support)
    {
        $this->support[] = $support;
    }

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan[]
     */
    public function getRelatedPlan()
    {
        return $this->relatedPlan;
    }

    /**
     * Identifies CarePlans with some sort of formal relationship to the current plan.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanRelatedPlan[] $relatedPlan
     */
    public function addRelatedPlan($relatedPlan)
    {
        $this->relatedPlan[] = $relatedPlan;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * Identifies all people and organizations who are expected to be involved in the care envisioned by this plan.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanParticipant[] $participant
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Describes the intended objective(s) of carrying out the care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $goal
     */
    public function addGoal($goal)
    {
        $this->goal[] = $goal;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Identifies a planned action to occur as part of the plan.  For example, a medication to be used, lab tests to perform, self-monitoring, education, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCarePlan\FHIRCarePlanActivity[] $activity
     */
    public function addActivity($activity)
    {
        $this->activity[] = $activity;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * General notes about the care plan not covered elsewhere.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }


}