<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTiming;

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

use PHPFHIRGenerated\FHIRElement;

/**
 * Specifies an event that may occur multiple times. Timing schedules are used to record when things are expected or requested to occur. The most common usage is in dosage instructions for medications. They are also used when planning care of various kinds.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRTimingRepeat extends FHIRElement
{
    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @var \PHPFHIRGenerated\FHIRDuration
     */
    public $boundsQuantity = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $boundsRange = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $boundsPeriod = null;

    /**
     * A total count of the desired number of repetitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $count = null;

    /**
     * How long this thing happens for when it happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $duration = null;

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $durationMax = null;

    /**
     * The units of time for the duration, in UCUM units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $durationUnits = null;

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frequency = null;

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $frequencyMax = null;

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $period = null;

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $periodMax = null;

    /**
     * The units of time for the period in UCUM units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public $periodUnits = null;

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public $when = null;

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @return \PHPFHIRGenerated\FHIRDuration
     */
    public function getBoundsQuantity()
    {
        return $this->boundsQuantity;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @param \PHPFHIRGenerated\FHIRDuration $boundsQuantity
     */
    public function setBoundsQuantity($boundsQuantity)
    {
        $this->boundsQuantity = $boundsQuantity;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getBoundsRange()
    {
        return $this->boundsRange;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $boundsRange
     */
    public function setBoundsRange($boundsRange)
    {
        $this->boundsRange = $boundsRange;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getBoundsPeriod()
    {
        return $this->boundsPeriod;
    }

    /**
     * Either a duration for the length of the timing schedule, a range of possible length, or outer bounds for start and/or end limits of the timing schedule. (choose any one of bounds*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $boundsPeriod
     */
    public function setBoundsPeriod($boundsPeriod)
    {
        $this->boundsPeriod = $boundsPeriod;
    }

    /**
     * A total count of the desired number of repetitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * A total count of the desired number of repetitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * How long this thing happens for when it happens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * How long this thing happens for when it happens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDurationMax()
    {
        return $this->durationMax;
    }

    /**
     * The upper limit of how long this thing happens for when it happens.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $durationMax
     */
    public function setDurationMax($durationMax)
    {
        $this->durationMax = $durationMax;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getDurationUnits()
    {
        return $this->durationUnits;
    }

    /**
     * The units of time for the duration, in UCUM units.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $durationUnits
     */
    public function setDurationUnits($durationUnits)
    {
        $this->durationUnits = $durationUnits;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * The number of times to repeat the action within the specified period / period range (i.e. both period and periodMax provided).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getFrequencyMax()
    {
        return $this->frequencyMax;
    }

    /**
     * If present, indicates that the frequency is a range - so repeat between [frequency] and [frequencyMax] times within the period or period range.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $frequencyMax
     */
    public function setFrequencyMax($frequencyMax)
    {
        $this->frequencyMax = $frequencyMax;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Indicates the duration of time over which repetitions are to occur; e.g. to express "3 times per day", 3 would be the frequency and "1 day" would be the period.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPeriodMax()
    {
        return $this->periodMax;
    }

    /**
     * If present, indicates that the period is a range from [period] to [periodMax], allowing expressing concepts such as "do this once every 3-5 days.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $periodMax
     */
    public function setPeriodMax($periodMax)
    {
        $this->periodMax = $periodMax;
    }

    /**
     * The units of time for the period in UCUM units.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime
     */
    public function getPeriodUnits()
    {
        return $this->periodUnits;
    }

    /**
     * The units of time for the period in UCUM units.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnitsOfTime $periodUnits
     */
    public function setPeriodUnits($periodUnits)
    {
        $this->periodUnits = $periodUnits;
    }

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIREventTiming
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * A real world event that the occurrence of the event should be tied to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIREventTiming $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }


}