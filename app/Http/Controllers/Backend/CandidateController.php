<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class CandidateController extends Controller
{
    public function AllCandidate(){

        $candidate = Candidate::latest()->get();

        return view('backend.candidate.all_candidate',compact('candidate'));
    } // end method


    public function AddCandidate(){
        return view('backend.candidate.add_candidate');
    } // end method


    public function StoreCandidate(Request $request){
        $validateData = $request->validate([
            'candidate_name' => 'required|max:200',
            'rating' => 'required', 
            'stages' => 'required', 
            'applied_date' => 'required',
            'owner' => 'required',
        ],[
            'candidate_name.required' => 'This Candidate Name Field Is Required',
        ]);

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/candidate/'.$name_gen);
        $save_url = 'upload/candidate/'.$name_gen;


        $owner_images = $request->file('owner_image');
        $name_gen_owner = hexdec(uniqid()).'.'.$owner_images->getClientOriginalExtension();
        Image::make($owner_images)->resize(320,320)->save('upload/owner/'.$name_gen_owner);
        $image_save = 'upload/owner/'.$name_gen_owner;

        Candidate::insert([

            'candidate_name' => $request->candidate_name,
              'email' => $request->email,
             'rating' => $request->rating,
             'stages' => $request->stages,
             'applied_date' => $request->applied_date,
             'owner' => $request->owner,
             'owner_image' => $image_save,
            // 'experience' => $request->experience,
            // 'salary' => $request->salary,
            // 'vacation' => $request->vacation,
            // 'city' => $request->city,
             'image' => $save_url,
            
            'created_at' => Carbon::now(), 

        ]);

        $filt=Candidate::when($request->stages !=null,function($candidate) use ($request){
            return $candidate->where('status_message',$request->stages);
        });
        $notification = array(
            'message' => 'Candidate Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.candidate')->with($notification); 
    } //end method


    public function EditCandidate($id){
        $candidate = Candidate::findOrFail($id);
        return view('backend.candidate.edit_candidate',compact('candidate'));
    }// end method


    public function UpdateCandidate(Request $request){
        $candidate_id = $request->id;

        Candidate::findOrFail($candidate_id)->update([

            'candidate_name' => $request->candidate_name,
             'rating' => $request->rating,
             'stages' => $request->stages,
             'applied_date' => $request->applied_date,
             'owner' => $request->owner,
            'created_at' => Carbon::now(), 

        ]);

        $filt=Candidate::when($request->stages !=null,function($q) use ($request){
            return $q->where('status_message',$request->stages);
        });
         $notification = array(
            'message' => 'Candidate Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.candidate')->with($notification); 
    }//end method


    public function DeleteCandidate($id){

        Candidate::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Candidate Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }//end method

    public function HiringCandidate($id){
        //  $candidate = Candidate::findOrFail($id)->get();
        $candidate = Candidate::latest()->get();
        
        return view('backend.candidate.hiring_candidate',compact('candidate'));
    } // end method
}
