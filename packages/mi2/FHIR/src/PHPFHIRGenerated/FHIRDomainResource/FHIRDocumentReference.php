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
 * A reference to a document .
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDocumentReference extends FHIRDomainResource
{
    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $masterIdentifier = null;

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = array();

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $class = null;

    /**
     * Identifies who is responsible for adding the information to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $author = array();

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $custodian = null;

    /**
     * Which person or organization authenticates that this document is valid.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $authenticator = null;

    /**
     * When the document was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * When the document reference was created.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $indexed = null;

    /**
     * The status of this document reference.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public $status = null;

    /**
     * The status of the underlying document.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $docStatus = null;

    /**
     * Relationships that this document has with other document references that already exist.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public $relatesTo = array();

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $securityLabel = array();

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    public $content = array();

    /**
     * The clinical context in which the document was prepared.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public $context = null;

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * Document identifier as assigned by the source of the document. This identifier is specific to this version of the document. This unique identifier may be used elsewhere to identify this version of the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $masterIdentifier
     */
    public function setMasterIdentifier($masterIdentifier)
    {
        $this->masterIdentifier = $masterIdentifier;
    }

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Other identifiers associated with the document, including version independent identifiers.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[] $identifier
     */
    public function addIdentifier($identifier)
    {
        $this->identifier[] = $identifier;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Who or what the document is about. The document can be about a person, (patient or healthcare practitioner), a device (e.g. a machine) or even a group of subjects (such as a document about a herd of farm animals, or a set of patients that share a common exposure).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Specifies the particular kind of document referenced  (e.g. History and Physical, Discharge Summary, Progress Note). This usually equates to the purpose of making the document referenced.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * A categorization for the type of document referenced - helps for indexing and searching. This may be implied by or derived from the code specified in the DocumentReference.type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * Identifies who is responsible for adding the information to the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Identifies who is responsible for adding the information to the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference[] $author
     */
    public function addAuthor($author)
    {
        $this->author[] = $author;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * Identifies the organization or group who is responsible for ongoing maintenance of and access to the document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $custodian
     */
    public function setCustodian($custodian)
    {
        $this->custodian = $custodian;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * Which person or organization authenticates that this document is valid.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $authenticator
     */
    public function setAuthenticator($authenticator)
    {
        $this->authenticator = $authenticator;
    }

    /**
     * When the document was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * When the document was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * When the document reference was created.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getIndexed()
    {
        return $this->indexed;
    }

    /**
     * When the document reference was created.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $indexed
     */
    public function setIndexed($indexed)
    {
        $this->indexed = $indexed;
    }

    /**
     * The status of this document reference.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this document reference.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCode $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * The status of the underlying document.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * The status of the underlying document.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $docStatus
     */
    public function setDocStatus($docStatus)
    {
        $this->docStatus = $docStatus;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * Relationships that this document has with other document references that already exist.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceRelatesTo[] $relatesTo
     */
    public function addRelatesTo($relatesTo)
    {
        $this->relatesTo[] = $relatesTo;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Human-readable description of the source document. This is sometimes known as the "title".
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSecurityLabel()
    {
        return $this->securityLabel;
    }

    /**
     * A set of Security-Tag codes specifying the level of privacy/security of the Document. Note that DocumentReference.meta.security contains the security labels of the "reference" to the document, while DocumentReference.securityLabel contains a snapshot of the security labels on the document the reference refers to.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $securityLabel
     */
    public function addSecurityLabel($securityLabel)
    {
        $this->securityLabel[] = $securityLabel;
    }

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * The document and format referenced. There may be multiple content element repetitions, each with a different format.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContent[] $content
     */
    public function addContent($content)
    {
        $this->content[] = $content;
    }

    /**
     * The clinical context in which the document was prepared.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * The clinical context in which the document was prepared.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDocumentReference\FHIRDocumentReferenceContext $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }


}