<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Employee;
use Rap2hpoutre\FastExcel\FastExcel;
use App\User;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    public function index(){
        return view('attendance.report');
    }
    public function downloadExcel(Request $request){

        $datefrom = $request->from;
        $dateto = $request->to;
        return (new FastExcel(Attendance::whereBetween('date',array($datefrom,$dateto))->get(['email'=>'Email','type'=>'Type','time'=>'Time','date'=>'Date','ip'=>'IP'])))->download(time('y-m-d').'report.xlsx');
    }
    public function downloadUserExcel(Request $request){

        $user = $request->department;

        ;

        return (new FastExcel(Employee::join('users','employees.user_id','=','users.id')
            ->select([
                'employees.id',
                'users.email',
                'users.name',
                'users.lastname',
                'employees.skill',
                'employees.address',
                'employees.contact_no',
                'employees.salary',
            ])->where('department_id',$user)->get()))->download(time('y-m-d').'report.xlsx');
    }

}
