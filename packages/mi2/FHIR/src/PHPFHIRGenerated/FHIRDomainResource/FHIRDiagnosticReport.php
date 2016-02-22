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
 * The findings and interpretation of diagnostic  tests performed on patients, groups of patients, devices, and locations, and/or specimens derived from these. The report includes clinical context such as requesting and provider information, and some mix of atomic results, images, textual and coded interpretations, and formatted representation of diagnostic reports.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDiagnosticReport extends FHIRDomainResource
{
    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The status of the diagnostic report as a whole.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public $status = null;

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * A code or name that describes this diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $code = null;

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The link to the health care event (encounter) when the order was made.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $issued = null;

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $performer = null;

    /**
     * Details concerning a test or procedure requested.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $request = array();

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $specimen = array();

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $result = array();

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $imagingStudy = array();

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public $image = array();

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $conclusion = null;

    /**
     * Codes for the conclusion.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $codedDiagnosis = array();

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public $presentedForm = array();

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * The local ID assigned to the report by the order filler, usually by the Information System of the diagnostic service provider.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the diagnostic report as a whole.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDiagnosticReportStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A code that classifies the clinical discipline, department or diagnostic service that created the report (e.g. cardiology, biochemistry, hematology, MRI). This is used for searching, sorting and display purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * A code or name that describes this diagnostic report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the report. Usually, but not always, this is a patient. However diagnostic services also perform analyses on specimens collected from a variety of other sources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The link to the health care event (encounter) when the order was made.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * The link to the health care event (encounter) when the order was made.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $effectiveDateTime
     */
    public function setEffectiveDateTime($effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * The time or time-period the observed values are related to. When the subject of the report is a patient, this is usually either the time of the procedure or of specimen collection(s), but very often the source of the date/time is not known, only the date/time itself. (choose any one of effective*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $effectivePeriod
     */
    public function setEffectivePeriod($effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
    }

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * The date and time that this version of the report was released from the source diagnostic service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $issued
     */
    public function setIssued($issued)
    {
        $this->issued = $issued;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * The diagnostic service that is responsible for issuing the report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $performer
     */
    public function setPerformer($performer)
    {
        $this->performer = $performer;
    }

    /**
     * Details concerning a test or procedure requested.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Details concerning a test or procedure requested.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $request
     */
    public function addRequest($request)
    {
        $this->request[] = $request;
    }

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * Details about the specimens on which this diagnostic report is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $specimen
     */
    public function addSpecimen($specimen)
    {
        $this->specimen[] = $specimen;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Observations that are part of this diagnostic report. Observations can be simple name/value pairs (e.g. "atomic" results), or they can be grouping observations that include references to other members of the group (e.g. "panels").
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $result
     */
    public function addResult($result)
    {
        $this->result[] = $result;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * One or more links to full details of any imaging performed during the diagnostic investigation. Typically, this is imaging performed by DICOM enabled modalities, but this is not required. A fully enabled PACS viewer can use this information to provide views of the source images.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $imagingStudy
     */
    public function addImagingStudy($imagingStudy)
    {
        $this->imagingStudy[] = $imagingStudy;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * A list of key images associated with this report. The images are generally created during the diagnostic process, and may be directly of the patient, or of treated specimens (i.e. slides of interest).
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDiagnosticReport\FHIRDiagnosticReportImage[] $image
     */
    public function addImage($image)
    {
        $this->image[] = $image;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * Concise and clinically contextualized narrative interpretation of the diagnostic report.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $conclusion
     */
    public function setConclusion($conclusion)
    {
        $this->conclusion = $conclusion;
    }

    /**
     * Codes for the conclusion.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis()
    {
        return $this->codedDiagnosis;
    }

    /**
     * Codes for the conclusion.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $codedDiagnosis
     */
    public function addCodedDiagnosis($codedDiagnosis)
    {
        $this->codedDiagnosis[] = $codedDiagnosis;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment[]
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }

    /**
     * Rich text representation of the entire result as issued by the diagnostic service. Multiple formats are allowed but they SHALL be semantically equivalent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment[] $presentedForm
     */
    public function addPresentedForm($presentedForm)
    {
        $this->presentedForm[] = $presentedForm;
    }


}