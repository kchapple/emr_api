<?php namespace PHPFHIRGenerated\FHIRResource\FHIRParameters;

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
 * This special resource type is used to represent an operation request and response (operations.html). It has no other use, and there is no RESTful endpoint associated with it.
 */
class FHIRParametersParameter extends FHIRBackboneElement
{
    /**
     * The name of the parameter (reference to the operation definition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $valueUuid = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $valueMeta = null;

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRElementDefinition
     */
    public $valueElementDefinition = null;

    /**
     * If the parameter is a whole resource.
     * @var \PHPFHIRGenerated\FHIRResourceContainer
     */
    public $resource = null;

    /**
     * A named part of a parameter. In many implementation context, a set of named parts is known as a "Tuple".
     * @var \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter[]
     */
    public $part = array();

    /**
     * The name of the parameter (reference to the operation definition).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the parameter (reference to the operation definition).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $valueBase64Binary
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $valueCode
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $valueOid
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $valueUuid
     */
    public function setValueUuid($valueUuid)
    {
        $this->valueUuid = $valueUuid;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $valueId
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $valuePositiveInt
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $valueMarkdown
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $valueAnnotation
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $valueIdentifier
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $valueSignature
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $valueHumanName
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $valueAddress
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $valueContactPoint
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $valueTiming
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $valueMeta
     */
    public function setValueMeta($valueMeta)
    {
        $this->valueMeta = $valueMeta;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRElementDefinition
     */
    public function getValueElementDefinition()
    {
        return $this->valueElementDefinition;
    }

    /**
     * If the parameter is a data type. (choose any one of value*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRElementDefinition $valueElementDefinition
     */
    public function setValueElementDefinition($valueElementDefinition)
    {
        $this->valueElementDefinition = $valueElementDefinition;
    }

    /**
     * If the parameter is a whole resource.
     * @return \PHPFHIRGenerated\FHIRResourceContainer
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * If the parameter is a whole resource.
     * @param \PHPFHIRGenerated\FHIRResourceContainer $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * A named part of a parameter. In many implementation context, a set of named parts is known as a "Tuple".
     * @return \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter[]
     */
    public function getPart()
    {
        return $this->part;
    }

    /**
     * A named part of a parameter. In many implementation context, a set of named parts is known as a "Tuple".
     * @param \PHPFHIRGenerated\FHIRResource\FHIRParameters\FHIRParametersParameter[] $part
     */
    public function addPart($part)
    {
        $this->part[] = $part;
    }


}