<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('forms');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'forename' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'dob' => 'required|date',
            // Add more validation rules as needed
        ]);

        Registration::create($request->all());
        return redirect()->route('form.success');
    }

    public function success()
    {
        return view('form-success');
    }
}
