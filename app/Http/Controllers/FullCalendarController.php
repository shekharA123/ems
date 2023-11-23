<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Event; //add Event Model
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class FullCalendarController extends Controller
{
    public function getEvent(){
        if(request()->ajax()){
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
            $link_url = (!empty($_GET["link_url"])) ? ($_GET["link_url"]) : ('');
            $events = Event::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)
                    ->get(['id','title','start', 'end','link_url']);
            return response()->json($events);
        }
        return view('calendar/fullcalendar');

    }

//     public function getEvent()
// {
//     if (request()->ajax()) {
//         $start = request('start');
//         $end = request('end');
//         $events = Event::where(function ($query) use ($start, $end) {
//             $query->where('start', '>=', $start)->where('end', '<=', $end);
//         })->orWhere(function ($query) use ($start, $end) {
//             $query->where('start', '<=', $start)->where('end', '>=', $start);
//         })->get(['id', 'title', 'start', 'end', 'link_url']);

//         return response()->json($events);
//     }

//     return view('calendar/fullcalendar');
// }
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
            'problem_sovling' => 'required|max:200',
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

        $image = $request->file('candidate_profile');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/apponitment_inter/'.$name_gen);
        $save_url = 'upload/apponitment_inter/'.$name_gen;

        $pic = $request->file('hr_profile');
        $pic_name = hexdec(uniqid()).'.'.$pic->getClientOriginalExtension();
        Image::make($pic)->resize(302,302)->save('upload/apponitment_hr/'.$pic_name);
        $image_save= 'upload/apponitment_hr/'.$pic_name;

        $startDatetime = Carbon::parse($request->start)->format('Y-m-d H:i:s');
        $endDatetime = Carbon::parse($request->end)->format('Y-m-d H:i:s');

        Event::insert([
            'title' => $request->title,
            'link_url' => $request->link_url,
            'candidate_profile' =>$save_url,
            'candidate_name' => $request->candidate_name,
            'interpersonal_skill' => $request->interpersonal_skill,
            'communication_skill' => $request->communication_skill,
            'problem_sovling' => $request->problem_sovling,
            'hr_profile' => $image_save,
            'hr_name' => $request->hr_name,
            'hr_email' => $request->hr_email,
            'instruction' => $request->instruction,
            'start' =>  $startDatetime,
            'end' =>  $endDatetime,
            'created_at' => Carbon::now(), 
        ]);

         $notification = array(
            'message' => 'Appointment Details Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('getevent')->with($notification); 
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

    public function FullCalendarUpdate(Request $request){
   
        $fullcal_id = $request->id;

        if ($request->file('image')) {

            $image = $request->file('candidate_profile');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/apponitment_inter/'.$name_gen);
            $save_url = 'upload/apponitment_inter/'.$name_gen;

            
        $pic = $request->file('hr_profile');
        $pic_name = hexdec(uniqid()).'.'.$pic->getClientOriginalExtension();
        Image::make($pic)->resize(302,302)->save('upload/apponitment_hr/'.$pic_name);
        $image_save= 'upload/apponitment_hr/'.$pic_name;

        event::findOrFail($fullcal_id)->update([

            'title' => $request->title,
            'link_url' => $request->link_url,
            'candidate_profile' =>$save_url,
            'candidate_name' => $request->candidate_name,
            'interpersonal_skill' => $request->interpersonal_skill,
            'communication_skill' => $request->communication_skill,
            'problem_sovling' => $request->problem_sovling,
            'hr_profile' => $image_save,
            'hr_name' => $request->hr_name,
            'hr_email' => $request->hr_email,
            'instruction' => $request->instruction,
            'start' =>  $startDatetime,
            'end' =>  $endDatetime,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'FullCalendar Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('calendar.all_events')->with($notification); 
             
        } else{

            event::findOrFail($fullcal_id)->update([

                'title' => $request->title,
                'link_url' => $request->link_url,
                'candidate_profile' =>$save_url,
                'candidate_name' => $request->candidate_name,
                'interpersonal_skill' => $request->interpersonal_skill,
                'communication_skill' => $request->communication_skill,
                'problem_sovling' => $request->problem_sovling,
                'hr_profile' => $image_save,
                'hr_name' => $request->hr_name,
                'hr_email' => $request->hr_email,
                'instruction' => $request->instruction,
                'start' =>  $startDatetime,
                'end' =>  $endDatetime,
                'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'FullCalendar Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('calendar.all_events')->with($notification); 

        } // End else Condition  


    } // End Method 

    


}