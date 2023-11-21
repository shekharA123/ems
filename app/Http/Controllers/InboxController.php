<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Inbox;

class InboxController extends Controller
{
    //
    public function AllInbox(){
        $allCandidate = Event::latest()->get();
     return view('inbox.all_inbox',compact('allCandidate'));
    }
}
