<?php

namespace App\Library;

use App\Http\Traits\ApiCall;

class Employee
{
    use ApiCall;
    
    private $employeeId;

    public function __construct($employeeId)
    {
        $this->employeeId = $employeeId;
    }
    
    public function getEmployeeData(){
        $employee = $this->callEndpoint($this->employeesEndpoint . '/' . $this->employeeId . '/?include=classes');
        return $employee;
    }
    
}
