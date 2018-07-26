<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeListController extends Controller
{
    public function employeepayslip($id){

        return view('payroll.employeepayslip',compact('id'));

    }
    public function get_datatable($id)
    {
        $employee = Employee::join('users','employees.user_id','=','users.id')->select(['employees.id','users.email','users.name','users.lastname','employees.skill'])->where('department_id',$id);
        return DataTables::of($employee)->make(true);
    }
}
