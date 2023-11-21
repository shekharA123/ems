<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Inbox;

class InboxController extends Controller
{
    //
    public function AllInbox(){
        return view('inbox.all_inbox');
        
    }

    
    public function AllRecruitment(Request $request){
        $query = $request->input('query');
        $allCandidateQuery = Event::latest();
        // Apply search filter if there's a query
        if($query){
            $allCandidateQuery->where('candidate_name', 'like', "%$query%");
        }
        // Get the filtered or all candidates based on the presence of a query
        $allCandidate = $allCandidateQuery->get();
        return view('inbox.recruitment', compact('allCandidate'));
    }
    
}
