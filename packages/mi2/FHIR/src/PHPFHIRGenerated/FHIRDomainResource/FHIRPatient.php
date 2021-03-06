<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 7th, 2016
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
use PHPFHIRGenerated\JsonSerializable;

/**
 * Demographics and other administrative information about an individual or animal receiving care or other health-related services.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRPatient extends FHIRDomainResource implements JsonSerializable
{
    /**
     * An identifier for this patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Whether this patient record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * A name associated with the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public $name = array();

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $gender = null;

    /**
     * The date of birth for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public $birthDate = null;

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $deceasedBoolean = null;

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $deceasedDateTime = null;

    /**
     * Addresses for the individual.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public $address = array();

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $maritalStatus = null;

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $multipleBirthBoolean = null;

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $multipleBirthInteger = null;

    /**
     * Image of the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public $photo = array();

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientContact[]
     */
    public $contact = array();

    /**
     * This patient is known to be an animal.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientAnimal
     */
    public $animal = null;

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientCommunication[]
     */
    public $communication = array();

    /**
     * Patient's nominated care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $careProvider = array();

    /**
     * Organization that is the custodian of the patient record.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientLink[]
     */
    public $link = array();

    /**
     * @var string
     */
    private $_fhirElementName = 'Patient';

    /**
     * An identifier for this patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier for this patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     * @return $this
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Whether this patient record is in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Whether this patient record is in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * A name associated with the individual.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A name associated with the individual.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRHumanName[] $name
     * @return $this
     */
    public function addName($name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * A contact detail (e.g. a telephone number or an email address) by which the individual may be contacted.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     * @return $this
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Administrative Gender - the gender that the patient is considered to have for administration and record keeping purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * The date of birth for the individual.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDate
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * The date of birth for the individual.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDate $birthDate
     * @return $this
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getDeceasedBoolean()
    {
        return $this->deceasedBoolean;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $deceasedBoolean
     * @return $this
     */
    public function setDeceasedBoolean($deceasedBoolean)
    {
        $this->deceasedBoolean = $deceasedBoolean;
        return $this;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDeceasedDateTime()
    {
        return $this->deceasedDateTime;
    }

    /**
     * Indicates if the individual is deceased or not. (choose any one of deceased*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $deceasedDateTime
     * @return $this
     */
    public function setDeceasedDateTime($deceasedDateTime)
    {
        $this->deceasedDateTime = $deceasedDateTime;
        return $this;
    }

    /**
     * Addresses for the individual.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Addresses for the individual.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress[] $address
     * @return $this
     */
    public function addAddress($address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * This field contains a patient's most recent marital (civil) status.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $maritalStatus
     * @return $this
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getMultipleBirthBoolean()
    {
        return $this->multipleBirthBoolean;
    }

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $multipleBirthBoolean
     * @return $this
     */
    public function setMultipleBirthBoolean($multipleBirthBoolean)
    {
        $this->multipleBirthBoolean = $multipleBirthBoolean;
        return $this;
    }

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getMultipleBirthInteger()
    {
        return $this->multipleBirthInteger;
    }

    /**
     * Indicates whether the patient is part of a multiple or indicates the actual birth order. (choose any one of multipleBirth*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $multipleBirthInteger
     * @return $this
     */
    public function setMultipleBirthInteger($multipleBirthInteger)
    {
        $this->multipleBirthInteger = $multipleBirthInteger;
        return $this;
    }

    /**
     * Image of the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Image of the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment[] $photo
     * @return $this
     */
    public function addPhoto($photo)
    {
        $this->photo[] = $photo;
        return $this;
    }

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * A contact party (e.g. guardian, partner, friend) for the patient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientContact[] $contact
     * @return $this
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * This patient is known to be an animal.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientAnimal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * This patient is known to be an animal.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientAnimal $animal
     * @return $this
     */
    public function setAnimal($animal)
    {
        $this->animal = $animal;
        return $this;
    }

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientCommunication[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Languages which may be used to communicate with the patient about his or her health.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientCommunication[] $communication
     * @return $this
     */
    public function addCommunication($communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * Patient's nominated care provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCareProvider()
    {
        return $this->careProvider;
    }

    /**
     * Patient's nominated care provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $careProvider
     * @return $this
     */
    public function addCareProvider($careProvider)
    {
        $this->careProvider[] = $careProvider;
        return $this;
    }

    /**
     * Organization that is the custodian of the patient record.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * Organization that is the custodian of the patient record.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     * @return $this
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
        return $this;
    }

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Link to another patient resource that concerns the same actual patient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRPatient\FHIRPatientLink[] $link
     * @return $this
     */
    public function addLink($link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName()
    {
        return $this->_fhirElementName;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = array();
            foreach($this->identifier as $identifier) {
                $json['identifier'][] = $identifier->jsonSerialize();
            }
        }
        if (null !== $this->active) $json['active'] = $this->active->jsonSerialize();
        if (0 < count($this->name)) {
            $json['name'] = array();
            foreach($this->name as $name) {
                $json['name'][] = $name->jsonSerialize();
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = array();
            foreach($this->telecom as $telecom) {
                $json['telecom'][] = $telecom->jsonSerialize();
            }
        }
        if (null !== $this->gender) $json['gender'] = $this->gender->jsonSerialize();
        if (null !== $this->birthDate) $json['birthDate'] = $this->birthDate->jsonSerialize();
        if (null !== $this->deceasedBoolean) $json['deceasedBoolean'] = $this->deceasedBoolean->jsonSerialize();
        if (null !== $this->deceasedDateTime) $json['deceasedDateTime'] = $this->deceasedDateTime->jsonSerialize();
        if (0 < count($this->address)) {
            $json['address'] = array();
            foreach($this->address as $address) {
                $json['address'][] = $address->jsonSerialize();
            }
        }
        if (null !== $this->maritalStatus) $json['maritalStatus'] = $this->maritalStatus->jsonSerialize();
        if (null !== $this->multipleBirthBoolean) $json['multipleBirthBoolean'] = $this->multipleBirthBoolean->jsonSerialize();
        if (null !== $this->multipleBirthInteger) $json['multipleBirthInteger'] = $this->multipleBirthInteger->jsonSerialize();
        if (0 < count($this->photo)) {
            $json['photo'] = array();
            foreach($this->photo as $photo) {
                $json['photo'][] = $photo->jsonSerialize();
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = array();
            foreach($this->contact as $contact) {
                $json['contact'][] = $contact->jsonSerialize();
            }
        }
        if (null !== $this->animal) $json['animal'] = $this->animal->jsonSerialize();
        if (0 < count($this->communication)) {
            $json['communication'] = array();
            foreach($this->communication as $communication) {
                $json['communication'][] = $communication->jsonSerialize();
            }
        }
        if (0 < count($this->careProvider)) {
            $json['careProvider'] = array();
            foreach($this->careProvider as $careProvider) {
                $json['careProvider'][] = $careProvider->jsonSerialize();
            }
        }
        if (null !== $this->managingOrganization) $json['managingOrganization'] = $this->managingOrganization->jsonSerialize();
        if (0 < count($this->link)) {
            $json['link'] = array();
            foreach($this->link as $link) {
                $json['link'][] = $link->jsonSerialize();
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null)
    {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Patient xmlns="http://hl7.org/fhir"></Patient>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (null !== $this->active) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (0 < count($this->name)) {
            foreach($this->name as $name) {
                $name->xmlSerialize(true, $sxe->addChild('name'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (null !== $this->gender) $this->gender->xmlSerialize(true, $sxe->addChild('gender'));
        if (null !== $this->birthDate) $this->birthDate->xmlSerialize(true, $sxe->addChild('birthDate'));
        if (null !== $this->deceasedBoolean) $this->deceasedBoolean->xmlSerialize(true, $sxe->addChild('deceasedBoolean'));
        if (null !== $this->deceasedDateTime) $this->deceasedDateTime->xmlSerialize(true, $sxe->addChild('deceasedDateTime'));
        if (0 < count($this->address)) {
            foreach($this->address as $address) {
                $address->xmlSerialize(true, $sxe->addChild('address'));
            }
        }
        if (null !== $this->maritalStatus) $this->maritalStatus->xmlSerialize(true, $sxe->addChild('maritalStatus'));
        if (null !== $this->multipleBirthBoolean) $this->multipleBirthBoolean->xmlSerialize(true, $sxe->addChild('multipleBirthBoolean'));
        if (null !== $this->multipleBirthInteger) $this->multipleBirthInteger->xmlSerialize(true, $sxe->addChild('multipleBirthInteger'));
        if (0 < count($this->photo)) {
            foreach($this->photo as $photo) {
                $photo->xmlSerialize(true, $sxe->addChild('photo'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (null !== $this->animal) $this->animal->xmlSerialize(true, $sxe->addChild('animal'));
        if (0 < count($this->communication)) {
            foreach($this->communication as $communication) {
                $communication->xmlSerialize(true, $sxe->addChild('communication'));
            }
        }
        if (0 < count($this->careProvider)) {
            foreach($this->careProvider as $careProvider) {
                $careProvider->xmlSerialize(true, $sxe->addChild('careProvider'));
            }
        }
        if (null !== $this->managingOrganization) $this->managingOrganization->xmlSerialize(true, $sxe->addChild('managingOrganization'));
        if (0 < count($this->link)) {
            foreach($this->link as $link) {
                $link->xmlSerialize(true, $sxe->addChild('link'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}