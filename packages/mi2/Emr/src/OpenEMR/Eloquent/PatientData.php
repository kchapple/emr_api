<?php

namespace Mi2\Emr\OpenEMR\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Mi2\Emr\Contracts\PatientInterface;

class PatientData extends Model implements PatientInterface
{
    protected $table = 'patient_data';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function getId()
    {
        return $this->id;
    }

    public function setId( $id )
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName()
    {
        return $this->fname;
    }

    public function setFirstName( $firstName )
    {
        $this->fname = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lname;
    }

    public function setLastName( $lastName )
    {
        $this->lname = $lastName;
        return $this;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function setDOB( $DOB )
    {
        $this->DOB = $DOB;
        return $this;
    }

    public function getGender()
    {
        return $this->sex;
    }

    public function setGender( $gender )
    {
        $this->sex = $gender;
        return $this;
    }

    public function getPrimaryPhone()
    {
        return $this->phone_home;
    }

    public function setPrimaryPhone( $phone )
    {
        $this->phone_home = $phone;
        return $this;
    }
}
