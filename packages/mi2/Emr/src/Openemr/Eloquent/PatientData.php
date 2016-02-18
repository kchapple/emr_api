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
        return $this->pid;
    }

    public function getFirstName()
    {
        return $this->fname;
    }

    public function getLastName()
    {
        return $this->lname;
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


}
