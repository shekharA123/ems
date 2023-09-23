<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Event; //add Event Model

class FullCalendarController extends Controller
{
    public function getEvent(){
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                    ->get(['id','title','start', 'end']);
            return response()->json($events);
        }
        return view('calendar/fullcalendar');

    }
    public function createEvent(Request $request){
        $data = $request->except('_token');
        $events = Event::insert($data);
        return response()->json($events);
    }


    public function deleteEvent($id){

        event::findOrFail($id)->delete();

         $notification = array(
            'message' => 'event Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function allevents(){

        $event = event::latest()->get();

        return view('calendar/all_events',compact('event'));
    }

    public function edit($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }

        return view('calendar/edit_events', compact('event'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'event' => 'required|string|max:255',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
        ]);

        $event = Event::find($id);

        if (!$event) {
            return redirect()->back()->with('error', 'Event not found.');
        }

        $event->title = $request->input('event');
        $event->start = $request->input('start');
        $event->end = $request->input('end');
        $event->save();

        return redirect()->route('calendar.all_events')->with('success', 'Event updated successfully.');
    }


}






