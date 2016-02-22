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
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRVisionPrescription extends FHIRDomainResource
{
    /**
     * Business identifier which may be used by other parties to reference or identify the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The date (and perhaps time) when the prescription was written.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $dateWritten = null;

    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $patient = null;

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $prescriber = null;

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $reasonCodeableConcept = null;

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reasonReference = null;

    /**
     * Deals with details of the dispense part of the supply specification.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRVisionPrescription\FHIRVisionPrescriptionDispense[]
     */
    public $dispense = array();

    /**
     * Business identifier which may be used by other parties to reference or identify the prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Business identifier which may be used by other parties to reference or identify the prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * The date (and perhaps time) when the prescription was written.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $dateWritten
     */
    public function setDateWritten($dateWritten)
    {
        $this->dateWritten = $dateWritten;
    }

    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * A link to a resource representing the person to whom the vision products will be supplied.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $patient
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * The healthcare professional responsible for authorizing the prescription.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $prescriber
     */
    public function setPrescriber($prescriber)
    {
        $this->prescriber = $prescriber;
    }

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A link to a resource that identifies the particular occurrence of contact between patient and health care provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonCodeableConcept()
    {
        return $this->reasonCodeableConcept;
    }

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $reasonCodeableConcept
     */
    public function setReasonCodeableConcept($reasonCodeableConcept)
    {
        $this->reasonCodeableConcept = $reasonCodeableConcept;
    }

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * Can be the reason or the indication for writing the prescription. (choose any one of reason*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reasonReference
     */
    public function setReasonReference($reasonReference)
    {
        $this->reasonReference = $reasonReference;
    }

    /**
     * Deals with details of the dispense part of the supply specification.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRVisionPrescription\FHIRVisionPrescriptionDispense[]
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * Deals with details of the dispense part of the supply specification.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRVisionPrescription\FHIRVisionPrescriptionDispense[] $dispense
     */
    public function addDispense($dispense)
    {
        $this->dispense[] = $dispense;
    }


}