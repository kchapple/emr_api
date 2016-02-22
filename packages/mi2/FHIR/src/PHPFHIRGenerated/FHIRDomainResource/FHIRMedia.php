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
 * A photo, video, or audio recording acquired or used in healthcare. The actual content may be inline or provided by direct reference.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedia extends FHIRDomainResource
{
    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType
     */
    public $type = null;

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $subtype = null;

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Who/What this Media is a record of.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The person who administered the collection of the image.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $operator = null;

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $view = null;

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $deviceName = null;

    /**
     * Height of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $height = null;

    /**
     * Width of the image in pixels (photo/video).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $width = null;

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public $frames = null;

    /**
     * The duration of the recording in seconds - for audio and video.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $duration = null;

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public $content = null;

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Whether the media is a photo (still image), an audio recording, or a video recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDigitalMediaType $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Details of the type of the media - usually, how it was acquired (what type of device). If images sourced from a DICOM system, are wrapped in a Media resource, then this is the modality.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $subtype
     */
    public function setSubtype($subtype)
    {
        $this->subtype = $subtype;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Identifiers associated with the image - these may include identifiers for the image itself, identifiers for the context of its collection (e.g. series ids) and context ids such as accession numbers or other workflow identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Who/What this Media is a record of.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who/What this Media is a record of.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * The person who administered the collection of the image.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The person who administered the collection of the image.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The name of the imaging view e.g. Lateral or Antero-posterior (AP).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $view
     */
    public function setView($view)
    {
        $this->view = $view;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * The name of the device / manufacturer of the device  that was used to make the recording.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $deviceName
     */
    public function setDeviceName($deviceName)
    {
        $this->deviceName = $deviceName;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Height of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Width of the image in pixels (photo/video).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * The number of frames in a photo. This is used with a multi-page fax, or an imaging acquisition context that takes multiple slices in a single image, or an animated gif. If there is more than one frame, this SHALL have a value in order to alert interface software that a multi-frame capable rendering widget is required.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPositiveInt $frames
     */
    public function setFrames($frames)
    {
        $this->frames = $frames;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The duration of the recording in seconds - for audio and video.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The actual content of the media - inline or by direct reference to the media source file.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRAttachment $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}