<?php namespace PHPFHIRGenerated\FHIRResource\FHIRConceptMap;

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
 * A statement of relationships from one set of concepts to one or more other concepts - either code systems or data elements, or classes in class models.
 */
class FHIRConceptMapElement extends FHIRBackboneElement
{
    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $codeSystem = null;

    /**
     * Identity (code or path) or the element/item being mapped.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * A concept from the target value set that this concept maps to.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapTarget[]
     */
    public $target = array();

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getCodeSystem()
    {
        return $this->codeSystem;
    }

    /**
     * An absolute URI that identifies the Code System (if the source is a value set that crosses more than one code system).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $codeSystem
     */
    public function setCodeSystem($codeSystem)
    {
        $this->codeSystem = $codeSystem;
    }

    /**
     * Identity (code or path) or the element/item being mapped.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Identity (code or path) or the element/item being mapped.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * A concept from the target value set that this concept maps to.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapTarget[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * A concept from the target value set that this concept maps to.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConceptMap\FHIRConceptMapTarget[] $target
     */
    public function addTarget($target)
    {
        $this->target[] = $target;
    }


}