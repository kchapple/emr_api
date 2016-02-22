<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMessageHeader;

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
 * The header for a message exchange that is either requesting or responding to an action.  The reference(s) that are the subject of the action as well as other information related to the action are typically transmitted in a bundle in which the MessageHeader resource instance is the first resource in the bundle.
 */
class FHIRMessageHeaderResponse extends FHIRBackboneElement
{
    /**
     * The id of the message that this message is a response to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $identifier = null;

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRResponseType
     */
    public $code = null;

    /**
     * Full details of any issues found in the message.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $details = null;

    /**
     * The id of the message that this message is a response to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The id of the message that this message is a response to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRResponseType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Code that identifies the type of response to the message - whether it was successful or not, and whether it should be resent or not.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRResponseType $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Full details of any issues found in the message.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Full details of any issues found in the message.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }


}