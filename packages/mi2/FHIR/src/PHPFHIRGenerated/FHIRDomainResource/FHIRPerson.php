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
 * Demographics and administrative information about a person independent of a specific health-related context.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPerson extends FHIRDomainResource
{
    /**
     * Identifier for a person within a particular scope.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * A name associated with the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public $name = array();

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Administrative Gender.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $gender = null;

    /**
     * The birth date for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * One or more addresses for the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = array();

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * The organization that is the custodian of the person record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Whether this person's record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * Link to a resource that concerns the same actual person.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public $link = array();

    /**
     * Identifier for a person within a particular scope.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier for a person within a particular scope.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * A name associated with the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName[] $name
     */
    public function addName($name)
    {
        $this->name[] = $name;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail for the person, e.g. a telephone number or an email address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
    }

    /**
     * Administrative Gender.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * The birth date for the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * The birth date for the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * One or more addresses for the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * One or more addresses for the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress[] $address
     */
    public function addAddress($address)
    {
        $this->address[] = $address;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * An image that can be displayed as a thumbnail of the person to enhance the identification of the individual.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * The organization that is the custodian of the person record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization that is the custodian of the person record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
    }

    /**
     * Whether this person's record is in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this person's record is in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Link to a resource that concerns the same actual person.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPerson\FHIRPersonLink[] $link
     */
    public function addLink($link)
    {
        $this->link[] = $link;
    }


}