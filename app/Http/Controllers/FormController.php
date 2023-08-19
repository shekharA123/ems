<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;


class FormController extends Controller
{
    public function createForm()
    {
        return view('form');
    }

    public function storeForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        FormSubmission::create($data);

        return redirect('/')->with('success', 'Form submitted successfully!');
    }
}
