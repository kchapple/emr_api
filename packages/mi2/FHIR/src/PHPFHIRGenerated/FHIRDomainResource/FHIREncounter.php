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
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREncounter extends FHIRDomainResource
{
    /**
     * Identifier(s) by which this encounter is known.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterState
     */
    public $status = null;

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public $statusHistory = array();

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREncounterClass
     */
    public $class = null;

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $type = array();

    /**
     * Indicates the urgency of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $priority = null;

    /**
     * The patient present at the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $episodeOfCare = array();

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $incomingReferral = array();

    /**
     * The list of people responsible for providing the service.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public $participant = array();

    /**
     * The appointment that scheduled this encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $appointment = null;

    /**
     * The start and end time of the encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @var \PHPFHIRGenerated\FHIRDuration
     */
    public $length = null;

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $indication = array();

    /**
     * Details about the admission to a healthcare service.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public $hospitalization = null;

    /**
     * List of locations where  the patient has been during this encounter.
     * @var \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public $location = array();

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $serviceProvider = null;

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $partOf = null;

    /**
     * Identifier(s) by which this encounter is known.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifier(s) by which this encounter is known.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREncounterState
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * planned | arrived | in-progress | onleave | finished | cancelled.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREncounterState $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[]
     */
    public function getStatusHistory()
    {
        return $this->statusHistory;
    }

    /**
     * The status history permits the encounter resource to contain the status history without needing to read through the historical versions of the resource, or even have the server store them.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterStatusHistory[] $statusHistory
     */
    public function addStatusHistory($statusHistory)
    {
        $this->statusHistory[] = $statusHistory;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREncounterClass
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * inpatient | outpatient | ambulatory | emergency +.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREncounterClass $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specific type of encounter (e.g. e-mail consultation, surgical day-care, skilled nursing, rehabilitation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * Indicates the urgency of the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Indicates the urgency of the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * The patient present at the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * The patient present at the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEpisodeOfCare()
    {
        return $this->episodeOfCare;
    }

    /**
     * Where a specific encounter should be classified as a part of a specific episode(s) of care this field should be used. This association can facilitate grouping of related encounters together for a specific purpose, such as government reporting, issue tracking, association via a common problem.  The association is recorded on the encounter as these are typically created after the episode of care, and grouped on entry rather than editing the episode of care to append another encounter to it (the episode of care could span years).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $episodeOfCare
     */
    public function addEpisodeOfCare($episodeOfCare)
    {
        $this->episodeOfCare[] = $episodeOfCare;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIncomingReferral()
    {
        return $this->incomingReferral;
    }

    /**
     * The referral request this encounter satisfies (incoming referral).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $incomingReferral
     */
    public function addIncomingReferral($incomingReferral)
    {
        $this->incomingReferral[] = $incomingReferral;
    }

    /**
     * The list of people responsible for providing the service.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * The list of people responsible for providing the service.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterParticipant[] $participant
     */
    public function addParticipant($participant)
    {
        $this->participant[] = $participant;
    }

    /**
     * The appointment that scheduled this encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * The appointment that scheduled this encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $appointment
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;
    }

    /**
     * The start and end time of the encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * The start and end time of the encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @return \PHPFHIRGenerated\FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Quantity of time the encounter lasted. This excludes the time during leaves of absence.
     * @param \PHPFHIRGenerated\FHIRDuration $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Reason the encounter takes place, expressed as a code. For admissions, this can be used for a coded admission diagnosis.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reason
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Reason the encounter takes place, as specified using information from another resource. For admissions, this is the admission diagnosis. The indication will typically be a Condition (with other resources referenced in the evidence.detail), or a Procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $indication
     */
    public function addIndication($indication)
    {
        $this->indication[] = $indication;
    }

    /**
     * Details about the admission to a healthcare service.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * Details about the admission to a healthcare service.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterHospitalization $hospitalization
     */
    public function setHospitalization($hospitalization)
    {
        $this->hospitalization = $hospitalization;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @return \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * List of locations where  the patient has been during this encounter.
     * @param \PHPFHIRGenerated\FHIRResource\FHIREncounter\FHIREncounterLocation[] $location
     */
    public function addLocation($location)
    {
        $this->location[] = $location;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * An organization that is in charge of maintaining the information of this Encounter (e.g. who maintains the report or the master service catalog item, etc.). This MAY be the same as the organization on the Patient record, however it could be different. This MAY not be not the Service Delivery Location's Organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $serviceProvider
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * Another Encounter of which this encounter is a part of (administratively or in time).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $partOf
     */
    public function setPartOf($partOf)
    {
        $this->partOf = $partOf;
    }


}