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
 * A structured set of questions and their answers. The questions are ordered and grouped into coherent subsets, corresponding to the structure of the grouping of the underlying questions.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRQuestionnaireResponse extends FHIRDomainResource
{
    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $questionnaire = null;

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public $status = null;

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $author = null;

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $authored = null;

    /**
     * The person who answered the questions about the subject.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $encounter = null;

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup
     */
    public $group = null;

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * A business identifier assigned to a particular completed (or partially completed) questionnaire.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Indicates the Questionnaire resource that defines the form for which answers are being provided.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $questionnaire
     */
    public function setQuestionnaire($questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The lifecycle status of the questionnaire response as a whole.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRQuestionnaireResponseStatus $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * The subject of the questionnaire response.  This could be a patient, organization, practitioner, device, etc.  This is who/what the answers apply to, but is not necessarily the source of information.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Person who received the answers to the questions in the QuestionnaireResponse and recorded them in the system.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * The date and/or time that this version of the questionnaire response was authored.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $authored
     */
    public function setAuthored($authored)
    {
        $this->authored = $authored;
    }

    /**
     * The person who answered the questions about the subject.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * The person who answered the questions about the subject.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * Encounter during which this set of questionnaire response were collected. When there were multiple encounters, this is the one considered most relevant to the context of the answers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $encounter
     */
    public function setEncounter($encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * A group of questions to a possibly similarly grouped set of questions in the questionnaire response.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRQuestionnaireResponse\FHIRQuestionnaireResponseGroup $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }


}