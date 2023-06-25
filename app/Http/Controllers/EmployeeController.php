<?php

namespace App\Http\Controllers;

use App\Http\Traits\ApiCall;
use App\Library\Employee;
use App\Library\EmployeeClass;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    use ApiCall;
    
    public function displayEmployees(Request $request){
        $employees = $this->callEndpoint($this->employeesEndpoint);
        return view('employees')->with(compact('employees'));
    }
    
    public function displayEmployeeClasses(Request $request){
        $employeeId = $request->employeeId;
        $emp = new Employee($employeeId);
        $employee = $emp->getEmployeeData();
        return view('employee')->with(compact('employee'));
    }
    
    public function displayClass(Request $request){
        $classId = $request->classId;
        $class = new EmployeeClass($classId);
        $classData = $class->getClassData();
        return view('class')->with(compact('classData'));
    }
    
    
    
}
