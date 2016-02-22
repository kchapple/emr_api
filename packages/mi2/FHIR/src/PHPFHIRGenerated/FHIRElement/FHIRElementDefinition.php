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
 * Captures constraints on each element within the resource, profile, or extension.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRElementDefinition extends FHIRElement
{
    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $path = null;

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[]
     */
    public $representation = array();

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $code = array();

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public $slicing = null;

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $short = null;

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $definition = null;

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $comments = null;

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $requirements = null;

    /**
     * Identifies additional names by which this element might also be known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $alias = array();

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $min = null;

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $max = null;

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public $base = null;

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public $type = array();

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $nameReference = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $defaultValueBoolean = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $defaultValueInteger = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $defaultValueDecimal = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $defaultValueBase64Binary = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $defaultValueInstant = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $defaultValueString = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $defaultValueUri = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $defaultValueDate = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $defaultValueDateTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $defaultValueTime = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $defaultValueCode = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $defaultValueOid = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $defaultValueUuid = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $defaultValueId = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $defaultValueUnsignedInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $defaultValuePositiveInt = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $defaultValueMarkdown = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $defaultValueAnnotation = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $defaultValueAttachment = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $defaultValueIdentifier = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $defaultValueCodeableConcept = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $defaultValueCoding = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $defaultValueQuantity = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $defaultValueRange = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $defaultValuePeriod = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $defaultValueRatio = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $defaultValueReference = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $defaultValueSampledData = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $defaultValueSignature = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $defaultValueHumanName = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $defaultValueAddress = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $defaultValueContactPoint = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $defaultValueTiming = null;

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $defaultValueMeta = null;

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $meaningWhenMissing = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $fixedBoolean = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $fixedInteger = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $fixedDecimal = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $fixedBase64Binary = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $fixedInstant = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $fixedString = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $fixedUri = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $fixedDate = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $fixedDateTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $fixedTime = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $fixedCode = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $fixedOid = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $fixedUuid = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fixedId = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $fixedUnsignedInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $fixedPositiveInt = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $fixedMarkdown = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $fixedAnnotation = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $fixedAttachment = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $fixedIdentifier = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $fixedCodeableConcept = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $fixedCoding = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $fixedQuantity = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $fixedRange = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $fixedPeriod = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $fixedRatio = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $fixedReference = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $fixedSampledData = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $fixedSignature = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $fixedHumanName = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $fixedAddress = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $fixedContactPoint = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $fixedTiming = null;

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $fixedMeta = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $patternBoolean = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $patternInteger = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $patternDecimal = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $patternBase64Binary = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $patternInstant = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $patternString = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $patternUri = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $patternDate = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $patternDateTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $patternTime = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $patternCode = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $patternOid = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $patternUuid = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $patternId = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $patternUnsignedInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $patternPositiveInt = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $patternMarkdown = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $patternAnnotation = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $patternAttachment = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $patternIdentifier = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $patternCodeableConcept = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $patternCoding = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $patternQuantity = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $patternRange = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $patternPeriod = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $patternRatio = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patternReference = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $patternSampledData = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $patternSignature = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $patternHumanName = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $patternAddress = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $patternContactPoint = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $patternTiming = null;

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $patternMeta = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $exampleInteger = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $exampleDecimal = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $exampleBase64Binary = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $exampleInstant = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $exampleString = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $exampleUri = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $exampleDate = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $exampleDateTime = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $exampleTime = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $exampleCode = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $exampleOid = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $exampleUuid = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $exampleId = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $exampleUnsignedInt = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $examplePositiveInt = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $exampleMarkdown = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $exampleAnnotation = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $exampleAttachment = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $exampleIdentifier = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $exampleCodeableConcept = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $exampleCoding = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $exampleQuantity = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $exampleRange = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $examplePeriod = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $exampleRatio = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $exampleReference = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $exampleSampledData = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $exampleSignature = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $exampleHumanName = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $exampleAddress = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $exampleContactPoint = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $exampleTiming = null;

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $exampleMeta = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $minValueBoolean = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $minValueInteger = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $minValueDecimal = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $minValueBase64Binary = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $minValueInstant = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $minValueString = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $minValueUri = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $minValueDate = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $minValueDateTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $minValueTime = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $minValueCode = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $minValueOid = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $minValueUuid = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $minValueId = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $minValueUnsignedInt = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $minValuePositiveInt = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $minValueMarkdown = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $minValueAnnotation = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $minValueAttachment = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $minValueIdentifier = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $minValueCodeableConcept = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $minValueCoding = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $minValueQuantity = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $minValueRange = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $minValuePeriod = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $minValueRatio = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $minValueReference = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $minValueSampledData = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $minValueSignature = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $minValueHumanName = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $minValueAddress = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $minValueContactPoint = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $minValueTiming = null;

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $minValueMeta = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $maxValueBoolean = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxValueInteger = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $maxValueDecimal = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $maxValueBase64Binary = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $maxValueInstant = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $maxValueString = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $maxValueUri = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $maxValueDate = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $maxValueDateTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public $maxValueTime = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $maxValueCode = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $maxValueOid = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public $maxValueUuid = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $maxValueId = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $maxValueUnsignedInt = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $maxValuePositiveInt = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public $maxValueMarkdown = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public $maxValueAnnotation = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $maxValueAttachment = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $maxValueIdentifier = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $maxValueCodeableConcept = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $maxValueCoding = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public $maxValueQuantity = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $maxValueRange = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $maxValuePeriod = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxValueRatio = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $maxValueReference = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public $maxValueSampledData = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public $maxValueSignature = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $maxValueHumanName = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $maxValueAddress = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public $maxValueContactPoint = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $maxValueTiming = null;

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public $maxValueMeta = null;

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $maxLength = null;

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public $condition = array();

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public $constraint = array();

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $mustSupport = null;

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isModifier = null;

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $isSummary = null;

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public $binding = null;

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public $mapping = array();

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path identifies the element and is expressed as a "."-separated list of ancestor elements, beginning with the name of the resource or extension.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * Codes that define how this element is represented in instances, when the deviation varies from the normal case.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPropertyRepresentation[] $representation
     */
    public function addRepresentation($representation)
    {
        $this->representation[] = $representation;
    }

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of this element definition (to refer to it from other element definitions using ElementDefinition.nameReference). This is a unique name referring to a specific set of constraints applied to this element. One use of this is to provide a name to different slices of the same element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The text to display beside the element indicating its meaning or to use to prompt for the element in a user display or form.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code that provides the meaning for the element according to a particular terminology.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $code
     */
    public function addCode($code)
    {
        $this->code[] = $code;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }

    /**
     * Indicates that the element is sliced into a set of alternative definitions (i.e. in a structure definition, there are multiple different constraints on a single element in the base resource). Slicing can be used in any resource that has cardinality ..* on the base resource, or any resource with a choice of types. The set of slices is any elements that come after this in the element sequence that have the same path, until a shorter path occurs (the shorter path terminates the set).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionSlicing $slicing
     */
    public function setSlicing($slicing)
    {
        $this->slicing = $slicing;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * A concise description of what this element means (e.g. for use in autogenerated summaries).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $short
     */
    public function setShort($short)
    {
        $this->short = $short;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Provides a complete explanation of the meaning of the data element for human readability.  For the case of elements derived from existing elements (e.g. constraints), the definition SHALL be consistent with the base definition, but convey the meaning of the element in the particular context of use of the resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Explanatory notes and implementation guidance about the data element, including notes about how to use the data properly, exceptions to proper use, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * This element is for traceability of why the element was created and why the constraints exist as they do. This may be used to point to source materials or specifications that drove the structure of this element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $requirements
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Identifies additional names by which this element might also be known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $alias
     */
    public function addAlias($alias)
    {
        $this->alias[] = $alias;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum number of times this element SHALL appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum number of times this element is permitted to appear in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Information about the base definition of the element, provided to make it unncessary for tools to trace the deviation of the element through the derived and related profiles. This information is only provided where the element definition represents a constraint on another element definition, and must be present if there is a base element definition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBase $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The data type or resource that the value of this element is permitted to be.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionType[] $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * Identifies the name of a slice defined elsewhere in the profile whose constraints should be applied to the current element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $nameReference
     */
    public function setNameReference($nameReference)
    {
        $this->nameReference = $nameReference;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDefaultValueBoolean()
    {
        return $this->defaultValueBoolean;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $defaultValueBoolean
     */
    public function setDefaultValueBoolean($defaultValueBoolean)
    {
        $this->defaultValueBoolean = $defaultValueBoolean;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDefaultValueInteger()
    {
        return $this->defaultValueInteger;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $defaultValueInteger
     */
    public function setDefaultValueInteger($defaultValueInteger)
    {
        $this->defaultValueInteger = $defaultValueInteger;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDefaultValueDecimal()
    {
        return $this->defaultValueDecimal;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $defaultValueDecimal
     */
    public function setDefaultValueDecimal($defaultValueDecimal)
    {
        $this->defaultValueDecimal = $defaultValueDecimal;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getDefaultValueBase64Binary()
    {
        return $this->defaultValueBase64Binary;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $defaultValueBase64Binary
     */
    public function setDefaultValueBase64Binary($defaultValueBase64Binary)
    {
        $this->defaultValueBase64Binary = $defaultValueBase64Binary;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getDefaultValueInstant()
    {
        return $this->defaultValueInstant;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $defaultValueInstant
     */
    public function setDefaultValueInstant($defaultValueInstant)
    {
        $this->defaultValueInstant = $defaultValueInstant;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDefaultValueString()
    {
        return $this->defaultValueString;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $defaultValueString
     */
    public function setDefaultValueString($defaultValueString)
    {
        $this->defaultValueString = $defaultValueString;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getDefaultValueUri()
    {
        return $this->defaultValueUri;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $defaultValueUri
     */
    public function setDefaultValueUri($defaultValueUri)
    {
        $this->defaultValueUri = $defaultValueUri;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getDefaultValueDate()
    {
        return $this->defaultValueDate;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $defaultValueDate
     */
    public function setDefaultValueDate($defaultValueDate)
    {
        $this->defaultValueDate = $defaultValueDate;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDefaultValueDateTime()
    {
        return $this->defaultValueDateTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $defaultValueDateTime
     */
    public function setDefaultValueDateTime($defaultValueDateTime)
    {
        $this->defaultValueDateTime = $defaultValueDateTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getDefaultValueTime()
    {
        return $this->defaultValueTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $defaultValueTime
     */
    public function setDefaultValueTime($defaultValueTime)
    {
        $this->defaultValueTime = $defaultValueTime;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getDefaultValueCode()
    {
        return $this->defaultValueCode;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $defaultValueCode
     */
    public function setDefaultValueCode($defaultValueCode)
    {
        $this->defaultValueCode = $defaultValueCode;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getDefaultValueOid()
    {
        return $this->defaultValueOid;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $defaultValueOid
     */
    public function setDefaultValueOid($defaultValueOid)
    {
        $this->defaultValueOid = $defaultValueOid;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getDefaultValueUuid()
    {
        return $this->defaultValueUuid;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $defaultValueUuid
     */
    public function setDefaultValueUuid($defaultValueUuid)
    {
        $this->defaultValueUuid = $defaultValueUuid;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getDefaultValueId()
    {
        return $this->defaultValueId;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $defaultValueId
     */
    public function setDefaultValueId($defaultValueId)
    {
        $this->defaultValueId = $defaultValueId;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDefaultValueUnsignedInt()
    {
        return $this->defaultValueUnsignedInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $defaultValueUnsignedInt
     */
    public function setDefaultValueUnsignedInt($defaultValueUnsignedInt)
    {
        $this->defaultValueUnsignedInt = $defaultValueUnsignedInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getDefaultValuePositiveInt()
    {
        return $this->defaultValuePositiveInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $defaultValuePositiveInt
     */
    public function setDefaultValuePositiveInt($defaultValuePositiveInt)
    {
        $this->defaultValuePositiveInt = $defaultValuePositiveInt;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getDefaultValueMarkdown()
    {
        return $this->defaultValueMarkdown;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $defaultValueMarkdown
     */
    public function setDefaultValueMarkdown($defaultValueMarkdown)
    {
        $this->defaultValueMarkdown = $defaultValueMarkdown;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getDefaultValueAnnotation()
    {
        return $this->defaultValueAnnotation;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $defaultValueAnnotation
     */
    public function setDefaultValueAnnotation($defaultValueAnnotation)
    {
        $this->defaultValueAnnotation = $defaultValueAnnotation;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getDefaultValueAttachment()
    {
        return $this->defaultValueAttachment;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $defaultValueAttachment
     */
    public function setDefaultValueAttachment($defaultValueAttachment)
    {
        $this->defaultValueAttachment = $defaultValueAttachment;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getDefaultValueIdentifier()
    {
        return $this->defaultValueIdentifier;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $defaultValueIdentifier
     */
    public function setDefaultValueIdentifier($defaultValueIdentifier)
    {
        $this->defaultValueIdentifier = $defaultValueIdentifier;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDefaultValueCodeableConcept()
    {
        return $this->defaultValueCodeableConcept;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $defaultValueCodeableConcept
     */
    public function setDefaultValueCodeableConcept($defaultValueCodeableConcept)
    {
        $this->defaultValueCodeableConcept = $defaultValueCodeableConcept;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getDefaultValueCoding()
    {
        return $this->defaultValueCoding;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $defaultValueCoding
     */
    public function setDefaultValueCoding($defaultValueCoding)
    {
        $this->defaultValueCoding = $defaultValueCoding;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getDefaultValueQuantity()
    {
        return $this->defaultValueQuantity;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $defaultValueQuantity
     */
    public function setDefaultValueQuantity($defaultValueQuantity)
    {
        $this->defaultValueQuantity = $defaultValueQuantity;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getDefaultValueRange()
    {
        return $this->defaultValueRange;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $defaultValueRange
     */
    public function setDefaultValueRange($defaultValueRange)
    {
        $this->defaultValueRange = $defaultValueRange;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getDefaultValuePeriod()
    {
        return $this->defaultValuePeriod;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $defaultValuePeriod
     */
    public function setDefaultValuePeriod($defaultValuePeriod)
    {
        $this->defaultValuePeriod = $defaultValuePeriod;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getDefaultValueRatio()
    {
        return $this->defaultValueRatio;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $defaultValueRatio
     */
    public function setDefaultValueRatio($defaultValueRatio)
    {
        $this->defaultValueRatio = $defaultValueRatio;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDefaultValueReference()
    {
        return $this->defaultValueReference;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $defaultValueReference
     */
    public function setDefaultValueReference($defaultValueReference)
    {
        $this->defaultValueReference = $defaultValueReference;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getDefaultValueSampledData()
    {
        return $this->defaultValueSampledData;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $defaultValueSampledData
     */
    public function setDefaultValueSampledData($defaultValueSampledData)
    {
        $this->defaultValueSampledData = $defaultValueSampledData;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getDefaultValueSignature()
    {
        return $this->defaultValueSignature;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $defaultValueSignature
     */
    public function setDefaultValueSignature($defaultValueSignature)
    {
        $this->defaultValueSignature = $defaultValueSignature;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getDefaultValueHumanName()
    {
        return $this->defaultValueHumanName;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $defaultValueHumanName
     */
    public function setDefaultValueHumanName($defaultValueHumanName)
    {
        $this->defaultValueHumanName = $defaultValueHumanName;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getDefaultValueAddress()
    {
        return $this->defaultValueAddress;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $defaultValueAddress
     */
    public function setDefaultValueAddress($defaultValueAddress)
    {
        $this->defaultValueAddress = $defaultValueAddress;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getDefaultValueContactPoint()
    {
        return $this->defaultValueContactPoint;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $defaultValueContactPoint
     */
    public function setDefaultValueContactPoint($defaultValueContactPoint)
    {
        $this->defaultValueContactPoint = $defaultValueContactPoint;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getDefaultValueTiming()
    {
        return $this->defaultValueTiming;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $defaultValueTiming
     */
    public function setDefaultValueTiming($defaultValueTiming)
    {
        $this->defaultValueTiming = $defaultValueTiming;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getDefaultValueMeta()
    {
        return $this->defaultValueMeta;
    }

    /**
     * The value that should be used if there is no value stated in the instance (e.g. 'if not otherwise specified, the abstract is false'). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $defaultValueMeta
     */
    public function setDefaultValueMeta($defaultValueMeta)
    {
        $this->defaultValueMeta = $defaultValueMeta;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMeaningWhenMissing()
    {
        return $this->meaningWhenMissing;
    }

    /**
     * The Implicit meaning that is to be understood when this element is missing (e.g. 'when this element is missing, the period is ongoing'.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $meaningWhenMissing
     */
    public function setMeaningWhenMissing($meaningWhenMissing)
    {
        $this->meaningWhenMissing = $meaningWhenMissing;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getFixedBoolean()
    {
        return $this->fixedBoolean;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $fixedBoolean
     */
    public function setFixedBoolean($fixedBoolean)
    {
        $this->fixedBoolean = $fixedBoolean;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFixedInteger()
    {
        return $this->fixedInteger;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $fixedInteger
     */
    public function setFixedInteger($fixedInteger)
    {
        $this->fixedInteger = $fixedInteger;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getFixedDecimal()
    {
        return $this->fixedDecimal;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $fixedDecimal
     */
    public function setFixedDecimal($fixedDecimal)
    {
        $this->fixedDecimal = $fixedDecimal;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getFixedBase64Binary()
    {
        return $this->fixedBase64Binary;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $fixedBase64Binary
     */
    public function setFixedBase64Binary($fixedBase64Binary)
    {
        $this->fixedBase64Binary = $fixedBase64Binary;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getFixedInstant()
    {
        return $this->fixedInstant;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $fixedInstant
     */
    public function setFixedInstant($fixedInstant)
    {
        $this->fixedInstant = $fixedInstant;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getFixedString()
    {
        return $this->fixedString;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $fixedString
     */
    public function setFixedString($fixedString)
    {
        $this->fixedString = $fixedString;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getFixedUri()
    {
        return $this->fixedUri;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $fixedUri
     */
    public function setFixedUri($fixedUri)
    {
        $this->fixedUri = $fixedUri;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getFixedDate()
    {
        return $this->fixedDate;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $fixedDate
     */
    public function setFixedDate($fixedDate)
    {
        $this->fixedDate = $fixedDate;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getFixedDateTime()
    {
        return $this->fixedDateTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $fixedDateTime
     */
    public function setFixedDateTime($fixedDateTime)
    {
        $this->fixedDateTime = $fixedDateTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getFixedTime()
    {
        return $this->fixedTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $fixedTime
     */
    public function setFixedTime($fixedTime)
    {
        $this->fixedTime = $fixedTime;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getFixedCode()
    {
        return $this->fixedCode;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $fixedCode
     */
    public function setFixedCode($fixedCode)
    {
        $this->fixedCode = $fixedCode;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getFixedOid()
    {
        return $this->fixedOid;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $fixedOid
     */
    public function setFixedOid($fixedOid)
    {
        $this->fixedOid = $fixedOid;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getFixedUuid()
    {
        return $this->fixedUuid;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $fixedUuid
     */
    public function setFixedUuid($fixedUuid)
    {
        $this->fixedUuid = $fixedUuid;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFixedId()
    {
        return $this->fixedId;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fixedId
     */
    public function setFixedId($fixedId)
    {
        $this->fixedId = $fixedId;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getFixedUnsignedInt()
    {
        return $this->fixedUnsignedInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $fixedUnsignedInt
     */
    public function setFixedUnsignedInt($fixedUnsignedInt)
    {
        $this->fixedUnsignedInt = $fixedUnsignedInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFixedPositiveInt()
    {
        return $this->fixedPositiveInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $fixedPositiveInt
     */
    public function setFixedPositiveInt($fixedPositiveInt)
    {
        $this->fixedPositiveInt = $fixedPositiveInt;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getFixedMarkdown()
    {
        return $this->fixedMarkdown;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $fixedMarkdown
     */
    public function setFixedMarkdown($fixedMarkdown)
    {
        $this->fixedMarkdown = $fixedMarkdown;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getFixedAnnotation()
    {
        return $this->fixedAnnotation;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $fixedAnnotation
     */
    public function setFixedAnnotation($fixedAnnotation)
    {
        $this->fixedAnnotation = $fixedAnnotation;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getFixedAttachment()
    {
        return $this->fixedAttachment;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $fixedAttachment
     */
    public function setFixedAttachment($fixedAttachment)
    {
        $this->fixedAttachment = $fixedAttachment;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getFixedIdentifier()
    {
        return $this->fixedIdentifier;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $fixedIdentifier
     */
    public function setFixedIdentifier($fixedIdentifier)
    {
        $this->fixedIdentifier = $fixedIdentifier;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getFixedCodeableConcept()
    {
        return $this->fixedCodeableConcept;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $fixedCodeableConcept
     */
    public function setFixedCodeableConcept($fixedCodeableConcept)
    {
        $this->fixedCodeableConcept = $fixedCodeableConcept;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getFixedCoding()
    {
        return $this->fixedCoding;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $fixedCoding
     */
    public function setFixedCoding($fixedCoding)
    {
        $this->fixedCoding = $fixedCoding;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getFixedQuantity()
    {
        return $this->fixedQuantity;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $fixedQuantity
     */
    public function setFixedQuantity($fixedQuantity)
    {
        $this->fixedQuantity = $fixedQuantity;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getFixedRange()
    {
        return $this->fixedRange;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $fixedRange
     */
    public function setFixedRange($fixedRange)
    {
        $this->fixedRange = $fixedRange;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getFixedPeriod()
    {
        return $this->fixedPeriod;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $fixedPeriod
     */
    public function setFixedPeriod($fixedPeriod)
    {
        $this->fixedPeriod = $fixedPeriod;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getFixedRatio()
    {
        return $this->fixedRatio;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $fixedRatio
     */
    public function setFixedRatio($fixedRatio)
    {
        $this->fixedRatio = $fixedRatio;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getFixedReference()
    {
        return $this->fixedReference;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $fixedReference
     */
    public function setFixedReference($fixedReference)
    {
        $this->fixedReference = $fixedReference;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getFixedSampledData()
    {
        return $this->fixedSampledData;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $fixedSampledData
     */
    public function setFixedSampledData($fixedSampledData)
    {
        $this->fixedSampledData = $fixedSampledData;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getFixedSignature()
    {
        return $this->fixedSignature;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $fixedSignature
     */
    public function setFixedSignature($fixedSignature)
    {
        $this->fixedSignature = $fixedSignature;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getFixedHumanName()
    {
        return $this->fixedHumanName;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $fixedHumanName
     */
    public function setFixedHumanName($fixedHumanName)
    {
        $this->fixedHumanName = $fixedHumanName;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getFixedAddress()
    {
        return $this->fixedAddress;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $fixedAddress
     */
    public function setFixedAddress($fixedAddress)
    {
        $this->fixedAddress = $fixedAddress;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getFixedContactPoint()
    {
        return $this->fixedContactPoint;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $fixedContactPoint
     */
    public function setFixedContactPoint($fixedContactPoint)
    {
        $this->fixedContactPoint = $fixedContactPoint;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getFixedTiming()
    {
        return $this->fixedTiming;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $fixedTiming
     */
    public function setFixedTiming($fixedTiming)
    {
        $this->fixedTiming = $fixedTiming;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getFixedMeta()
    {
        return $this->fixedMeta;
    }

    /**
     * Specifies a value that SHALL be exactly the value  for this element in the instance. For purposes of comparison, non-significant whitespace is ignored, and all values must be an exact match (case and accent sensitive). Missing elements/attributes must also be missing. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $fixedMeta
     */
    public function setFixedMeta($fixedMeta)
    {
        $this->fixedMeta = $fixedMeta;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getPatternBoolean()
    {
        return $this->patternBoolean;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $patternBoolean
     */
    public function setPatternBoolean($patternBoolean)
    {
        $this->patternBoolean = $patternBoolean;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getPatternInteger()
    {
        return $this->patternInteger;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $patternInteger
     */
    public function setPatternInteger($patternInteger)
    {
        $this->patternInteger = $patternInteger;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPatternDecimal()
    {
        return $this->patternDecimal;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $patternDecimal
     */
    public function setPatternDecimal($patternDecimal)
    {
        $this->patternDecimal = $patternDecimal;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getPatternBase64Binary()
    {
        return $this->patternBase64Binary;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $patternBase64Binary
     */
    public function setPatternBase64Binary($patternBase64Binary)
    {
        $this->patternBase64Binary = $patternBase64Binary;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getPatternInstant()
    {
        return $this->patternInstant;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $patternInstant
     */
    public function setPatternInstant($patternInstant)
    {
        $this->patternInstant = $patternInstant;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPatternString()
    {
        return $this->patternString;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $patternString
     */
    public function setPatternString($patternString)
    {
        $this->patternString = $patternString;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getPatternUri()
    {
        return $this->patternUri;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $patternUri
     */
    public function setPatternUri($patternUri)
    {
        $this->patternUri = $patternUri;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getPatternDate()
    {
        return $this->patternDate;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $patternDate
     */
    public function setPatternDate($patternDate)
    {
        $this->patternDate = $patternDate;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getPatternDateTime()
    {
        return $this->patternDateTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $patternDateTime
     */
    public function setPatternDateTime($patternDateTime)
    {
        $this->patternDateTime = $patternDateTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getPatternTime()
    {
        return $this->patternTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $patternTime
     */
    public function setPatternTime($patternTime)
    {
        $this->patternTime = $patternTime;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getPatternCode()
    {
        return $this->patternCode;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $patternCode
     */
    public function setPatternCode($patternCode)
    {
        $this->patternCode = $patternCode;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getPatternOid()
    {
        return $this->patternOid;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $patternOid
     */
    public function setPatternOid($patternOid)
    {
        $this->patternOid = $patternOid;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getPatternUuid()
    {
        return $this->patternUuid;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $patternUuid
     */
    public function setPatternUuid($patternUuid)
    {
        $this->patternUuid = $patternUuid;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getPatternId()
    {
        return $this->patternId;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $patternId
     */
    public function setPatternId($patternId)
    {
        $this->patternId = $patternId;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getPatternUnsignedInt()
    {
        return $this->patternUnsignedInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $patternUnsignedInt
     */
    public function setPatternUnsignedInt($patternUnsignedInt)
    {
        $this->patternUnsignedInt = $patternUnsignedInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getPatternPositiveInt()
    {
        return $this->patternPositiveInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $patternPositiveInt
     */
    public function setPatternPositiveInt($patternPositiveInt)
    {
        $this->patternPositiveInt = $patternPositiveInt;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getPatternMarkdown()
    {
        return $this->patternMarkdown;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $patternMarkdown
     */
    public function setPatternMarkdown($patternMarkdown)
    {
        $this->patternMarkdown = $patternMarkdown;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getPatternAnnotation()
    {
        return $this->patternAnnotation;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $patternAnnotation
     */
    public function setPatternAnnotation($patternAnnotation)
    {
        $this->patternAnnotation = $patternAnnotation;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPatternAttachment()
    {
        return $this->patternAttachment;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $patternAttachment
     */
    public function setPatternAttachment($patternAttachment)
    {
        $this->patternAttachment = $patternAttachment;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getPatternIdentifier()
    {
        return $this->patternIdentifier;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $patternIdentifier
     */
    public function setPatternIdentifier($patternIdentifier)
    {
        $this->patternIdentifier = $patternIdentifier;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPatternCodeableConcept()
    {
        return $this->patternCodeableConcept;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $patternCodeableConcept
     */
    public function setPatternCodeableConcept($patternCodeableConcept)
    {
        $this->patternCodeableConcept = $patternCodeableConcept;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getPatternCoding()
    {
        return $this->patternCoding;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $patternCoding
     */
    public function setPatternCoding($patternCoding)
    {
        $this->patternCoding = $patternCoding;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getPatternQuantity()
    {
        return $this->patternQuantity;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $patternQuantity
     */
    public function setPatternQuantity($patternQuantity)
    {
        $this->patternQuantity = $patternQuantity;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getPatternRange()
    {
        return $this->patternRange;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $patternRange
     */
    public function setPatternRange($patternRange)
    {
        $this->patternRange = $patternRange;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPatternPeriod()
    {
        return $this->patternPeriod;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $patternPeriod
     */
    public function setPatternPeriod($patternPeriod)
    {
        $this->patternPeriod = $patternPeriod;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getPatternRatio()
    {
        return $this->patternRatio;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $patternRatio
     */
    public function setPatternRatio($patternRatio)
    {
        $this->patternRatio = $patternRatio;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatternReference()
    {
        return $this->patternReference;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patternReference
     */
    public function setPatternReference($patternReference)
    {
        $this->patternReference = $patternReference;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getPatternSampledData()
    {
        return $this->patternSampledData;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $patternSampledData
     */
    public function setPatternSampledData($patternSampledData)
    {
        $this->patternSampledData = $patternSampledData;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getPatternSignature()
    {
        return $this->patternSignature;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $patternSignature
     */
    public function setPatternSignature($patternSignature)
    {
        $this->patternSignature = $patternSignature;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getPatternHumanName()
    {
        return $this->patternHumanName;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $patternHumanName
     */
    public function setPatternHumanName($patternHumanName)
    {
        $this->patternHumanName = $patternHumanName;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getPatternAddress()
    {
        return $this->patternAddress;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $patternAddress
     */
    public function setPatternAddress($patternAddress)
    {
        $this->patternAddress = $patternAddress;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getPatternContactPoint()
    {
        return $this->patternContactPoint;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $patternContactPoint
     */
    public function setPatternContactPoint($patternContactPoint)
    {
        $this->patternContactPoint = $patternContactPoint;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getPatternTiming()
    {
        return $this->patternTiming;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $patternTiming
     */
    public function setPatternTiming($patternTiming)
    {
        $this->patternTiming = $patternTiming;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getPatternMeta()
    {
        return $this->patternMeta;
    }

    /**
     * Specifies a value that the value in the instance SHALL follow - that is, any value in the pattern must be found in the instance. Other additional values may be found too. This is effectively constraint by example.  The values of elements present in the pattern must match exactly (case-sensitive, accent-sensitive, etc.). (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $patternMeta
     */
    public function setPatternMeta($patternMeta)
    {
        $this->patternMeta = $patternMeta;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean()
    {
        return $this->exampleBoolean;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $exampleBoolean
     */
    public function setExampleBoolean($exampleBoolean)
    {
        $this->exampleBoolean = $exampleBoolean;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getExampleInteger()
    {
        return $this->exampleInteger;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $exampleInteger
     */
    public function setExampleInteger($exampleInteger)
    {
        $this->exampleInteger = $exampleInteger;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getExampleDecimal()
    {
        return $this->exampleDecimal;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $exampleDecimal
     */
    public function setExampleDecimal($exampleDecimal)
    {
        $this->exampleDecimal = $exampleDecimal;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getExampleBase64Binary()
    {
        return $this->exampleBase64Binary;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $exampleBase64Binary
     */
    public function setExampleBase64Binary($exampleBase64Binary)
    {
        $this->exampleBase64Binary = $exampleBase64Binary;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getExampleInstant()
    {
        return $this->exampleInstant;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $exampleInstant
     */
    public function setExampleInstant($exampleInstant)
    {
        $this->exampleInstant = $exampleInstant;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExampleString()
    {
        return $this->exampleString;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $exampleString
     */
    public function setExampleString($exampleString)
    {
        $this->exampleString = $exampleString;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getExampleUri()
    {
        return $this->exampleUri;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $exampleUri
     */
    public function setExampleUri($exampleUri)
    {
        $this->exampleUri = $exampleUri;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getExampleDate()
    {
        return $this->exampleDate;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $exampleDate
     */
    public function setExampleDate($exampleDate)
    {
        $this->exampleDate = $exampleDate;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getExampleDateTime()
    {
        return $this->exampleDateTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $exampleDateTime
     */
    public function setExampleDateTime($exampleDateTime)
    {
        $this->exampleDateTime = $exampleDateTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getExampleTime()
    {
        return $this->exampleTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $exampleTime
     */
    public function setExampleTime($exampleTime)
    {
        $this->exampleTime = $exampleTime;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getExampleCode()
    {
        return $this->exampleCode;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $exampleCode
     */
    public function setExampleCode($exampleCode)
    {
        $this->exampleCode = $exampleCode;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getExampleOid()
    {
        return $this->exampleOid;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $exampleOid
     */
    public function setExampleOid($exampleOid)
    {
        $this->exampleOid = $exampleOid;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getExampleUuid()
    {
        return $this->exampleUuid;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $exampleUuid
     */
    public function setExampleUuid($exampleUuid)
    {
        $this->exampleUuid = $exampleUuid;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getExampleId()
    {
        return $this->exampleId;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $exampleId
     */
    public function setExampleId($exampleId)
    {
        $this->exampleId = $exampleId;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getExampleUnsignedInt()
    {
        return $this->exampleUnsignedInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $exampleUnsignedInt
     */
    public function setExampleUnsignedInt($exampleUnsignedInt)
    {
        $this->exampleUnsignedInt = $exampleUnsignedInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getExamplePositiveInt()
    {
        return $this->examplePositiveInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $examplePositiveInt
     */
    public function setExamplePositiveInt($examplePositiveInt)
    {
        $this->examplePositiveInt = $examplePositiveInt;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getExampleMarkdown()
    {
        return $this->exampleMarkdown;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $exampleMarkdown
     */
    public function setExampleMarkdown($exampleMarkdown)
    {
        $this->exampleMarkdown = $exampleMarkdown;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getExampleAnnotation()
    {
        return $this->exampleAnnotation;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $exampleAnnotation
     */
    public function setExampleAnnotation($exampleAnnotation)
    {
        $this->exampleAnnotation = $exampleAnnotation;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getExampleAttachment()
    {
        return $this->exampleAttachment;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $exampleAttachment
     */
    public function setExampleAttachment($exampleAttachment)
    {
        $this->exampleAttachment = $exampleAttachment;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getExampleIdentifier()
    {
        return $this->exampleIdentifier;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $exampleIdentifier
     */
    public function setExampleIdentifier($exampleIdentifier)
    {
        $this->exampleIdentifier = $exampleIdentifier;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getExampleCodeableConcept()
    {
        return $this->exampleCodeableConcept;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $exampleCodeableConcept
     */
    public function setExampleCodeableConcept($exampleCodeableConcept)
    {
        $this->exampleCodeableConcept = $exampleCodeableConcept;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getExampleCoding()
    {
        return $this->exampleCoding;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $exampleCoding
     */
    public function setExampleCoding($exampleCoding)
    {
        $this->exampleCoding = $exampleCoding;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getExampleQuantity()
    {
        return $this->exampleQuantity;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $exampleQuantity
     */
    public function setExampleQuantity($exampleQuantity)
    {
        $this->exampleQuantity = $exampleQuantity;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getExampleRange()
    {
        return $this->exampleRange;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $exampleRange
     */
    public function setExampleRange($exampleRange)
    {
        $this->exampleRange = $exampleRange;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getExamplePeriod()
    {
        return $this->examplePeriod;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $examplePeriod
     */
    public function setExamplePeriod($examplePeriod)
    {
        $this->examplePeriod = $examplePeriod;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getExampleRatio()
    {
        return $this->exampleRatio;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $exampleRatio
     */
    public function setExampleRatio($exampleRatio)
    {
        $this->exampleRatio = $exampleRatio;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getExampleReference()
    {
        return $this->exampleReference;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $exampleReference
     */
    public function setExampleReference($exampleReference)
    {
        $this->exampleReference = $exampleReference;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getExampleSampledData()
    {
        return $this->exampleSampledData;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $exampleSampledData
     */
    public function setExampleSampledData($exampleSampledData)
    {
        $this->exampleSampledData = $exampleSampledData;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getExampleSignature()
    {
        return $this->exampleSignature;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $exampleSignature
     */
    public function setExampleSignature($exampleSignature)
    {
        $this->exampleSignature = $exampleSignature;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getExampleHumanName()
    {
        return $this->exampleHumanName;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $exampleHumanName
     */
    public function setExampleHumanName($exampleHumanName)
    {
        $this->exampleHumanName = $exampleHumanName;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getExampleAddress()
    {
        return $this->exampleAddress;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $exampleAddress
     */
    public function setExampleAddress($exampleAddress)
    {
        $this->exampleAddress = $exampleAddress;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getExampleContactPoint()
    {
        return $this->exampleContactPoint;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $exampleContactPoint
     */
    public function setExampleContactPoint($exampleContactPoint)
    {
        $this->exampleContactPoint = $exampleContactPoint;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getExampleTiming()
    {
        return $this->exampleTiming;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $exampleTiming
     */
    public function setExampleTiming($exampleTiming)
    {
        $this->exampleTiming = $exampleTiming;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getExampleMeta()
    {
        return $this->exampleMeta;
    }

    /**
     * A sample value for this element demonstrating the type of information that would typically be captured. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $exampleMeta
     */
    public function setExampleMeta($exampleMeta)
    {
        $this->exampleMeta = $exampleMeta;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMinValueBoolean()
    {
        return $this->minValueBoolean;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $minValueBoolean
     */
    public function setMinValueBoolean($minValueBoolean)
    {
        $this->minValueBoolean = $minValueBoolean;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMinValueInteger()
    {
        return $this->minValueInteger;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $minValueInteger
     */
    public function setMinValueInteger($minValueInteger)
    {
        $this->minValueInteger = $minValueInteger;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMinValueDecimal()
    {
        return $this->minValueDecimal;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $minValueDecimal
     */
    public function setMinValueDecimal($minValueDecimal)
    {
        $this->minValueDecimal = $minValueDecimal;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getMinValueBase64Binary()
    {
        return $this->minValueBase64Binary;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $minValueBase64Binary
     */
    public function setMinValueBase64Binary($minValueBase64Binary)
    {
        $this->minValueBase64Binary = $minValueBase64Binary;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMinValueInstant()
    {
        return $this->minValueInstant;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $minValueInstant
     */
    public function setMinValueInstant($minValueInstant)
    {
        $this->minValueInstant = $minValueInstant;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMinValueString()
    {
        return $this->minValueString;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $minValueString
     */
    public function setMinValueString($minValueString)
    {
        $this->minValueString = $minValueString;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getMinValueUri()
    {
        return $this->minValueUri;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $minValueUri
     */
    public function setMinValueUri($minValueUri)
    {
        $this->minValueUri = $minValueUri;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMinValueDate()
    {
        return $this->minValueDate;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $minValueDate
     */
    public function setMinValueDate($minValueDate)
    {
        $this->minValueDate = $minValueDate;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMinValueDateTime()
    {
        return $this->minValueDateTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $minValueDateTime
     */
    public function setMinValueDateTime($minValueDateTime)
    {
        $this->minValueDateTime = $minValueDateTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMinValueTime()
    {
        return $this->minValueTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $minValueTime
     */
    public function setMinValueTime($minValueTime)
    {
        $this->minValueTime = $minValueTime;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getMinValueCode()
    {
        return $this->minValueCode;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $minValueCode
     */
    public function setMinValueCode($minValueCode)
    {
        $this->minValueCode = $minValueCode;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getMinValueOid()
    {
        return $this->minValueOid;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $minValueOid
     */
    public function setMinValueOid($minValueOid)
    {
        $this->minValueOid = $minValueOid;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getMinValueUuid()
    {
        return $this->minValueUuid;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $minValueUuid
     */
    public function setMinValueUuid($minValueUuid)
    {
        $this->minValueUuid = $minValueUuid;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getMinValueId()
    {
        return $this->minValueId;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $minValueId
     */
    public function setMinValueId($minValueId)
    {
        $this->minValueId = $minValueId;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMinValueUnsignedInt()
    {
        return $this->minValueUnsignedInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $minValueUnsignedInt
     */
    public function setMinValueUnsignedInt($minValueUnsignedInt)
    {
        $this->minValueUnsignedInt = $minValueUnsignedInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMinValuePositiveInt()
    {
        return $this->minValuePositiveInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $minValuePositiveInt
     */
    public function setMinValuePositiveInt($minValuePositiveInt)
    {
        $this->minValuePositiveInt = $minValuePositiveInt;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMinValueMarkdown()
    {
        return $this->minValueMarkdown;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $minValueMarkdown
     */
    public function setMinValueMarkdown($minValueMarkdown)
    {
        $this->minValueMarkdown = $minValueMarkdown;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getMinValueAnnotation()
    {
        return $this->minValueAnnotation;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $minValueAnnotation
     */
    public function setMinValueAnnotation($minValueAnnotation)
    {
        $this->minValueAnnotation = $minValueAnnotation;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getMinValueAttachment()
    {
        return $this->minValueAttachment;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $minValueAttachment
     */
    public function setMinValueAttachment($minValueAttachment)
    {
        $this->minValueAttachment = $minValueAttachment;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMinValueIdentifier()
    {
        return $this->minValueIdentifier;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $minValueIdentifier
     */
    public function setMinValueIdentifier($minValueIdentifier)
    {
        $this->minValueIdentifier = $minValueIdentifier;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMinValueCodeableConcept()
    {
        return $this->minValueCodeableConcept;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $minValueCodeableConcept
     */
    public function setMinValueCodeableConcept($minValueCodeableConcept)
    {
        $this->minValueCodeableConcept = $minValueCodeableConcept;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getMinValueCoding()
    {
        return $this->minValueCoding;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $minValueCoding
     */
    public function setMinValueCoding($minValueCoding)
    {
        $this->minValueCoding = $minValueCoding;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMinValueQuantity()
    {
        return $this->minValueQuantity;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $minValueQuantity
     */
    public function setMinValueQuantity($minValueQuantity)
    {
        $this->minValueQuantity = $minValueQuantity;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getMinValueRange()
    {
        return $this->minValueRange;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $minValueRange
     */
    public function setMinValueRange($minValueRange)
    {
        $this->minValueRange = $minValueRange;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getMinValuePeriod()
    {
        return $this->minValuePeriod;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $minValuePeriod
     */
    public function setMinValuePeriod($minValuePeriod)
    {
        $this->minValuePeriod = $minValuePeriod;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMinValueRatio()
    {
        return $this->minValueRatio;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $minValueRatio
     */
    public function setMinValueRatio($minValueRatio)
    {
        $this->minValueRatio = $minValueRatio;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMinValueReference()
    {
        return $this->minValueReference;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $minValueReference
     */
    public function setMinValueReference($minValueReference)
    {
        $this->minValueReference = $minValueReference;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getMinValueSampledData()
    {
        return $this->minValueSampledData;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $minValueSampledData
     */
    public function setMinValueSampledData($minValueSampledData)
    {
        $this->minValueSampledData = $minValueSampledData;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getMinValueSignature()
    {
        return $this->minValueSignature;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $minValueSignature
     */
    public function setMinValueSignature($minValueSignature)
    {
        $this->minValueSignature = $minValueSignature;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getMinValueHumanName()
    {
        return $this->minValueHumanName;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $minValueHumanName
     */
    public function setMinValueHumanName($minValueHumanName)
    {
        $this->minValueHumanName = $minValueHumanName;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getMinValueAddress()
    {
        return $this->minValueAddress;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $minValueAddress
     */
    public function setMinValueAddress($minValueAddress)
    {
        $this->minValueAddress = $minValueAddress;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getMinValueContactPoint()
    {
        return $this->minValueContactPoint;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $minValueContactPoint
     */
    public function setMinValueContactPoint($minValueContactPoint)
    {
        $this->minValueContactPoint = $minValueContactPoint;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getMinValueTiming()
    {
        return $this->minValueTiming;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $minValueTiming
     */
    public function setMinValueTiming($minValueTiming)
    {
        $this->minValueTiming = $minValueTiming;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getMinValueMeta()
    {
        return $this->minValueMeta;
    }

    /**
     * The minimum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $minValueMeta
     */
    public function setMinValueMeta($minValueMeta)
    {
        $this->minValueMeta = $minValueMeta;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMaxValueBoolean()
    {
        return $this->maxValueBoolean;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $maxValueBoolean
     */
    public function setMaxValueBoolean($maxValueBoolean)
    {
        $this->maxValueBoolean = $maxValueBoolean;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxValueInteger()
    {
        return $this->maxValueInteger;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxValueInteger
     */
    public function setMaxValueInteger($maxValueInteger)
    {
        $this->maxValueInteger = $maxValueInteger;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getMaxValueDecimal()
    {
        return $this->maxValueDecimal;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $maxValueDecimal
     */
    public function setMaxValueDecimal($maxValueDecimal)
    {
        $this->maxValueDecimal = $maxValueDecimal;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getMaxValueBase64Binary()
    {
        return $this->maxValueBase64Binary;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $maxValueBase64Binary
     */
    public function setMaxValueBase64Binary($maxValueBase64Binary)
    {
        $this->maxValueBase64Binary = $maxValueBase64Binary;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getMaxValueInstant()
    {
        return $this->maxValueInstant;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $maxValueInstant
     */
    public function setMaxValueInstant($maxValueInstant)
    {
        $this->maxValueInstant = $maxValueInstant;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getMaxValueString()
    {
        return $this->maxValueString;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $maxValueString
     */
    public function setMaxValueString($maxValueString)
    {
        $this->maxValueString = $maxValueString;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getMaxValueUri()
    {
        return $this->maxValueUri;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $maxValueUri
     */
    public function setMaxValueUri($maxValueUri)
    {
        $this->maxValueUri = $maxValueUri;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getMaxValueDate()
    {
        return $this->maxValueDate;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $maxValueDate
     */
    public function setMaxValueDate($maxValueDate)
    {
        $this->maxValueDate = $maxValueDate;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getMaxValueDateTime()
    {
        return $this->maxValueDateTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $maxValueDateTime
     */
    public function setMaxValueDateTime($maxValueDateTime)
    {
        $this->maxValueDateTime = $maxValueDateTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTime
     */
    public function getMaxValueTime()
    {
        return $this->maxValueTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTime $maxValueTime
     */
    public function setMaxValueTime($maxValueTime)
    {
        $this->maxValueTime = $maxValueTime;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getMaxValueCode()
    {
        return $this->maxValueCode;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $maxValueCode
     */
    public function setMaxValueCode($maxValueCode)
    {
        $this->maxValueCode = $maxValueCode;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getMaxValueOid()
    {
        return $this->maxValueOid;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $maxValueOid
     */
    public function setMaxValueOid($maxValueOid)
    {
        $this->maxValueOid = $maxValueOid;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUuid
     */
    public function getMaxValueUuid()
    {
        return $this->maxValueUuid;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUuid $maxValueUuid
     */
    public function setMaxValueUuid($maxValueUuid)
    {
        $this->maxValueUuid = $maxValueUuid;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getMaxValueId()
    {
        return $this->maxValueId;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $maxValueId
     */
    public function setMaxValueId($maxValueId)
    {
        $this->maxValueId = $maxValueId;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getMaxValueUnsignedInt()
    {
        return $this->maxValueUnsignedInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $maxValueUnsignedInt
     */
    public function setMaxValueUnsignedInt($maxValueUnsignedInt)
    {
        $this->maxValueUnsignedInt = $maxValueUnsignedInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getMaxValuePositiveInt()
    {
        return $this->maxValuePositiveInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $maxValuePositiveInt
     */
    public function setMaxValuePositiveInt($maxValuePositiveInt)
    {
        $this->maxValuePositiveInt = $maxValuePositiveInt;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMarkdown
     */
    public function getMaxValueMarkdown()
    {
        return $this->maxValueMarkdown;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMarkdown $maxValueMarkdown
     */
    public function setMaxValueMarkdown($maxValueMarkdown)
    {
        $this->maxValueMarkdown = $maxValueMarkdown;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation
     */
    public function getMaxValueAnnotation()
    {
        return $this->maxValueAnnotation;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation $maxValueAnnotation
     */
    public function setMaxValueAnnotation($maxValueAnnotation)
    {
        $this->maxValueAnnotation = $maxValueAnnotation;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getMaxValueAttachment()
    {
        return $this->maxValueAttachment;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $maxValueAttachment
     */
    public function setMaxValueAttachment($maxValueAttachment)
    {
        $this->maxValueAttachment = $maxValueAttachment;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMaxValueIdentifier()
    {
        return $this->maxValueIdentifier;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $maxValueIdentifier
     */
    public function setMaxValueIdentifier($maxValueIdentifier)
    {
        $this->maxValueIdentifier = $maxValueIdentifier;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaxValueCodeableConcept()
    {
        return $this->maxValueCodeableConcept;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $maxValueCodeableConcept
     */
    public function setMaxValueCodeableConcept($maxValueCodeableConcept)
    {
        $this->maxValueCodeableConcept = $maxValueCodeableConcept;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getMaxValueCoding()
    {
        return $this->maxValueCoding;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $maxValueCoding
     */
    public function setMaxValueCoding($maxValueCoding)
    {
        $this->maxValueCoding = $maxValueCoding;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantity
     */
    public function getMaxValueQuantity()
    {
        return $this->maxValueQuantity;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantity $maxValueQuantity
     */
    public function setMaxValueQuantity($maxValueQuantity)
    {
        $this->maxValueQuantity = $maxValueQuantity;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getMaxValueRange()
    {
        return $this->maxValueRange;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $maxValueRange
     */
    public function setMaxValueRange($maxValueRange)
    {
        $this->maxValueRange = $maxValueRange;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getMaxValuePeriod()
    {
        return $this->maxValuePeriod;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $maxValuePeriod
     */
    public function setMaxValuePeriod($maxValuePeriod)
    {
        $this->maxValuePeriod = $maxValuePeriod;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxValueRatio()
    {
        return $this->maxValueRatio;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $maxValueRatio
     */
    public function setMaxValueRatio($maxValueRatio)
    {
        $this->maxValueRatio = $maxValueRatio;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getMaxValueReference()
    {
        return $this->maxValueReference;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $maxValueReference
     */
    public function setMaxValueReference($maxValueReference)
    {
        $this->maxValueReference = $maxValueReference;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSampledData
     */
    public function getMaxValueSampledData()
    {
        return $this->maxValueSampledData;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSampledData $maxValueSampledData
     */
    public function setMaxValueSampledData($maxValueSampledData)
    {
        $this->maxValueSampledData = $maxValueSampledData;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSignature
     */
    public function getMaxValueSignature()
    {
        return $this->maxValueSignature;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSignature $maxValueSignature
     */
    public function setMaxValueSignature($maxValueSignature)
    {
        $this->maxValueSignature = $maxValueSignature;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getMaxValueHumanName()
    {
        return $this->maxValueHumanName;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $maxValueHumanName
     */
    public function setMaxValueHumanName($maxValueHumanName)
    {
        $this->maxValueHumanName = $maxValueHumanName;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getMaxValueAddress()
    {
        return $this->maxValueAddress;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $maxValueAddress
     */
    public function setMaxValueAddress($maxValueAddress)
    {
        $this->maxValueAddress = $maxValueAddress;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint
     */
    public function getMaxValueContactPoint()
    {
        return $this->maxValueContactPoint;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $maxValueContactPoint
     */
    public function setMaxValueContactPoint($maxValueContactPoint)
    {
        $this->maxValueContactPoint = $maxValueContactPoint;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getMaxValueTiming()
    {
        return $this->maxValueTiming;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $maxValueTiming
     */
    public function setMaxValueTiming($maxValueTiming)
    {
        $this->maxValueTiming = $maxValueTiming;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeta
     */
    public function getMaxValueMeta()
    {
        return $this->maxValueMeta;
    }

    /**
     * The maximum allowed value for the element. The value is inclusive. This is allowed for the types date, dateTime, instant, time, decimal, integer, and Quantity. (choose any one of the elements, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeta $maxValueMeta
     */
    public function setMaxValueMeta($maxValueMeta)
    {
        $this->maxValueMeta = $maxValueMeta;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Indicates the maximum length in characters that is permitted to be present in conformant instances and which is expected to be supported by conformant consumers that support the element.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $maxLength
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * A reference to an invariant that may make additional statements about the cardinality or value in the instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId[] $condition
     */
    public function addCondition($condition)
    {
        $this->condition[] = $condition;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * Formal constraints such as co-occurrence and other constraints that can be computationally evaluated within the context of the instance.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionConstraint[] $constraint
     */
    public function addConstraint($constraint)
    {
        $this->constraint[] = $constraint;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * If true, implementations that produce or consume resources SHALL provide "support" for the element in some meaningful way.  If false, the element may be ignored and not supported.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $mustSupport
     */
    public function setMustSupport($mustSupport)
    {
        $this->mustSupport = $mustSupport;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * If true, the value of this element affects the interpretation of the element or resource that contains it, and the value of the element cannot be ignored. Typically, this is used for status, negation and qualification codes. The effect of this is that the element cannot be ignored by systems: they SHALL either recognize the element and process it, and/or a pre-determination has been made that it is not relevant to their particular system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isModifier
     */
    public function setIsModifier($isModifier)
    {
        $this->isModifier = $isModifier;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getIsSummary()
    {
        return $this->isSummary;
    }

    /**
     * Whether the element should be included if a client requests a search with the parameter _summary=true.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $isSummary
     */
    public function setIsSummary($isSummary)
    {
        $this->isSummary = $isSummary;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * Binds to a value set if this element is coded (code, Coding, CodeableConcept).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionBinding $binding
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * Identifies a concept from an external specification that roughly corresponds to this element.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRElementDefinition\FHIRElementDefinitionMapping[] $mapping
     */
    public function addMapping($mapping)
    {
        $this->mapping[] = $mapping;
    }


}