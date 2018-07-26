<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;

class SearchController extends Controller
{
    public function index(){
        $users = User::all();
        return view('hr.search',compact('users'));
    }
    public function get_datatable(){
        $employee = Employee::join('users','employees.user_id','=','users.id')->select(['employees.id','users.email','users.name','users.lastname','employees.skill']);
        return DataTables::of($employee)->make(true);
    }

}
