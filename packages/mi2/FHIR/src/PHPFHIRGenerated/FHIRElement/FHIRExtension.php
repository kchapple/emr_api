<?php namespace PHPFHIRGenerated\FHIRElement;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * Optional Extensions Element - found in all resources.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRExtension extends FHIRElement
{
    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $valueBoolean = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $valueInteger = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $valueDecimal = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $valueBase64Binary = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $valueInstant = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $valueString = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $valueUri = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $valueDate = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $valueDateTime = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $valueTime = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $valueCode = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $valueOid = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $valueUuid = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $valueId = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $valueUnsignedInt = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $valuePositiveInt = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $valueMarkdown = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $valueAnnotation = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $valueAttachment = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $valueIdentifier = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $valueCodeableConcept = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $valueCoding = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $valueQuantity = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $valueRange = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $valuePeriod = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $valueRatio = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $valueReference = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $valueSampledData = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $valueSignature = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $valueHumanName = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $valueAddress = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $valueContactPoint = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $valueTiming = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $valueMeta = null;

    /**
     * @var string
     */
    public $url = null;

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getValueBoolean()
    {
        return $this->valueBoolean;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $valueBoolean
     */
    public function setValueBoolean($valueBoolean)
    {
        $this->valueBoolean = $valueBoolean;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getValueInteger()
    {
        return $this->valueInteger;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $valueInteger
     */
    public function setValueInteger($valueInteger)
    {
        $this->valueInteger = $valueInteger;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $valueDecimal
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getValueBase64Binary()
    {
        return $this->valueBase64Binary;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $valueBase64Binary
     */
    public function setValueBase64Binary($valueBase64Binary)
    {
        $this->valueBase64Binary = $valueBase64Binary;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getValueInstant()
    {
        return $this->valueInstant;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $valueInstant
     */
    public function setValueInstant($valueInstant)
    {
        $this->valueInstant = $valueInstant;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $valueString
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getValueUri()
    {
        return $this->valueUri;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $valueUri
     */
    public function setValueUri($valueUri)
    {
        $this->valueUri = $valueUri;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getValueDate()
    {
        return $this->valueDate;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $valueDate
     */
    public function setValueDate($valueDate)
    {
        $this->valueDate = $valueDate;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $valueDateTime
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getValueTime()
    {
        return $this->valueTime;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $valueTime
     */
    public function setValueTime($valueTime)
    {
        $this->valueTime = $valueTime;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getValueCode()
    {
        return $this->valueCode;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $valueCode
     */
    public function setValueCode($valueCode)
    {
        $this->valueCode = $valueCode;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getValueOid()
    {
        return $this->valueOid;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $valueOid
     */
    public function setValueOid($valueOid)
    {
        $this->valueOid = $valueOid;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getValueUuid()
    {
        return $this->valueUuid;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $valueUuid
     */
    public function setValueUuid($valueUuid)
    {
        $this->valueUuid = $valueUuid;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getValueId()
    {
        return $this->valueId;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $valueId
     */
    public function setValueId($valueId)
    {
        $this->valueId = $valueId;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getValueUnsignedInt()
    {
        return $this->valueUnsignedInt;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $valueUnsignedInt
     */
    public function setValueUnsignedInt($valueUnsignedInt)
    {
        $this->valueUnsignedInt = $valueUnsignedInt;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getValuePositiveInt()
    {
        return $this->valuePositiveInt;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $valuePositiveInt
     */
    public function setValuePositiveInt($valuePositiveInt)
    {
        $this->valuePositiveInt = $valuePositiveInt;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getValueMarkdown()
    {
        return $this->valueMarkdown;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $valueMarkdown
     */
    public function setValueMarkdown($valueMarkdown)
    {
        $this->valueMarkdown = $valueMarkdown;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getValueAnnotation()
    {
        return $this->valueAnnotation;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $valueAnnotation
     */
    public function setValueAnnotation($valueAnnotation)
    {
        $this->valueAnnotation = $valueAnnotation;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getValueAttachment()
    {
        return $this->valueAttachment;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $valueAttachment
     */
    public function setValueAttachment($valueAttachment)
    {
        $this->valueAttachment = $valueAttachment;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getValueIdentifier()
    {
        return $this->valueIdentifier;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $valueIdentifier
     */
    public function setValueIdentifier($valueIdentifier)
    {
        $this->valueIdentifier = $valueIdentifier;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getValueCodeableConcept()
    {
        return $this->valueCodeableConcept;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $valueCodeableConcept
     */
    public function setValueCodeableConcept($valueCodeableConcept)
    {
        $this->valueCodeableConcept = $valueCodeableConcept;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getValueCoding()
    {
        return $this->valueCoding;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $valueCoding
     */
    public function setValueCoding($valueCoding)
    {
        $this->valueCoding = $valueCoding;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $valueQuantity
     */
    public function setValueQuantity($valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getValueRange()
    {
        return $this->valueRange;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $valueRange
     */
    public function setValueRange($valueRange)
    {
        $this->valueRange = $valueRange;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getValuePeriod()
    {
        return $this->valuePeriod;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $valuePeriod
     */
    public function setValuePeriod($valuePeriod)
    {
        $this->valuePeriod = $valuePeriod;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getValueRatio()
    {
        return $this->valueRatio;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $valueRatio
     */
    public function setValueRatio($valueRatio)
    {
        $this->valueRatio = $valueRatio;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $valueReference
     */
    public function setValueReference($valueReference)
    {
        $this->valueReference = $valueReference;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getValueSampledData()
    {
        return $this->valueSampledData;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $valueSampledData
     */
    public function setValueSampledData($valueSampledData)
    {
        $this->valueSampledData = $valueSampledData;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getValueSignature()
    {
        return $this->valueSignature;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $valueSignature
     */
    public function setValueSignature($valueSignature)
    {
        $this->valueSignature = $valueSignature;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getValueHumanName()
    {
        return $this->valueHumanName;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $valueHumanName
     */
    public function setValueHumanName($valueHumanName)
    {
        $this->valueHumanName = $valueHumanName;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getValueAddress()
    {
        return $this->valueAddress;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $valueAddress
     */
    public function setValueAddress($valueAddress)
    {
        $this->valueAddress = $valueAddress;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getValueContactPoint()
    {
        return $this->valueContactPoint;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $valueContactPoint
     */
    public function setValueContactPoint($valueContactPoint)
    {
        $this->valueContactPoint = $valueContactPoint;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getValueTiming()
    {
        return $this->valueTiming;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $valueTiming
     */
    public function setValueTiming($valueTiming)
    {
        $this->valueTiming = $valueTiming;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getValueMeta()
    {
        return $this->valueMeta;
    }

    /**
     * Value of extension - may be a resource or one of a constrained set of the data types (see Extensibility in the spec for list). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $valueMeta
     */
    public function setValueMeta($valueMeta)
    {
        $this->valueMeta = $valueMeta;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}