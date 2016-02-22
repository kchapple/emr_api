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
 * A conformance statement is a set of capabilities of a FHIR Server that may be used as a statement of actual server functionality or a statement of required or desired server implementation.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRConformance extends FHIRDomainResource
{
    /**
     * An absolute URL that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this conformance statement is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * A free text natural language name identifying the conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of this conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the conformance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceContact[]
     */
    public $contact = array();

    /**
     * The date  (and optionally time) when the conformance statement was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the conformance statement changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the conformance statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Explains why this conformance statement is needed and why it's been constrained as it has.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $requirements = null;

    /**
     * A copyright statement relating to the conformance statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the system described by the conformance statement.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementKind
     */
    public $kind = null;

    /**
     * Software that is covered by this conformance statement.  It is used when the conformance statement describes the capabilities of a particular software version, independent of an installation.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware
     */
    public $software = null;

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation
     */
    public $implementation = null;

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public $fhirVersion = null;

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUnknownContentCode
     */
    public $acceptUnknown = null;

    /**
     * A list of the formats supported by this implementation using their content types.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public $format = array();

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $profile = array();

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest[]
     */
    public $rest = array();

    /**
     * A description of the messaging capabilities of the solution.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging[]
     */
    public $messaging = array();

    /**
     * A document definition.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument[]
     */
    public $document = array();

    /**
     * An absolute URL that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this conformance statement is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this conformance statement when it is referenced in a specification, model, design or an instance. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this conformance statement is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the conformance statement when it is referenced in a specification, model, design or instance. This is an arbitrary value managed by the profile author manually and the value should be a timestamp.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * A free text natural language name identifying the conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A free text natural language name identifying the conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The status of this conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this conformance statement is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
    }

    /**
     * The name of the individual or organization that published the conformance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the conformance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceContact[] $contact
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
    }

    /**
     * The date  (and optionally time) when the conformance statement was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the conformance statement changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date  (and optionally time) when the conformance statement was published. The date must change when the business version changes, if it does, and it must change if the status code changes. In addition, it should change when the substantive content of the conformance statement changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the conformance statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A free text natural language description of the conformance statement and its use. Typically, this is used when the conformance statement describes a desired rather than an actual solution, for example as a formal expression of requirements as part of an RFP.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Explains why this conformance statement is needed and why it's been constrained as it has.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Explains why this conformance statement is needed and why it's been constrained as it has.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $requirements
     */
    public function setRequirements($requirements)
    {
        $this->requirements = $requirements;
    }

    /**
     * A copyright statement relating to the conformance statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the system described by the conformance statement.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the conformance statement and/or its contents. Copyright statements are generally legal restrictions on the use and publishing of the details of the system described by the conformance statement.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementKind
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The way that this statement is intended to be used, to describe an actual running instance of software, a particular product (kind not instance of software) or a class of implementation (e.g. a desired purchase).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRConformanceStatementKind $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * Software that is covered by this conformance statement.  It is used when the conformance statement describes the capabilities of a particular software version, independent of an installation.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * Software that is covered by this conformance statement.  It is used when the conformance statement describes the capabilities of a particular software version, independent of an installation.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceSoftware $software
     */
    public function setSoftware($software)
    {
        $this->software = $software;
    }

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Identifies a specific implementation instance that is described by the conformance statement - i.e. a particular installation, rather than the capabilities of a software program.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceImplementation $implementation
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * The version of the FHIR specification on which this conformance statement is based.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRId $fhirVersion
     */
    public function setFhirVersion($fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
    }

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUnknownContentCode
     */
    public function getAcceptUnknown()
    {
        return $this->acceptUnknown;
    }

    /**
     * A code that indicates whether the application accepts unknown elements or extensions when reading resources.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUnknownContentCode $acceptUnknown
     */
    public function setAcceptUnknown($acceptUnknown)
    {
        $this->acceptUnknown = $acceptUnknown;
    }

    /**
     * A list of the formats supported by this implementation using their content types.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * A list of the formats supported by this implementation using their content types.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode[] $format
     */
    public function addFormat($format)
    {
        $this->format[] = $format;
    }

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * A list of profiles that represent different use cases supported by the system. For a server, "supported by the system" means the system hosts/produces a set of resources that are conformant to a particular profile, and allows clients that use its services to search using this profile and to find appropriate data. For a client, it means the system will search by this profile and process data according to the guidance implicit in the profile. See further discussion in [Using Profiles]{profiling.html#profile-uses}.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $profile
     */
    public function addProfile($profile)
    {
        $this->profile[] = $profile;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * A definition of the restful capabilities of the solution, if any.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceRest[] $rest
     */
    public function addRest($rest)
    {
        $this->rest[] = $rest;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * A description of the messaging capabilities of the solution.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceMessaging[] $messaging
     */
    public function addMessaging($messaging)
    {
        $this->messaging[] = $messaging;
    }

    /**
     * A document definition.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * A document definition.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConformance\FHIRConformanceDocument[] $document
     */
    public function addDocument($document)
    {
        $this->document[] = $document;
    }


}