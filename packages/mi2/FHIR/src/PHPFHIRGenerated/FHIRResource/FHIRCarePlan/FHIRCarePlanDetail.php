<?php namespace PHPFHIRGenerated\FHIRResource\FHIRCarePlan;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * Describes the intention of how one or more practitioners intend to deliver care for a particular patient, group or community for a period of time, possibly limited to care for a specific condition or set of conditions.
 */
class FHIRCarePlanDetail extends FHIRBackboneElement
{
    /**
     * High-level categorization of the type of activity in a care plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = array();

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $reasonReference = array();

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $goal = array();

    /**
     * Identifies what progress is being made for the specific activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public $status = null;

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $statusReason = null;

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $prohibited = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $scheduledTiming = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $scheduledPeriod = null;

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $scheduledString = null;

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $location = null;

    /**
     * Identifies who's expected to be involved in the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $performer = array();

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $productCodeableConcept = null;

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $productReference = null;

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $dailyAmount = null;

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $quantity = null;

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * High-level categorization of the type of activity in a care plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * High-level categorization of the type of activity in a care plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Detailed description of the type of planned activity; e.g. What lab test, what procedure, what kind of encounter.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Provides the rationale that drove the inclusion of this particular activity as part of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $reasonCode
     */
    public function addReasonCode($reasonCode)
    {
        $this->reasonCode[] = $reasonCode;
    }

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Provides the health condition(s) that drove the inclusion of this particular activity as part of the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $reasonReference
     */
    public function addReasonReference($reasonReference)
    {
        $this->reasonReference[] = $reasonReference;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * Internal reference that identifies the goals that this activity is intended to contribute towards meeting.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $goal
     */
    public function addGoal($goal)
    {
        $this->goal[] = $goal;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Identifies what progress is being made for the specific activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCarePlanActivityStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * Provides reason why the activity isn't yet started, is on hold, was cancelled, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $statusReason
     */
    public function setStatusReason($statusReason)
    {
        $this->statusReason = $statusReason;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * If true, indicates that the described activity is one that must NOT be engaged in when following the plan.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $prohibited
     */
    public function setProhibited($prohibited)
    {
        $this->prohibited = $prohibited;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getScheduledTiming()
    {
        return $this->scheduledTiming;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $scheduledTiming
     */
    public function setScheduledTiming($scheduledTiming)
    {
        $this->scheduledTiming = $scheduledTiming;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getScheduledPeriod()
    {
        return $this->scheduledPeriod;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $scheduledPeriod
     */
    public function setScheduledPeriod($scheduledPeriod)
    {
        $this->scheduledPeriod = $scheduledPeriod;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getScheduledString()
    {
        return $this->scheduledString;
    }

    /**
     * The period, timing or frequency upon which the described activity is to occur. (choose any one of scheduled*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $scheduledString
     */
    public function setScheduledString($scheduledString)
    {
        $this->scheduledString = $scheduledString;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Identifies the facility where the activity will occur; e.g. home, hospital, specific clinic, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * Identifies who's expected to be involved in the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $performer
     */
    public function addPerformer($performer)
    {
        $this->performer[] = $performer;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProductCodeableConcept()
    {
        return $this->productCodeableConcept;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $productCodeableConcept
     */
    public function setProductCodeableConcept($productCodeableConcept)
    {
        $this->productCodeableConcept = $productCodeableConcept;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Identifies the food, drug or other product to be consumed or supplied in the activity. (choose any one of product*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $productReference
     */
    public function setProductReference($productReference)
    {
        $this->productReference = $productReference;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * Identifies the quantity expected to be consumed in a given day.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $dailyAmount
     */
    public function setDailyAmount($dailyAmount)
    {
        $this->dailyAmount = $dailyAmount;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Identifies the quantity expected to be supplied, administered or consumed by the subject.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * This provides a textual description of constraints on the intended activity occurrence, including relation to other activities.  It may also include objectives, pre-conditions and end-conditions.  Finally, it may convey specifics about the activity such as body site, method, route, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}