<?php namespace PHPFHIRGenerated\FHIRResource\FHIRTestScript;

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
 * TestScript is a resource that specifies a suite of tests against a FHIR server implementation to determine compliance against the FHIR specification.
 */
class FHIRTestScriptOperation extends FHIRBackboneElement
{
    /**
     * Server interaction or operation type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * The type of the resource.  See http://hl7-fhir.github.io/resourcelist.html.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $resource = null;

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $label = null;

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public $accept = null;

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public $contentType = null;

    /**
     * Which server to perform the operation on.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $destination = null;

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $encodeRequestUrl = null;

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $params = null;

    /**
     * Header elements would be used to set HTTP headers.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public $requestHeader = array();

    /**
     * The fixture id (maybe new) to map to the response.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $responseId = null;

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $sourceId = null;

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $targetId = null;

    /**
     * Complete request URL.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $url = null;

    /**
     * Server interaction or operation type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Server interaction or operation type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The type of the resource.  See http://hl7-fhir.github.io/resourcelist.html.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The type of the resource.  See http://hl7-fhir.github.io/resourcelist.html.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * The label would be used for tracking/logging purposes by test engines.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description would be used by test engines for tracking and reporting purposes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public function getAccept()
    {
        return $this->accept;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Accept' header.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContentType $accept
     */
    public function setAccept($accept)
    {
        $this->accept = $accept;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContentType
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * The content-type or mime-type to use for RESTful operation in the 'Content-Type' header.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContentType $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * Which server to perform the operation on.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Which server to perform the operation on.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $destination
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    }

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getEncodeRequestUrl()
    {
        return $this->encodeRequestUrl;
    }

    /**
     * Whether or not to implicitly send the request url in encoded format. The default is true to match the standard RESTful client behavior. Set to false when communicating with a server that does not support encoded url paths.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $encodeRequestUrl
     */
    public function setEncodeRequestUrl($encodeRequestUrl)
    {
        $this->encodeRequestUrl = $encodeRequestUrl;
    }

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Path plus parameters after [type].  Used to set parts of the request URL explicitly.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $params
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader[]
     */
    public function getRequestHeader()
    {
        return $this->requestHeader;
    }

    /**
     * Header elements would be used to set HTTP headers.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRTestScript\FHIRTestScriptRequestHeader[] $requestHeader
     */
    public function addRequestHeader($requestHeader)
    {
        $this->requestHeader[] = $requestHeader;
    }

    /**
     * The fixture id (maybe new) to map to the response.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getResponseId()
    {
        return $this->responseId;
    }

    /**
     * The fixture id (maybe new) to map to the response.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $responseId
     */
    public function setResponseId($responseId)
    {
        $this->responseId = $responseId;
    }

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * The id of the fixture used as the body of a PUT or POST request.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $sourceId
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    }

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Id of fixture used for extracting the [id],  [type], and [vid] for GET requests.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $targetId
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;
    }

    /**
     * Complete request URL.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Complete request URL.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }


}