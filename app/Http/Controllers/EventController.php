<?php

namespace App\Http\Controllers;

use App\Event;
use App\Leave;
use Illuminate\Http\Request;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Leave::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->reason . " " . $value->email,
                    true,
                    new \DateTime($value->start),
                    new \DateTime($value->end.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'leave/'.$value->id. '/edit',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalender', compact('calendar'));
    }
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('hr.event.edit')->with(compact('event'));
    }

}
