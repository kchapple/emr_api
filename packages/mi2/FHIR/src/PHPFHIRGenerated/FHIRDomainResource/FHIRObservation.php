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
 * Measurements and simple assertions made about a patient, device or other subject.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRObservation extends FHIRDomainResource
{
    /**
     * A unique identifier for the simple observation instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the result value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public $status = null;

    /**
     * A code that classifies the general type of observation being made.  This is used  for searching, sorting and display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * Who was responsible for asserting the observed value as "true".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $performer = array();

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $dataAbsentReason = null;

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $interpretation = null;

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comments = null;

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Indicates the mechanism used to perform the observation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The specimen that was used when this observation was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $specimen = null;

    /**
     * The device used to generate the observation data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public $referenceRange = array();

    /**
     * A  reference to another resource (usually another Observation but could  also be a QuestionnaireAnswer) whose relationship is defined by the relationship type code.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public $related = array();

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public $component = array();

    /**
     * A unique identifier for the simple observation instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique identifier for the simple observation instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The status of the result value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the result value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRObservationStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * A code that classifies the general type of observation being made.  This is used  for searching, sorting and display purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code that classifies the general type of observation being made.  This is used  for searching, sorting and display purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Describes what was observed. Sometimes this is called the observation "name".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient, or group of patients, location, or device whose characteristics (direct or indirect) are described by the observation and into whose record the observation is placed.  Comments: Indirect characteristics may be those of a specimen, fetus, donor,  other observer (for example a relative or EMT), or any observation made about the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The healthcare event  (e.g. a patient and healthcare provider interaction) during which this observation is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The time or time-period the observed value is asserted as being true. For biological subjects - e.g. human patients - this is usually called the "physiologically relevant time". This is usually either the time of the procedure or of specimen collection, but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
    }

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * The date and time this observation was made available to providers, typically after the results have been reviewed and verified.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $issued
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Who was responsible for asserting the observed value as "true".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $performer
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * The information determined as a result of making the observation, if the information has a simple value. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDataAbsentReason()
    {
        return $this->dataAbsentReason;
    }

    /**
     * Provides a reason why the expected value in the element Observation.value[x] is missing.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $dataAbsentReason
     */
    public function setDataAbsentReason($dataAbsentReason)
    {
        $this->dataAbsentReason = $dataAbsentReason;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * The assessment made based on the result of the observation.  Intended as a simple compact code often placed adjacent to the result value in reports and flow sheets to signal the meaning/normalcy status of the result. Otherwise known as abnormal flag.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $interpretation
     */
    public function setInterpretation($interpretation)
    {
        $this->interpretation = $interpretation;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * May include statements about significant, unexpected or unreliable values, or information about the source of the value where this may be relevant to the interpretation of the result.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the observation was made (i.e. the target site).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $bodySite
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Indicates the mechanism used to perform the observation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * The specimen that was used when this observation was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * The specimen that was used when this observation was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $specimen
     */
    public function setSpecimen($specimen)
    {
        $this->specimen = $specimen;
    }

    /**
     * The device used to generate the observation data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device used to generate the observation data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $device
     */
    public function setDevice($device)
    {
        $this->device = $device;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * Guidance on how to interpret the value by comparison to a normal or recommended range.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationReferenceRange[] $referenceRange
     */
    public function addReferenceRange($referenceRange)
    {
        $this->referenceRange[] = $referenceRange;
    }

    /**
     * A  reference to another resource (usually another Observation but could  also be a QuestionnaireAnswer) whose relationship is defined by the relationship type code.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * A  reference to another resource (usually another Observation but could  also be a QuestionnaireAnswer) whose relationship is defined by the relationship type code.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationRelated[] $related
     */
    public function addRelated($related)
    {
        $this->related[] = $related;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent[]
     */
    public function getComponent()
    {
        return $this->component;
    }

    /**
     * Some observations have multiple component observations.  These component observations are expressed as separate code value pairs that share the same attributes.  Examples include systolic and diastolic component observations for blood pressure measurement and multiple component observations for genetics observations.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRObservation\FHIRObservationComponent[] $component
     */
    public function addComponent($component)
    {
        $this->component[] = $component;
    }


}