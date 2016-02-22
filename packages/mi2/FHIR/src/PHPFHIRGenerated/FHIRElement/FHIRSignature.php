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
 * A digital signature along with supporting context. The signature may be electronic/cryptographic in nature, or a graphical image representing a hand-written signature, or a signature process. Different Signature approaches have different utilities.
 * If the element is present, it must have a value for at least one of the defined elements, an @id referenced from the Narrative, or extensions
 */
class FHIRSignature extends FHIRElement
{
    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public $type = array();

    /**
     * When the digital signature was signed.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $when = null;

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $whoUri = null;

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $whoReference = null;

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $contentType = null;

    /**
     * The base64 encoding of the Signature content.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public $blob = null;

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * An indication of the reason that the entity signed this document. This may be explicitly included as part of the signature information and can be used when determining accountability for various actions concerning the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding[] $type
     */
    public function addType($type)
    {
        $this->type[] = $type;
    }

    /**
     * When the digital signature was signed.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * When the digital signature was signed.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getWhoUri()
    {
        return $this->whoUri;
    }

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $whoUri
     */
    public function setWhoUri($whoUri)
    {
        $this->whoUri = $whoUri;
    }

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getWhoReference()
    {
        return $this->whoReference;
    }

    /**
     * A reference to an application-usable description of the person that signed the certificate (e.g. the signature used their private key). (choose any one of who*, but only one)
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $whoReference
     */
    public function setWhoReference($whoReference)
    {
        $this->whoReference = $whoReference;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * A mime type that indicates the technical format of the signature. Important mime types are application/signature+xml for X ML DigSig, application/jwt for JWT, and image/* for a graphical image of a signature.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * The base64 encoding of the Signature content.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * The base64 encoding of the Signature content.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBase64Binary $blob
     */
    public function setBlob($blob)
    {
        $this->blob = $blob;
    }


}