<?php namespace PHPFHIRGenerated\FHIRResource\FHIRProvenance;

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
 * Provenance of a resource is a record that describes entities and processes involved in producing and delivering or otherwise influencing that resource. Provenance provides a critical foundation for assessing authenticity, enabling trust, and allowing reproducibility. Provenance assertions are a form of contextual metadata and can themselves become important records with their own provenance. Provenance statement indicates clinical significance in terms of confidence in authenticity, reliability, and trustworthiness, integrity, and stage in lifecycle (e.g. Document Completion - has the artifact been legally authenticated), all of which may impact security, privacy, and trust policies.
 */
class FHIRProvenanceEntity extends FHIRBackboneElement
{
    /**
     * How the entity was used during the activity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole
     */
    public $role = null;

    /**
     * The type of the entity. If the entity is a resource, then this is a resource type.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $type = null;

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public $reference = null;

    /**
     * Human-readable description of the entity.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRProvenance\FHIRProvenanceAgent
     */
    public $agent = null;

    /**
     * How the entity was used during the activity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * How the entity was used during the activity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRProvenanceEntityRole $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * The type of the entity. If the entity is a resource, then this is a resource type.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the entity. If the entity is a resource, then this is a resource type.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Identity of the  Entity used. May be a logical or physical uri and maybe absolute or relative.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRUri $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * Human-readable description of the entity.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Human-readable description of the entity.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRProvenance\FHIRProvenanceAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * The entity is attributed to an agent to express the agent's responsibility for that entity, possibly along with other agents. This description can be understood as shorthand for saying that the agent was responsible for the activity which generated the entity.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRProvenance\FHIRProvenanceAgent $agent
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;
    }


}