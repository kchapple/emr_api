<?php namespace PHPFHIRGenerated\FHIRResource\FHIRRiskAssessment;

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
 * An assessment of the likely outcome(s) for a patient or other subject as well as the likelihood of each outcome.
 */
class FHIRRiskAssessmentPrediction extends FHIRBackboneElement
{
    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $probabilityDecimal = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $probabilityRange = null;

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $probabilityCodeableConcept = null;

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $relativeRisk = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $whenPeriod = null;

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $whenRange = null;

    /**
     * Additional information explaining the basis for the prediction.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $rationale = null;

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * One of the potential outcomes for the patient (e.g. remission, death,  a particular condition).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $outcome
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getProbabilityDecimal()
    {
        return $this->probabilityDecimal;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $probabilityDecimal
     */
    public function setProbabilityDecimal($probabilityDecimal)
    {
        $this->probabilityDecimal = $probabilityDecimal;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getProbabilityRange()
    {
        return $this->probabilityRange;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $probabilityRange
     */
    public function setProbabilityRange($probabilityRange)
    {
        $this->probabilityRange = $probabilityRange;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getProbabilityCodeableConcept()
    {
        return $this->probabilityCodeableConcept;
    }

    /**
     * How likely is the outcome (in the specified timeframe). (choose any one of probability*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $probabilityCodeableConcept
     */
    public function setProbabilityCodeableConcept($probabilityCodeableConcept)
    {
        $this->probabilityCodeableConcept = $probabilityCodeableConcept;
    }

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getRelativeRisk()
    {
        return $this->relativeRisk;
    }

    /**
     * Indicates the risk for this particular subject (with their specific characteristics) divided by the risk of the population in general.  (Numbers greater than 1 = higher risk than the population, numbers less than 1 = lower risk.).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $relativeRisk
     */
    public function setRelativeRisk($relativeRisk)
    {
        $this->relativeRisk = $relativeRisk;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getWhenPeriod()
    {
        return $this->whenPeriod;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $whenPeriod
     */
    public function setWhenPeriod($whenPeriod)
    {
        $this->whenPeriod = $whenPeriod;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getWhenRange()
    {
        return $this->whenRange;
    }

    /**
     * Indicates the period of time or age range of the subject to which the specified probability applies. (choose any one of when*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $whenRange
     */
    public function setWhenRange($whenRange)
    {
        $this->whenRange = $whenRange;
    }

    /**
     * Additional information explaining the basis for the prediction.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRationale()
    {
        return $this->rationale;
    }

    /**
     * Additional information explaining the basis for the prediction.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $rationale
     */
    public function setRationale($rationale)
    {
        $this->rationale = $rationale;
    }


}