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
 * The details of a healthcare service available at a location.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRHealthcareService extends FHIRDomainResource
{
    /**
     * External identifiers for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The organization that provides this healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $providedBy = null;

    /**
     * Identifies the broad category of service being performed or delivered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $serviceCategory = null;

    /**
     * A specific type of service that may be delivered or performed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    public $serviceType = array();

    /**
     * The location where this healthcare service may be provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $serviceName = null;

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $extraDetails = null;

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $photo = null;

    /**
     * List of contacts related to this specific healthcare service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = array();

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $coverageArea = array();

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceProvisionCode = array();

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $eligibility = null;

    /**
     * Describes the eligibility conditions for the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $eligibilityNote = null;

    /**
     * Program Names that can be used to categorize the service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public $programName = array();

    /**
     * Collection of characteristics (attributes).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $characteristic = array();

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $referralMethod = array();

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publicKey = null;

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $appointmentRequired = null;

    /**
     * A collection of times that the Service Site is available.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public $availableTime = array();

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public $notAvailable = array();

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * External identifiers for this item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External identifiers for this item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The organization that provides this healthcare service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * The organization that provides this healthcare service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $providedBy
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;
    }

    /**
     * Identifies the broad category of service being performed or delivered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * Identifies the broad category of service being performed or delivered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $serviceCategory
     */
    public function setServiceCategory($serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * A specific type of service that may be delivered or performed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * A specific type of service that may be delivered or performed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceServiceType[] $serviceType
     */
    public function addServiceType($serviceType)
    {
        $this->serviceType[] = $serviceType;
    }

    /**
     * The location where this healthcare service may be provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location where this healthcare service may be provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * Further description of the service as it would be presented to a consumer while searching.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $serviceName
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
    }

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Any additional description of the service and/or any specific issues not covered by the other attributes, which can be displayed as further detail under the serviceName.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getExtraDetails()
    {
        return $this->extraDetails;
    }

    /**
     * Extra details about the service that can't be placed in the other fields.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $extraDetails
     */
    public function setExtraDetails($extraDetails)
    {
        $this->extraDetails = $extraDetails;
    }

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * If there is a photo/symbol associated with this HealthcareService, it may be included here to facilitate quick identification of the service in a list.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * List of contacts related to this specific healthcare service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * List of contacts related to this specific healthcare service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[] $telecom
     */
    public function addTelecom($telecom)
    {
        $this->telecom[] = $telecom;
    }

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCoverageArea()
    {
        return $this->coverageArea;
    }

    /**
     * The location(s) that this service is available to (not where the service is provided).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $coverageArea
     */
    public function addCoverageArea($coverageArea)
    {
        $this->coverageArea[] = $coverageArea;
    }

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceProvisionCode()
    {
        return $this->serviceProvisionCode;
    }

    /**
     * The code(s) that detail the conditions under which the healthcare service is available/offered.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $serviceProvisionCode
     */
    public function addServiceProvisionCode($serviceProvisionCode)
    {
        $this->serviceProvisionCode[] = $serviceProvisionCode;
    }

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getEligibility()
    {
        return $this->eligibility;
    }

    /**
     * Does this service have specific eligibility requirements that need to be met in order to use the service?
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $eligibility
     */
    public function setEligibility($eligibility)
    {
        $this->eligibility = $eligibility;
    }

    /**
     * Describes the eligibility conditions for the service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getEligibilityNote()
    {
        return $this->eligibilityNote;
    }

    /**
     * Describes the eligibility conditions for the service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $eligibilityNote
     */
    public function setEligibilityNote($eligibilityNote)
    {
        $this->eligibilityNote = $eligibilityNote;
    }

    /**
     * Program Names that can be used to categorize the service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString[]
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Program Names that can be used to categorize the service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString[] $programName
     */
    public function addProgramName($programName)
    {
        $this->programName[] = $programName;
    }

    /**
     * Collection of characteristics (attributes).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Collection of characteristics (attributes).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $characteristic
     */
    public function addCharacteristic($characteristic)
    {
        $this->characteristic[] = $characteristic;
    }

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReferralMethod()
    {
        return $this->referralMethod;
    }

    /**
     * Ways that the service accepts referrals, if this is not provided then it is implied that no referral is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $referralMethod
     */
    public function addReferralMethod($referralMethod)
    {
        $this->referralMethod[] = $referralMethod;
    }

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * The public part of the 'keys' allocated to an Organization by an accredited body to support secure exchange of data over the internet. To be provided by the Organization, where available.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publicKey
     */
    public function setPublicKey($publicKey)
    {
        $this->publicKey = $publicKey;
    }

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAppointmentRequired()
    {
        return $this->appointmentRequired;
    }

    /**
     * Indicates whether or not a prospective consumer will require an appointment for a particular service at a site to be provided by the Organization. Indicates if an appointment is required for access to this service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $appointmentRequired
     */
    public function setAppointmentRequired($appointmentRequired)
    {
        $this->appointmentRequired = $appointmentRequired;
    }

    /**
     * A collection of times that the Service Site is available.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[]
     */
    public function getAvailableTime()
    {
        return $this->availableTime;
    }

    /**
     * A collection of times that the Service Site is available.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceAvailableTime[] $availableTime
     */
    public function addAvailableTime($availableTime)
    {
        $this->availableTime[] = $availableTime;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[]
     */
    public function getNotAvailable()
    {
        return $this->notAvailable;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRHealthcareService\FHIRHealthcareServiceNotAvailable[] $notAvailable
     */
    public function addNotAvailable($notAvailable)
    {
        $this->notAvailable[] = $notAvailable;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions()
    {
        return $this->availabilityExceptions;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $availabilityExceptions
     */
    public function setAvailabilityExceptions($availabilityExceptions)
    {
        $this->availabilityExceptions = $availabilityExceptions;
    }


}