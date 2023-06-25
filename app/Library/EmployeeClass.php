<?php

namespace App\Library;

use App\Http\Traits\ApiCall;

class EmployeeClass
{
    use ApiCall;

    private $classId;

    public function __construct($classId)
    {
        $this->classId = $classId;
    }

    public function getClassData(){
        $classData = $this->callEndpoint($this->classEndpoint . '/' . $this->classId . '/?include=students,lessons');
        return $classData;
    }
    


}
