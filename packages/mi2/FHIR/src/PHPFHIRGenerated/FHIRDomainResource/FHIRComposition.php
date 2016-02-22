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
 * A set of healthcare-related information that is assembled together into a single logical document that provides a single coherent statement of meaning, establishes its own context and that has clinical attestation with regard to who is making the statement. While a Composition defines the structure, it does not actually contain the content: rather the full content of a document is contained in a Bundle, of which the Composition is the first resource contained.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRComposition extends FHIRDomainResource
{
    /**
     * Logical identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Official human-readable label for the composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public $status = null;

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $confidentiality = null;

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester[]
     */
    public $attester = array();

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $custodian = null;

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent[]
     */
    public $event = array();

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The root of the sections that make up the composition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public $section = array();

    /**
     * Logical identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Logical identifier for the composition, assigned when created. This identifier stays constant as the composition is changed over time.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The composition editing time, when the composition was last logically changed by the author.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the particular kind of composition (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A categorization for the type of the composition - helps for indexing and searching. This may be implied by or derived from the code specified in the Composition Type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Official human-readable label for the composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Official human-readable label for the composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The workflow/clinical status of this composition. The status is a marker for the clinical standing of the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCompositionStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * The code specifying the level of confidentiality of the Composition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $confidentiality
     */
    public function setConfidentiality($confidentiality)
    {
        $this->confidentiality = $confidentiality;
    }

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the composition is about. The composition can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of livestock, or a set of patients that share a common exposure).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is responsible for the information in the composition, not necessarily who typed it in.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $author
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * A participant who has attested to the accuracy of the composition/document.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionAttester[] $attester
     */
    public function addAttester($attester)
    {
        $this->attester[] = $attester;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the composition/document information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $custodian
     */
    public function setCustodian($custodian)
    {
        $this->custodian = $custodian;
    }

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * The clinical service, such as a colonoscopy or an appendectomy, being documented.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionEvent[] $event
     */
    public function addEvent($event)
    {
        $this->event[] = $event;
    }

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Describes the clinical encounter or type of care this documentation is associated with.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * The root of the sections that make up the composition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * The root of the sections that make up the composition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRComposition\FHIRCompositionSection[] $section
     */
    public function addSection($section)
    {
        $this->section[] = $section;
    }


}