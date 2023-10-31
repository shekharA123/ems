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

        Candidate::insert([

            'candidate_name' => $request->candidate_name,
             'rating' => $request->rating,
             'stages' => $request->stages,
             'applied_date' => $request->applied_date,
             'owner' => $request->owner,
            // 'experience' => $request->experience,
            // 'salary' => $request->salary,
            // 'vacation' => $request->vacation,
            // 'city' => $request->city,
            // 'image' => $save_url,
            
            'created_at' => Carbon::now(), 

        ]);

        $notification = array(
            'message' => 'Candidate Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.candidate')->with($notification); 
    } //end method
}
