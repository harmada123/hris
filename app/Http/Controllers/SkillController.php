<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\User;

class SkillController extends Controller
{
    public function skill($id){
        $user  = User::findOrFail($id);
        $employee = Employee::findOrFail($id);
        return view('hr.skill')->with(compact('user','employee'));
    }
    public function profile($id){
        $user  = User::findOrFail($id);
        $employee = Employee::findOrFail($id);
        return view('hr.profile')->with(compact('user','employee'));
    }


}
