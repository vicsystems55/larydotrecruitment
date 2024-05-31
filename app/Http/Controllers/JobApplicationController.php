<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Mail\JobApplicationMail;
use Illuminate\Support\Facades\Mail;

class JobApplicationController extends Controller
{
    //

    public function apply(Request $request){

        // return $request->all();

        $request->validate([

            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'position' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);


        $application = JobApplication::create([

            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'subject' => $request->subject,
            'message' => $request->message,

        ]);

        $data=[
            'name' => $application->name,
            'email' => $application->email,
            'phone' => $application->phone,
            'position' => $application->position,
            'subject' => $application->subject,
            'message' => $application->message,

        ];

        Mail::to('victechsystems55@gmail.com')->send(new JobApplicationMail($data));


        return back()->with('msg', 'Application Submitted Successfully');


    }
}
