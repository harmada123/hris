<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{


    public function TimeLog(){
        $time = Carbon::now()->toTimeString();
        return view('hr.timelog')->with(compact('time'));
    }



}
