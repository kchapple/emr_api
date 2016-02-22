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
 * A definition of a condition.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRConditionDefinition extends FHIRDomainResource
{
    /**
     * An absolute URL that is used to identify this condition definition. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this condition definition is (or will be) published.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $url = null;

    /**
     * Formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * The identifier that is used to identify this version of the condition definition when it is referenced in a StructureDefinition, Questionnaire or instance. This is an arbitrary value managed by the definition author manually.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $version = null;

    /**
     * The term used by humans to refer to the condition definition.  Should ideally be unique within the context in which the condition definition is expected to be used.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $name = null;

    /**
     * The status of the condition definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * A flag to indicate that this search data elemnt definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $experimental = null;

    /**
     * The name of the individual or organization that published the condition definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $publisher = null;

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRConditionDefinition\FHIRConditionDefinitionContact[]
     */
    public $contact = array();

    /**
     * The date that this version of the Condition Definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. in addition, it should change when the substantiative content of the condition definition  changes.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $date = null;

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of condition definition definitions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $useContext = array();

    /**
     * A copyright statement relating to the definition of the condition definition. Copyright statements are generally legal restrictions on the use and publishing of the details of the definition of the condition definition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $copyright = null;

    /**
     * The seriousness of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $severity = null;

    /**
     * The temporal Occurance of this condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $occurance = array();

    /**
     * Where on the body condition arises.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $findingSite = array();

    /**
     * Common morphological consequences of the condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $morphology = array();

    /**
     * Common causes of this condition, whether other conditions, substances, medications etc (still do the etc).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $causedBy = array();

    /**
     * Common co-morbidities of this condition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $associated = array();

    /**
     * An absolute URL that is used to identify this condition definition. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this condition definition is (or will be) published.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * An absolute URL that is used to identify this condition definition. This SHALL be a URL, SHOULD be globally unique, and SHOULD be an address at which this condition definition is (or will be) published.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Formal identifier that is used to identify this condition definition when it is represented in other formats, or referenced in a specification, model, design or an instance.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * The identifier that is used to identify this version of the condition definition when it is referenced in a StructureDefinition, Questionnaire or instance. This is an arbitrary value managed by the definition author manually.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The identifier that is used to identify this version of the condition definition when it is referenced in a StructureDefinition, Questionnaire or instance. This is an arbitrary value managed by the definition author manually.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * The term used by humans to refer to the condition definition.  Should ideally be unique within the context in which the condition definition is expected to be used.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The term used by humans to refer to the condition definition.  Should ideally be unique within the context in which the condition definition is expected to be used.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The status of the condition definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the condition definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * A flag to indicate that this search data elemnt definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * A flag to indicate that this search data elemnt definition is authored for testing purposes (or education/evaluation/marketing), and is not intended to be used for genuine usage.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $experimental
     */
    public function setExperimental($experimental)
    {
        $this->experimental = $experimental;
    }

    /**
     * The name of the individual or organization that published the condition definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The name of the individual or organization that published the condition definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRConditionDefinition\FHIRConditionDefinitionContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Contacts to assist a user in finding and communicating with the publisher.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRConditionDefinition\FHIRConditionDefinitionContact[] $contact
     */
    public function addContact($contact)
    {
        $this->contact[] = $contact;
    }

    /**
     * The date that this version of the Condition Definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. in addition, it should change when the substantiative content of the condition definition  changes.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * The date that this version of the Condition Definition was published. The date must change when the business version changes, if it does, and it must change if the status code changes. in addition, it should change when the substantiative content of the condition definition  changes.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of condition definition definitions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getUseContext()
    {
        return $this->useContext;
    }

    /**
     * The content was developed with a focus and intent of supporting the contexts that are listed. These terms may be used to assist with indexing and searching of condition definition definitions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $useContext
     */
    public function addUseContext($useContext)
    {
        $this->useContext[] = $useContext;
    }

    /**
     * A copyright statement relating to the definition of the condition definition. Copyright statements are generally legal restrictions on the use and publishing of the details of the definition of the condition definition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * A copyright statement relating to the definition of the condition definition. Copyright statements are generally legal restrictions on the use and publishing of the details of the definition of the condition definition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $copyright
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;
    }

    /**
     * The seriousness of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * The seriousness of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $severity
     */
    public function setSeverity($severity)
    {
        $this->severity = $severity;
    }

    /**
     * The temporal Occurance of this condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOccurance()
    {
        return $this->occurance;
    }

    /**
     * The temporal Occurance of this condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $occurance
     */
    public function addOccurance($occurance)
    {
        $this->occurance[] = $occurance;
    }

    /**
     * Where on the body condition arises.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getFindingSite()
    {
        return $this->findingSite;
    }

    /**
     * Where on the body condition arises.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $findingSite
     */
    public function addFindingSite($findingSite)
    {
        $this->findingSite[] = $findingSite;
    }

    /**
     * Common morphological consequences of the condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getMorphology()
    {
        return $this->morphology;
    }

    /**
     * Common morphological consequences of the condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $morphology
     */
    public function addMorphology($morphology)
    {
        $this->morphology[] = $morphology;
    }

    /**
     * Common causes of this condition, whether other conditions, substances, medications etc (still do the etc).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getCausedBy()
    {
        return $this->causedBy;
    }

    /**
     * Common causes of this condition, whether other conditions, substances, medications etc (still do the etc).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $causedBy
     */
    public function addCausedBy($causedBy)
    {
        $this->causedBy[] = $causedBy;
    }

    /**
     * Common co-morbidities of this condition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAssociated()
    {
        return $this->associated;
    }

    /**
     * Common co-morbidities of this condition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $associated
     */
    public function addAssociated($associated)
    {
        $this->associated[] = $associated;
    }


}