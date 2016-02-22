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
 * Describes the characteristics, operational status and capabilities of a medical-related component of a medical device.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceComponent extends FHIRDomainResource
{
    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public $lastSystemChange = null;

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $parent = null;

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $operationalStatus = array();

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $parameterGroup = null;

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRMeasmnt_Principle
     */
    public $measurementPrinciple = null;

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @var \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public $productionSpecification = array();

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public $languageCode = null;

    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Describes the specific component type as defined in the object-oriented or metric nomenclature partition.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Describes the local assigned unique identification by the software. For example: handle ID.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInstant
     */
    public function getLastSystemChange()
    {
        return $this->lastSystemChange;
    }

    /**
     * Describes the timestamp for the most recent system change which includes device configuration or setting change.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInstant $lastSystemChange
     */
    public function setLastSystemChange($lastSystemChange)
    {
        $this->lastSystemChange = $lastSystemChange;
    }

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Describes the link to the source Device that contains administrative device information such as manufacture, serial number, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Describes the link to the parent resource. For example: Channel is linked to its VMD parent.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getOperationalStatus()
    {
        return $this->operationalStatus;
    }

    /**
     * Indicates current operational status of the device. For example: On, Off, Standby, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[] $operationalStatus
     */
    public function addOperationalStatus($operationalStatus)
    {
        $this->operationalStatus[] = $operationalStatus;
    }

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getParameterGroup()
    {
        return $this->parameterGroup;
    }

    /**
     * Describes the parameter group supported by the current device component that is based on some nomenclature, e.g. cardiovascular.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $parameterGroup
     */
    public function setParameterGroup($parameterGroup)
    {
        $this->parameterGroup = $parameterGroup;
    }

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRMeasmnt_Principle
     */
    public function getMeasurementPrinciple()
    {
        return $this->measurementPrinciple;
    }

    /**
     * Describes the physical principle of the measurement. For example: thermal, chemical, acoustical, etc.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRMeasmnt_Principle $measurementPrinciple
     */
    public function setMeasurementPrinciple($measurementPrinciple)
    {
        $this->measurementPrinciple = $measurementPrinciple;
    }

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @return \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[]
     */
    public function getProductionSpecification()
    {
        return $this->productionSpecification;
    }

    /**
     * Describes the production specification such as component revision, serial number, etc.
     * @param \PHPFHIRGenerated\FHIRResource\FHIRDeviceComponent\FHIRDeviceComponentProductionSpecification[] $productionSpecification
     */
    public function addProductionSpecification($productionSpecification)
    {
        $this->productionSpecification[] = $productionSpecification;
    }

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Describes the language code for the human-readable text string produced by the device. This language code will follow the IETF language tag. Example: en-US.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $languageCode
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }


}