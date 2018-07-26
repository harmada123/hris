<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Resume;
use App\User;

class EmployeeController extends Controller
{
    public function index(){

    }
    public function edit($id){


    }
    public function update(Request $request,$id){
        $emp = Employee::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('resume_id')){
            $name = time().$file->getClientOriginalName();
            $file->move('resume',$name);
            $resume = Resume::create(['file'=>$name]);
            $input['resume_id'] = $resume->id;
        }
        $emp->update($input);
        return redirect('hr');
    }

    public function myprofile($id){
        $emp = Employee::findOrFail($id);
        $user = User::findOrFail($id);
        return view('hr.myprofile')->with(compact('emp','user'));
    }
}
