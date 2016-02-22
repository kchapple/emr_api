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
 * Describes the intended objective(s) for a patient, group or organization care, for example, weight loss, restoring an activity of daily living, obtaining herd immunity via immunization, meeting a process improvement objective, etc.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGoal extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this care plan that are defined by business processes and/or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $startDate = null;

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $startCodeableConcept = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $targetDate = null;

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @var \PHPFHIRGenerated\FHIRDuration
     */
    public $targetQuantity = null;

    /**
     * Indicates a category the goal falls within.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = array();

    /**
     * Human-readable description of a specific desired objective of care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public $status = null;

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $statusDate = null;

    /**
     * Captures the reason for the current status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $addresses = array();

    /**
     * Any comments related to the goal.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Identifies the change (or lack of change) at the point where the goal was deepmed to be cancelled or achieved.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome[]
     */
    public $outcome = array();

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
     * Identifies the patient, group or organization for whom the goal is being established.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Identifies the patient, group or organization for whom the goal is being established.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStartCodeableConcept()
    {
        return $this->startCodeableConcept;
    }

    /**
     * The date or event after which the goal should begin being pursued. (choose any one of start*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $startCodeableConcept
     */
    public function setStartCodeableConcept($startCodeableConcept)
    {
        $this->startCodeableConcept = $startCodeableConcept;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getTargetDate()
    {
        return $this->targetDate;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $targetDate
     */
    public function setTargetDate($targetDate)
    {
        $this->targetDate = $targetDate;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @return \PHPFHIRGenerated\FHIRDuration
     */
    public function getTargetQuantity()
    {
        return $this->targetQuantity;
    }

    /**
     * Indicates either the date or the duration after start by which the goal should be met. (choose any one of target*, but only one)
     * @param \PHPFHIRGenerated\FHIRDuration $targetQuantity
     */
    public function setTargetQuantity($targetQuantity)
    {
        $this->targetQuantity = $targetQuantity;
    }

    /**
     * Indicates a category the goal falls within.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Indicates a category the goal falls within.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $category
     */
    public function addCategory($category)
    {
        $this->category[] = $category;
    }

    /**
     * Human-readable description of a specific desired objective of care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of a specific desired objective of care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the goal has been reached and is still considered relevant.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGoalStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getStatusDate()
    {
        return $this->statusDate;
    }

    /**
     * Identifies when the current status.  I.e. When initially created, when achieved, when cancelled, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $statusDate
     */
    public function setStatusDate($statusDate)
    {
        $this->statusDate = $statusDate;
    }

    /**
     * Captures the reason for the current status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Captures the reason for the current status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     */
    public function setStatusReason($statusReason)
    {
        $this->statusReason = $statusReason;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Indicates whose goal this is - patient goal, practitioner goal, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the mutually agreed level of importance associated with reaching/sustaining the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * The identified conditions and other health record elements that are intended to be addressed by the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $addresses
     */
    public function addAddresses($addresses)
    {
        $this->addresses[] = $addresses;
    }

    /**
     * Any comments related to the goal.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any comments related to the goal.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     */
    public function addNote($note)
    {
        $this->note[] = $note;
    }

    /**
     * Identifies the change (or lack of change) at the point where the goal was deepmed to be cancelled or achieved.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome[]
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Identifies the change (or lack of change) at the point where the goal was deepmed to be cancelled or achieved.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGoal\FHIRGoalOutcome[] $outcome
     */
    public function addOutcome($outcome)
    {
        $this->outcome[] = $outcome;
    }


}