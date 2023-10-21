<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\candidate;

class CandidateController extends Controller
{
    public function AllCandidate(){

        $candidate= candidate::latest()->get();
        return view('backend.candidate.all_candidate',compact('candidate'));
    }  //end method
}
