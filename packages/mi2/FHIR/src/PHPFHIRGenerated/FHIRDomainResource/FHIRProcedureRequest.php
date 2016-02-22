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
 * A request for a procedure to be performed. May be a proposal or an order.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRProcedureRequest extends FHIRDomainResource
{
    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The person, animal or group that should receive the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The specific procedure that is ordered. Use text if the exact nature of the procedure cannot be coded.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $bodySite = array();

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $scheduledDateTime = null;

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $scheduledPeriod = null;

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $scheduledTiming = null;

    /**
     * The encounter within which the procedure proposal or request was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * For example, the surgeon, anaethetist, endoscopist, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * The status of the order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestStatus
     */
    public $status = null;

    /**
     * Any other notes associated with this proposal or order - e.g. provider instructions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public $notes = array();

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * The time when the request was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $orderedOn = null;

    /**
     * The healthcare professional responsible for proposing or ordering the procedure.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $orderer = null;

    /**
     * The clinical priority associated with this order.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestPriority
     */
    public $priority = null;

    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this order by the order or by the receiver.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The person, animal or group that should receive the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The person, animal or group that should receive the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The specific procedure that is ordered. Use text if the exact nature of the procedure cannot be coded.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The specific procedure that is ordered. Use text if the exact nature of the procedure cannot be coded.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Indicates the sites on the subject's body where the procedure should be performed (I.e. the target sites).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $bodySite
     */
    public function addBodySite($bodySite)
    {
        $this->bodySite[] = $bodySite;
    }

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
    }

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * The reason why the procedure is being proposed or ordered. This procedure request may be motivated by a Condition for instance. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getScheduledDateTime()
    {
        return $this->scheduledDateTime;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $scheduledDateTime
     */
    public function setScheduledDateTime($scheduledDateTime)
    {
        $this->scheduledDateTime = $scheduledDateTime;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $scheduledPeriod
     */
    public function setScheduledPeriod($scheduledPeriod)
    {
        $this->scheduledPeriod = $scheduledPeriod;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
    }

    /**
     * The timing schedule for the proposed or ordered procedure. The Schedule data type allows many different expressions.  E.g. "Every 8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:"; "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013". (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $scheduledTiming
     */
    public function setScheduledTiming($scheduledTiming)
    {
        $this->scheduledTiming = $scheduledTiming;
    }

    /**
     * The encounter within which the procedure proposal or request was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The encounter within which the procedure proposal or request was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * For example, the surgeon, anaethetist, endoscopist, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * For example, the surgeon, anaethetist, endoscopist, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * The status of the order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Any other notes associated with this proposal or order - e.g. provider instructions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Any other notes associated with this proposal or order - e.g. provider instructions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAnnotation[] $notes
     */
    public function addNotes($notes)
    {
        $this->notes[] = $notes;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $asNeededBoolean
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * If a CodeableConcept is present, it indicates the pre-condition for performing the procedure. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
    }

    /**
     * The time when the request was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getOrderedOn()
    {
        return $this->orderedOn;
    }

    /**
     * The time when the request was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $orderedOn
     */
    public function setOrderedOn($orderedOn)
    {
        $this->orderedOn = $orderedOn;
    }

    /**
     * The healthcare professional responsible for proposing or ordering the procedure.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * The healthcare professional responsible for proposing or ordering the procedure.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $orderer
     */
    public function setOrderer($orderer)
    {
        $this->orderer = $orderer;
    }

    /**
     * The clinical priority associated with this order.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * The clinical priority associated with this order.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProcedureRequestPriority $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }


}