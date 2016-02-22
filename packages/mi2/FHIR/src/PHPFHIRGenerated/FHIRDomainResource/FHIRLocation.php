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
 * Details and position information for a physical place where services are provided  and resources and participants may be stored, found, contained or accommodated.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRLocation extends FHIRDomainResource
{
    /**
     * Unique code or number identifying the location to its users.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * active | suspended | inactive.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public $status = null;

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public $mode = null;

    /**
     * Indicates the type of function performed at the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * Physical location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public $address = null;

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $physicalType = null;

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public $position = null;

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $managingOrganization = null;

    /**
     * Another Location which this Location is physically part of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Unique code or number identifying the location to its users.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Unique code or number identifying the location to its users.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * active | suspended | inactive.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * active | suspended | inactive.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRLocationStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the location as used by humans. Does not need to be unique.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the Location, which helps in finding or referencing the place.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRLocationMode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Indicates whether a resource instance represents a specific location or a class of locations.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRLocationMode $mode
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
    }

    /**
     * Indicates the type of function performed at the location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Indicates the type of function performed at the location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * The contact details of communication devices available at the location. This can include phone numbers, fax numbers, mobile numbers, email addresses and web sites.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
    }

    /**
     * Physical location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Physical location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAddress $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * Physical form of the location, e.g. building, room, vehicle, road.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $physicalType
     */
    public function setPhysicalType($physicalType)
    {
        $this->physicalType = $physicalType;
    }

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * The absolute geographic location of the Location, expressed using the WGS84 datum (This is the same co-ordinate system used in KML).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRLocation\FHIRLocationPosition $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * The organization responsible for the provisioning and upkeep of the location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $managingOrganization
     */
    public function setManagingOrganization($managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
    }

    /**
     * Another Location which this Location is physically part of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Location which this Location is physically part of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
    }


}