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
 * A record of a request for a diagnostic investigation service to be performed.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDiagnosticOrder extends FHIRDomainResource
{
    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $orderer = null;

    /**
     * Identifiers assigned to this order instance by the orderer and/or  the receiver and/or order fulfiller.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reason = array();

    /**
     * Additional clinical information about the patient or specimen that may influence test interpretations.  This includes observations explicitly requested by the producer(filler) to provide context or supporting information needed to complete the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = array();

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $specimen = array();

    /**
     * The status of the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus
     */
    public $status = null;

    /**
     * The clinical priority associated with this order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority
     */
    public $priority = null;

    /**
     * A summary of the events of interest that have occurred as the request is processed; e.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
     */
    public $event = array();

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[]
     */
    public $item = array();

    /**
     * Any other notes associated with this patient, specimen or order (e.g. "patient hates needles").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $note = array();

    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the investigation is to be performed on. This is usually a human patient, but diagnostic tests can also be requested on animals, groups of humans or animals, devices such as dialysis machines, or even locations (typically for environmental scans).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * The practitioner that holds legal responsibility for ordering the investigation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $orderer
     */
    public function setOrderer($orderer)
    {
        $this->orderer = $orderer;
    }

    /**
     * Identifiers assigned to this order instance by the orderer and/or  the receiver and/or order fulfiller.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order instance by the orderer and/or  the receiver and/or order fulfiller.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * An encounter that provides additional information about the healthcare context in which this request is made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * An explanation or justification for why this diagnostic investigation is being requested.   This is often for billing purposes.  May relate to the resources referred to in supportingInformation.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reason
     */
    public function addReason($reason)
    {
        $this->reason[] = $reason;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence test interpretations.  This includes observations explicitly requested by the producer(filler) to provide context or supporting information needed to complete the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * Additional clinical information about the patient or specimen that may influence test interpretations.  This includes observations explicitly requested by the producer(filler) to provide context or supporting information needed to complete the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $supportingInformation
     */
    public function addSupportingInformation($supportingInformation)
    {
        $this->supportingInformation[] = $supportingInformation;
    }

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * One or more specimens that the diagnostic investigation is about.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $specimen
     */
    public function addSpecimen($specimen)
    {
        $this->specimen[] = $specimen;
    }

    /**
     * The status of the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The clinical priority associated with this order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The clinical priority associated with this order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticOrderPriority $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * A summary of the events of interest that have occurred as the request is processed; e.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * A summary of the events of interest that have occurred as the request is processed; e.g. when the order was made, various processing steps (specimens received), when it was completed.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderEvent[] $event
     */
    public function addEvent($event)
    {
        $this->event[] = $event;
    }

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * The specific diagnostic investigations that are requested as part of this request. Sometimes, there can only be one item per request, but in most contexts, more than one investigation can be requested.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticOrder\FHIRDiagnosticOrderItem[] $item
     */
    public function addItem($item)
    {
        $this->item[] = $item;
    }

    /**
     * Any other notes associated with this patient, specimen or order (e.g. "patient hates needles").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Any other notes associated with this patient, specimen or order (e.g. "patient hates needles").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $note
     */
    public function addNote($note)
    {
        $this->note[] = $note;
    }


}