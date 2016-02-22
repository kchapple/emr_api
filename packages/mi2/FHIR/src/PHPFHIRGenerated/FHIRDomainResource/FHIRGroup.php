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
 * Represents a defined collection of entities that may be discussed or acted upon collectively but which are not expected to act collectively and are not formally or legally recognized; i.e. a collection of entities that isn't an Organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRGroup extends FHIRDomainResource
{
    /**
     * A unique business identifier for this group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public $type = null;

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $actual = null;

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * A label assigned to the group for human identification and communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * A count of the number of resource instances that are part of the group.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $quantity = null;

    /**
     * Identifies the traits shared by members of the group.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public $characteristic = array();

    /**
     * Identifies the resource instances that are members of the group.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember[]
     */
    public $member = array();

    /**
     * A unique business identifier for this group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A unique business identifier for this group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRGroupType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Identifies the broad classification of the kind of resources the group includes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRGroupType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * If true, indicates that the resource refers to a specific group of real individuals.  If false, the group defines a set of intended individuals.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $actual
     */
    public function setActual($actual)
    {
        $this->actual = $actual;
    }

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Provides a specific type of resource the group includes; e.g. "cow", "syringe", etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * A label assigned to the group for human identification and communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A label assigned to the group for human identification and communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * A count of the number of resource instances that are part of the group.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * A count of the number of resource instances that are part of the group.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Identifies the traits shared by members of the group.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Identifies the traits shared by members of the group.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupCharacteristic[] $characteristic
     */
    public function addCharacteristic($characteristic)
    {
        $this->characteristic[] = $characteristic;
    }

    /**
     * Identifies the resource instances that are members of the group.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Identifies the resource instances that are members of the group.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRGroup\FHIRGroupMember[] $member
     */
    public function addMember($member)
    {
        $this->member[] = $member;
    }


}