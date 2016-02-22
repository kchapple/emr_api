<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImagingStudy;

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
 * Representation of the content produced in a DICOM imaging study. A study comprises a set of series, each of which includes a set of Service-Object Pair Instances (SOP Instances - images or other data) acquired or produced in a common context.  A series is of only one modality (e.g. X-ray, CT, MR, ultrasound), but a study may have multiple series of different modalities.
 */
class FHIRImagingStudySeries extends FHIRBackboneElement
{
    /**
     * The Numeric identifier of this series in the study.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $number = null;

    /**
     * The modality of this series sequence.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $modality = null;

    /**
     * Formal identifier for this series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public $uid = null;

    /**
     * A description of the series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Number of SOP Instances in Series.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $numberOfInstances = null;

    /**
     * Availability of series (online, offline or nearline).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public $availability = null;

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $bodySite = null;

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $laterality = null;

    /**
     * The date and time the series was started.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $started = null;

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public $instance = array();

    /**
     * The Numeric identifier of this series in the study.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The Numeric identifier of this series in the study.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * The modality of this series sequence.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * The modality of this series sequence.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $modality
     */
    public function setModality($modality)
    {
        $this->modality = $modality;
    }

    /**
     * Formal identifier for this series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Formal identifier for this series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIROid $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * A description of the series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Number of SOP Instances in Series.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * Number of SOP Instances in Series.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $numberOfInstances
     */
    public function setNumberOfInstances($numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Availability of series (online, offline or nearline).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstanceAvailability $availability
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * URI/URL specifying the location of the referenced series using WADO-RS.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * Body part examined. See  DICOM Part 16 Annex L for the mapping from DICOM to Snomed CT.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $bodySite
     */
    public function setBodySite($bodySite)
    {
        $this->bodySite = $bodySite;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getLaterality()
    {
        return $this->laterality;
    }

    /**
     * Laterality if body site is paired anatomic structure and laterality is not pre-coordinated in body site code.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $laterality
     */
    public function setLaterality($laterality)
    {
        $this->laterality = $laterality;
    }

    /**
     * The date and time the series was started.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getStarted()
    {
        return $this->started;
    }

    /**
     * The date and time the series was started.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $started
     */
    public function setStarted($started)
    {
        $this->started = $started;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * A single SOP Instance within the series, e.g. an image, or presentation state.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRImagingStudy\FHIRImagingStudyInstance[] $instance
     */
    public function addInstance($instance)
    {
        $this->instance[] = $instance;
    }


}