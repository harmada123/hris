<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;

class UpdateUserController extends Controller
{
    public function index(){

    }
    public function updateUser($id){
        $user = User::find($id);
        return view('hr.updateinactive',compact('user'));
    }
    public function update(Request $request,$id){
        $user = User::findorFail($id);
        $input = $request->all();
        $user->update($input);
        echo $user;
        Employee::create(['user_id'=>$user->id]);
        return redirect('/inactive');
    }
}
