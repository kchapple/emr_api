<?php namespace PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse;

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
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 */
class FHIRQuestionnaireResponseAnswer extends FHIRBackboneElement
{
    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup[]
     */
    public $group = array();

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * The answer (or one of the answers) provided by the respondent to the question. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Nested group, containing nested question for this question. The order of groups within the question is relevant.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup[] $group
     */
    public function addGroup($group)
    {
        $this->group[] = $group;
    }


}