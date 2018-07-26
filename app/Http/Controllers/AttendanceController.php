<?php

namespace App\Http\Controllers;
use App\Attendance;
use App\User;
use Auth;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class AttendanceController extends Controller
{
    public function index(){
        $events = [];
        $data = Attendance::all()->where('email',Auth::user()->email);
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->type . " ". $value->time,
                    true,
                    new \DateTime($value->date),
                    new \DateTime($value->date),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'time/'.$value->id ,
                    ]

                );
            }
        }
        $calendar = Calendar::addEvents($events);

        return view('attendance.index',compact('calendar'));
    }
    public function store(Request $request)
    {
        $input = $request->all();

        Attendance::create($input);

        return redirect('/attendance');
    }
    public function time($id){
        $att = Attendance::query()->findOrFail($id);
        $times = Attendance::all()->where('date',$att->date)->sortByDesc($att->time);
        $userid  = User::all()->where('email',$att->email);
        $user = User::query()->findOrFail($userid);

        return view('attendance.time',compact('times','user'));
    }
}
