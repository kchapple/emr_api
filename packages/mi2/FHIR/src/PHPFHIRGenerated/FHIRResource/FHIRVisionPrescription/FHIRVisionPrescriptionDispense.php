<?php namespace PHPFHIRGenerated\FHIRResource\FHIRVisionPrescription;

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
 * An authorization for the supply of glasses and/or contact lenses to a patient.
 */
class FHIRVisionPrescriptionDispense extends FHIRBackboneElement
{
    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public $product = null;

    /**
     * The eye for which the lens applies.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    public $eye = null;

    /**
     * Lens power measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $sphere = null;

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $cylinder = null;

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public $axis = null;

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $prism = null;

    /**
     * The relative base, or reference lens edge, for the prism.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    public $base = null;

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $add = null;

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $power = null;

    /**
     * Back curvature measured in millimeters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $backCurve = null;

    /**
     * Contact lens diameter measured in millimeters.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public $diameter = null;

    /**
     * The recommended maximum wear period for the lens.
     * @var \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public $duration = null;

    /**
     * Special color or pattern.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $color = null;

    /**
     * Brand recommendations or restrictions.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $brand = null;

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $notes = null;

    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCoding
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Identifies the type of vision correction product which is required for the patient.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCoding $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * The eye for which the lens applies.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes
     */
    public function getEye()
    {
        return $this->eye;
    }

    /**
     * The eye for which the lens applies.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRVisionEyes $eye
     */
    public function setEye($eye)
    {
        $this->eye = $eye;
    }

    /**
     * Lens power measured in diopters (0.25 units).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getSphere()
    {
        return $this->sphere;
    }

    /**
     * Lens power measured in diopters (0.25 units).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $sphere
     */
    public function setSphere($sphere)
    {
        $this->sphere = $sphere;
    }

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * Power adjustment for astigmatism measured in diopters (0.25 units).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $cylinder
     */
    public function setCylinder($cylinder)
    {
        $this->cylinder = $cylinder;
    }

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRInteger
     */
    public function getAxis()
    {
        return $this->axis;
    }

    /**
     * Adjustment for astigmatism measured in integer degrees.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRInteger $axis
     */
    public function setAxis($axis)
    {
        $this->axis = $axis;
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPrism()
    {
        return $this->prism;
    }

    /**
     * Amount of prism to compensate for eye alignment in fractional units.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $prism
     */
    public function setPrism($prism)
    {
        $this->prism = $prism;
    }

    /**
     * The relative base, or reference lens edge, for the prism.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRVisionBase
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * The relative base, or reference lens edge, for the prism.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRVisionBase $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getAdd()
    {
        return $this->add;
    }

    /**
     * Power adjustment for multifocal lenses measured in diopters (0.25 units).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $add
     */
    public function setAdd($add)
    {
        $this->add = $add;
    }

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Contact lens power measured in diopters (0.25 units).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * Back curvature measured in millimeters.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getBackCurve()
    {
        return $this->backCurve;
    }

    /**
     * Back curvature measured in millimeters.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $backCurve
     */
    public function setBackCurve($backCurve)
    {
        $this->backCurve = $backCurve;
    }

    /**
     * Contact lens diameter measured in millimeters.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRDecimal
     */
    public function getDiameter()
    {
        return $this->diameter;
    }

    /**
     * Contact lens diameter measured in millimeters.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRDecimal $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * The recommended maximum wear period for the lens.
     * @return \PHPFHIRGenerated\FHIRSimpleQuantity
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * The recommended maximum wear period for the lens.
     * @param \PHPFHIRGenerated\FHIRSimpleQuantity $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * Special color or pattern.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Special color or pattern.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * Brand recommendations or restrictions.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Brand recommendations or restrictions.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes for special requirements such as coatings and lens materials.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }


}