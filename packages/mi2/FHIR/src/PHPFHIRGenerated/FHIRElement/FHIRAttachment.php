<?php namespace PHPFHIRGenerated\FHIRElement;

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
 * For referring to data content defined in other formats.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRAttachment extends FHIRElement
{
    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $language = null;

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $data = null;

    /**
     * An alternative location where the data can be accessed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The number of bytes of data that make up this attachment.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public $size = null;

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $hash = null;

    /**
     * A label or set of text to display in place of the data.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The date that the attachment was first created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $creation = null;

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * Identifies the type of the data in the attachment and allows a method to be chosen to interpret or render the data. Includes mime type parameters such as charset where appropriate.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The human language of the content. The value can be any valid value according to BCP 47.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The actual data of the attachment - a sequence of bytes. In XML, represented using base64.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * An alternative location where the data can be accessed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An alternative location where the data can be accessed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * The number of bytes of data that make up this attachment.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The number of bytes of data that make up this attachment.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnsignedInt $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * The calculated hash of the data using SHA-1. Represented using base64.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $hash
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    /**
     * A label or set of text to display in place of the data.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A label or set of text to display in place of the data.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * The date that the attachment was first created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * The date that the attachment was first created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $creation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }


}