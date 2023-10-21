<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Event; //add Event Model
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

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

    public function FullCalendar(){
        return view('calendar.fullcalendar');
    } // End Method 

    public function CalendarStore(Request $request){

        $validateData = $request->validate([
            'title' => 'required|max:200',
            'link_url' => 'required|max:300',
            'candidate_profile' => 'required',
            'candidate_name' => 'required|max:400',
            'interpersonal_skill' => 'required|max:200',
            'communication_skill' => 'required|max:200',
            'problem_sovling	' => 'required|max:200',
            'hr_name' => 'required|max:200',
            'hr_email' => 'required|max:200',
            'instruction' => 'required|max:200',
            'start' => 'required',
            'end' => 'required',
        ],
        
        [
            'title.required' => 'This Appointment Title Field Is Required',
        ]

    );

        $image1 = $request->file('candidate_profile');
        $name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
        Image::make($image1)->resize(300,300)->save('upload/apponitment_inter/'.$name_gen1);
        $save_url1 = 'upload/apponitment_inter/'.$name_gen1;

        $image2 = $request->file('hr_profile');
        $name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
        Image::make($image2)->resize(300,300)->save('upload/apponitment_hr/'.$name_gen2);
        $save_url2 = 'upload/apponitment_hr/'.$name_gen2;

        Event::insert([
            'title' => $request->title,
            'link_url' => $request->link_url,
            'candidate_profile' =>$save_url,
            'candidate_name' => $request->candidate_name,
            'interpersonal_skill' => $request->interpersonal_skill,
            'communication_skill' => $request->communication_skill,
            'problem_sovling' => $request->problem_sovling,
            'hr_profile' => $request->$save_url,
            'hr_name' => $request->hr_name,
            'email' => $request->email,
            'instruction' => $request->instruction,
            'start' => $request->start,
            'end' => $request->end,
            'created_at' => Carbon::now(), 
        ]);

         $notification = array(
            'message' => 'Appointment Details Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('getevent/')->with($notification); 
    } // End Method 


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






