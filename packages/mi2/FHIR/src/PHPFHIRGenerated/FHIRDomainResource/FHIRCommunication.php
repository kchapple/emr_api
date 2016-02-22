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
 * An occurrence of information being transmitted; e.g. an alert that was sent to a responsible provider, a public health agency was notified about a reportable condition.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCommunication extends FHIRDomainResource
{
    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $sender = null;

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $recipient = array();

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public $payload = array();

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $medium = array();

    /**
     * The status of the transmission.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCommunicationStatus
     */
    public $status = null;

    /**
     * The encounter within which the communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The time when this communication was sent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $sent = null;

    /**
     * The time when this communication arrived at the destination.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $received = null;

    /**
     * The reason or justification for the communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * The patient who was the focus of this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The communication request that was responsible for producing this communication.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $requestDetail = null;

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers associated with this Communication that are defined by business processes and/ or used to refer to it when a direct URL reference to the resource itself is not appropriate (e.g. in CDA documents, or in written / printed documentation).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The type of message conveyed such as alert, notification, reminder, instruction, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the source of the communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * The entity (e.g. person, organization, clinical information system, or device) which was the target of the communication. If receipts need to be tracked by individual, a separate resource instance will need to be created for each recipient.  Multiple recipient communications are intended where either a receipt(s) is not tracked (e.g. a mass mail-out) or is captured in aggregate (all emails confirmed received by a particular time).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $recipient
     */
    public function addRecipient($recipient)
    {
        $this->recipient[] = $recipient;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload[]
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Text, attachment(s), or resource(s) that was communicated to the recipient.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRCommunication\FHIRCommunicationPayload[] $payload
     */
    public function addPayload($payload)
    {
        $this->payload[] = $payload;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * A channel that was used for this communication (e.g. email, fax).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $medium
     */
    public function addMedium($medium)
    {
        $this->medium[] = $medium;
    }

    /**
     * The status of the transmission.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCommunicationStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the transmission.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCommunicationStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The encounter within which the communication was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter within which the communication was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * The time when this communication was sent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * The time when this communication was sent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * The time when this communication arrived at the destination.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * The time when this communication arrived at the destination.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $received
     */
    public function setReceived($received)
    {
        $this->received = $received;
    }

    /**
     * The reason or justification for the communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * The reason or justification for the communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reason
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
    }

    /**
     * The patient who was the focus of this communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The patient who was the focus of this communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The communication request that was responsible for producing this communication.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getRequestDetail()
    {
        return $this->requestDetail;
    }

    /**
     * The communication request that was responsible for producing this communication.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $requestDetail
     */
    public function setRequestDetail($requestDetail)
    {
        $this->requestDetail = $requestDetail;
    }


}