<?php namespace PHPFHIRGenerated;

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

use PHPFHIRGenerated\FHIRElement\FHIRQuantity;

class FHIRDistance extends FHIRQuantity
{
    /**
     * Exception as inherited from Element
     * @var \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public $extension = array();

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $value = null;

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator
     */
    public $comparator = null;

    /**
     * A human-readable form of the unit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $unit = null;

    /**
     * The identification of the system that provides the coded form of the unit.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $system = null;

    /**
     * A computer processable form of the unit in some unit representation system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * Exception as inherited from Element
     * @return \PHPFHIRGenerated\FHIRElement\FHIRExtension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Exception as inherited from Element
     * @param \PHPFHIRGenerated\FHIRElement\FHIRExtension[] $extension
     */
    public function addExtension($extension)
    {
        $this->extension[] = $extension;
    }

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value of the measured amount. The value includes an implicit precision in the presentation of the value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * How the value should be understood and represented - whether the actual value is greater or less than the stated value due to measurement issues; e.g. if the comparator is "<" , then the real value is < stated value.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuantityComparator $comparator
     */
    public function setComparator($comparator)
    {
        $this->comparator = $comparator;
    }

    /**
     * A human-readable form of the unit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * A human-readable form of the unit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * The identification of the system that provides the coded form of the unit.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * The identification of the system that provides the coded form of the unit.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $system
     */
    public function setSystem($system)
    {
        $this->system = $system;
    }

    /**
     * A computer processable form of the unit in some unit representation system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A computer processable form of the unit in some unit representation system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}