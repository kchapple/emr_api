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
 * A slot of time on a schedule that may be available for booking appointments.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRSlot extends FHIRDomainResource
{
    /**
     * External Ids for this item.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $schedule = null;

    /**
     * busy | free | busy-unavailable | busy-tentative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRSlotStatus
     */
    public $freeBusyType = null;

    /**
     * Date/Time that the slot is to begin.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $start = null;

    /**
     * Date/Time that the slot is to conclude.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $end = null;

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $overbooked = null;

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $comment = null;

    /**
     * External Ids for this item.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * External Ids for this item.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of appointments that can be booked into this slot (ideally this would be an identifiable service - which is at a location, rather than the location itself). If provided then this overrides the value provided on the availability resource.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * The schedule resource that this slot defines an interval of status information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $schedule
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
    }

    /**
     * busy | free | busy-unavailable | busy-tentative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRSlotStatus
     */
    public function getFreeBusyType()
    {
        return $this->freeBusyType;
    }

    /**
     * busy | free | busy-unavailable | busy-tentative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRSlotStatus $freeBusyType
     */
    public function setFreeBusyType($freeBusyType)
    {
        $this->freeBusyType = $freeBusyType;
    }

    /**
     * Date/Time that the slot is to begin.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Date/Time that the slot is to begin.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * Date/Time that the slot is to conclude.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Date/Time that the slot is to conclude.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $end
     */
    public function setEnd($end)
    {
        $this->end = $end;
    }

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getOverbooked()
    {
        return $this->overbooked;
    }

    /**
     * This slot has already been overbooked, appointments are unlikely to be accepted for this time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $overbooked
     */
    public function setOverbooked($overbooked)
    {
        $this->overbooked = $overbooked;
    }

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Comments on the slot to describe any extended information. Such as custom constraints on the slot.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }


}