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
 * Significant health events and conditions for a person related to the patient relevant in the context of care for the patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRFamilyMemberHistory extends FHIRDomainResource
{
    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The person who this history concerns.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The date (and possibly time) when the family member history was taken.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A code specifying a state of a Family Member History record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public $status = null;

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $gender = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $bornPeriod = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $bornDate = null;

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $bornString = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRAge
     */
    public $ageQuantity = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $ageRange = null;

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $ageString = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRAge
     */
    public $deceasedQuantity = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $deceasedRange = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $deceasedDate = null;

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deceasedString = null;

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $note = null;

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public $condition = array();

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * This records identifiers associated with this family member history record that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The person who this history concerns.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The person who this history concerns.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date (and possibly time) when the family member history was taken.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * A code specifying a state of a Family Member History record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A code specifying a state of a Family Member History record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRFamilyHistoryStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * This will either be a name or a description; e.g. "Aunt Susan", "my cousin with the red hair".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * The type of relationship this person has to the patient (father, mother, brother etc.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $relationship
     */
    public function setRelationship($relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the relative is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBornPeriod()
    {
        return $this->bornPeriod;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $bornPeriod
     */
    public function setBornPeriod($bornPeriod)
    {
        $this->bornPeriod = $bornPeriod;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBornDate()
    {
        return $this->bornDate;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $bornDate
     */
    public function setBornDate($bornDate)
    {
        $this->bornDate = $bornDate;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBornString()
    {
        return $this->bornString;
    }

    /**
     * The actual or approximate date of birth of the relative. (choose any one of born*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $bornString
     */
    public function setBornString($bornString)
    {
        $this->bornString = $bornString;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRAge
     */
    public function getAgeQuantity()
    {
        return $this->ageQuantity;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRAge $ageQuantity
     */
    public function setAgeQuantity($ageQuantity)
    {
        $this->ageQuantity = $ageQuantity;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getAgeRange()
    {
        return $this->ageRange;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $ageRange
     */
    public function setAgeRange($ageRange)
    {
        $this->ageRange = $ageRange;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAgeString()
    {
        return $this->ageString;
    }

    /**
     * The actual or approximate age of the relative at the time the family member history is recorded. (choose any one of age*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $ageString
     */
    public function setAgeString($ageString)
    {
        $this->ageString = $ageString;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deceasedBoolean
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        $this->deceasedBoolean = $deceasedBoolean;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRAge
     */
    public function getDeceasedQuantity()
    {
        return $this->deceasedQuantity;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRAge $deceasedQuantity
     */
    public function setDeceasedQuantity($deceasedQuantity)
    {
        $this->deceasedQuantity = $deceasedQuantity;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDeceasedRange()
    {
        return $this->deceasedRange;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $deceasedRange
     */
    public function setDeceasedRange($deceasedRange)
    {
        $this->deceasedRange = $deceasedRange;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDeceasedDate()
    {
        return $this->deceasedDate;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $deceasedDate
     */
    public function setDeceasedDate($deceasedDate)
    {
        $this->deceasedDate = $deceasedDate;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeceasedString()
    {
        return $this->deceasedString;
    }

    /**
     * Deceased flag or the actual or approximate age of the relative at the time of death for the family member history record. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deceasedString
     */
    public function setDeceasedString($deceasedString)
    {
        $this->deceasedString = $deceasedString;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * This property allows a non condition-specific note to the made about the related person. Ideally, the note would be in the condition property, but this is not always possible.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * The significant Conditions (or condition) that the family member had. This is a repeating section to allow a system to represent more than one condition per resource, though there is nothing stopping multiple resources - one per condition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRFamilyMemberHistory\FHIRFamilyMemberHistoryCondition[] $condition
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
    }


}