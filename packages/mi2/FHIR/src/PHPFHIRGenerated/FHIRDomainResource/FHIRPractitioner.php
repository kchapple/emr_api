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
 * A person who is directly or indirectly involved in the provisioning of healthcare.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPractitioner extends FHIRDomainResource
{
    /**
     * An identifier that applies to this person in this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Whether this practitioner's record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * A name associated with the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public $name = null;

    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * The postal address where the practitioner can be found or visited or to which mail can be delivered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = array();

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $gender = null;

    /**
     * The date of birth for the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * Image of the person.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public $photo = array();

    /**
     * The list of roles/organizations that the practitioner is associated with.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerPractitionerRole[]
     */
    public $practitionerRole = array();

    /**
     * Qualifications obtained by training and certification.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerQualification[]
     */
    public $qualification = array();

    /**
     * A language the practitioner is able to use in patient communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $communication = array();

    /**
     * An identifier that applies to this person in this role.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier that applies to this person in this role.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Whether this practitioner's record is in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this practitioner's record is in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * A name associated with the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail for the practitioner, e.g. a telephone number or an email address.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
    }

    /**
     * The postal address where the practitioner can be found or visited or to which mail can be delivered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * The postal address where the practitioner can be found or visited or to which mail can be delivered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress[] $address
     */
    public function addAddress($address)
    {
        $this->address[] = $address;
    }

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the person is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * The date of birth for the practitioner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * The date of birth for the practitioner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * Image of the person.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Image of the person.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment[] $photo
     */
    public function addPhoto($photo)
    {
        $this->photo[] = $photo;
    }

    /**
     * The list of roles/organizations that the practitioner is associated with.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerPractitionerRole[]
     */
    public function getPractitionerRole()
    {
        return $this->practitionerRole;
    }

    /**
     * The list of roles/organizations that the practitioner is associated with.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerPractitionerRole[] $practitionerRole
     */
    public function addPractitionerRole($practitionerRole)
    {
        $this->practitionerRole[] = $practitionerRole;
    }

    /**
     * Qualifications obtained by training and certification.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerQualification[]
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Qualifications obtained by training and certification.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPractitioner\FHIRPractitionerQualification[] $qualification
     */
    public function addQualification($qualification)
    {
        $this->qualification[] = $qualification;
    }

    /**
     * A language the practitioner is able to use in patient communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * A language the practitioner is able to use in patient communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $communication
     */
    public function addCommunication($communication)
    {
        $this->communication[] = $communication;
    }


}