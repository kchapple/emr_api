<?php namespace PHPFHIRGenerated\FHIRResource\FHIRMedicationStatement;

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
 * A record of a medication that is being consumed by a patient.   A MedicationStatement may indicate that the patient may be taking the medication now, or has taken the medication in the past or will be taking the medication in the future.  The source of this information can be the patient, significant other (such as a family member or spouse), or a clinician.  A common scenario where this information is captured is during the history taking process during a patient visit or stay.   The medication information may come from e.g. the patient's memory, from a prescription bottle,  or from a list of medications the patient, clinician or other party maintains 

The primary difference between a medication statement and a medication administration is that the medication administration has complete administration information and is based on actual administration information from the person who administered the medication.  A medication statement is often, if not always, less specific.  There is no required date/time when the medication was administered, in fact we only know that a source has reported the patient is taking this medication, where details such as time, quantity, or rate or even medication product may be incomplete or missing or less precise.  As stated earlier, the medication statement information may come from the patient's memory, from a prescription bottle or from a list of medications the patient, clinician or other party maintains.  Medication administration is more formal and is not missing detailed information.
 */
class FHIRMedicationStatementDosage extends FHIRBackboneElement
{
    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public $timing = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $asNeededBoolean = null;

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $asNeededCodeableConcept = null;

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $siteCodeableConcept = null;

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $siteReference = null;

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $route = null;

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $method = null;

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $quantityQuantity = null;

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $quantityRange = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $rateRatio = null;

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public $rateRange = null;

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public $maxDosePerPeriod = null;

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Free text dosage information as reported about a patient's medication use. When coded dosage information is present, the free text may still be present for display to humans.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRTiming
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * The timing schedule for giving the medication to the patient.  The Schedule data type allows many different expressions, for example.  "Every  8 hours"; "Three times a day"; "1/2 an hour before breakfast for 10 days from 23-Dec 2011:";  "15 Oct 2013, 17 Oct 2013 and 1 Nov 2013".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRTiming $timing
     */
    public function setTiming($timing)
    {
        $this->timing = $timing;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getAsNeededBoolean()
    {
        return $this->asNeededBoolean;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $asNeededBoolean
     */
    public function setAsNeededBoolean($asNeededBoolean)
    {
        $this->asNeededBoolean = $asNeededBoolean;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getAsNeededCodeableConcept()
    {
        return $this->asNeededCodeableConcept;
    }

    /**
     * Indicates whether the Medication is only taken when needed within a specific dosing schedule (Boolean option), or it indicates the precondition for taking the Medication (CodeableConcept).  

Specifically if 'boolean' datatype is selected, then the following logic applies:  If set to True, this indicates that the medication is only taken when needed, within the specified schedule. (choose any one of asNeeded*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $asNeededCodeableConcept
     */
    public function setAsNeededCodeableConcept($asNeededCodeableConcept)
    {
        $this->asNeededCodeableConcept = $asNeededCodeableConcept;
    }

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSiteCodeableConcept()
    {
        return $this->siteCodeableConcept;
    }

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $siteCodeableConcept
     */
    public function setSiteCodeableConcept($siteCodeableConcept)
    {
        $this->siteCodeableConcept = $siteCodeableConcept;
    }

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSiteReference()
    {
        return $this->siteReference;
    }

    /**
     * A coded specification of or a reference to the anatomic site where the medication first enters the body. (choose any one of site*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $siteReference
     */
    public function setSiteReference($siteReference)
    {
        $this->siteReference = $siteReference;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * A code specifying the route or physiological path of administration of a therapeutic agent into or onto a subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * A coded value indicating the method by which the medication is intended to be or was introduced into or on the body.  This attribute will most often NOT be populated.  It is most commonly used for injections.  For example, Slow Push, Deep IV.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getQuantityQuantity()
    {
        return $this->quantityQuantity;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $quantityQuantity
     */
    public function setQuantityQuantity($quantityQuantity)
    {
        $this->quantityQuantity = $quantityQuantity;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getQuantityRange()
    {
        return $this->quantityRange;
    }

    /**
     * The amount of therapeutic or other substance given at one administration event. (choose any one of quantity*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $quantityRange
     */
    public function setQuantityRange($quantityRange)
    {
        $this->quantityRange = $quantityRange;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getRateRatio()
    {
        return $this->rateRatio;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $rateRatio
     */
    public function setRateRatio($rateRatio)
    {
        $this->rateRatio = $rateRatio;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRange
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Identifies the speed with which the medication was or will be introduced into the patient. Typically the rate for an infusion e.g. 100 ml per 1 hour or 100 ml/hr.  May also be expressed as a rate per unit of time e.g. 500 ml per 2 hours.   Currently we do not specify a default of '1' in the denominator, but this is being discussed. Other examples: 200 mcg/min or 200 mcg/1 minute; 1 liter/8 hours. (choose any one of rate*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRange $rateRange
     */
    public function setRateRange($rateRange)
    {
        $this->rateRange = $rateRange;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRRatio
     */
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * The maximum total quantity of a therapeutic substance that may be administered to a subject over the period of time.  For example, 1000mg in 24 hours.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRRatio $maxDosePerPeriod
     */
    public function setMaxDosePerPeriod($maxDosePerPeriod)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
    }


}