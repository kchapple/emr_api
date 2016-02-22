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
 * A technical identifier - identifies some entity uniquely and unambiguously.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRIdentifier extends FHIRElement
{
    /**
     * The purpose of this identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse
     */
    public $use = null;

    /**
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $value = null;

    /**
     * Time period during which identifier is/was valid for use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Organization that issued/manages the identifier.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $assigner = null;

    /**
     * The purpose of this identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse
     */
    public function getUse()
    {
        return $this->use;
    }

    /**
     * The purpose of this identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifierUse $use
     */
    public function setUse($use)
    {
        $this->use = $use;
    }

    /**
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * A coded type for the identifier that can be used to determine which identifier to use for a specific purpose.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * Establishes the namespace in which set of possible id values is unique.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The portion of the identifier typically displayed to the user and which is unique within the context of the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Time period during which identifier is/was valid for use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Time period during which identifier is/was valid for use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * Organization that issued/manages the identifier.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAssigner()
    {
        return $this->assigner;
    }

    /**
     * Organization that issued/manages the identifier.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $assigner
     */
    public function setAssigner($assigner)
    {
        $this->assigner = $assigner;
    }


}