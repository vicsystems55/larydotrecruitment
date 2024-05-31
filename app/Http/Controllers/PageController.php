<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){

        $title = "Home";

        return view('index', compact('title'));
    }

    public function about_us(){

        $title = "About us";

        return view('about_us', compact('title'));
    }

    public function appointments(){

        $title = "Appointments";

        return view('appointments', compact('title'));
    }

    public function features(){

        $title = "Features";

        return view('features', compact('title'));
    }

    public function services(){

        $title = "Services";

        return view('services', compact('title'));
    }

    public function blog(){

        $title = "Our Blog";

        return view('blog', compact('title'));
    }

    public function our_team(){

        $title = "Our Team";

        return view('our_team', compact('title'));
    }

    public function testimonial(){

        $title = "Testimonial";

        return view('testimonial', compact('title'));
    }

    public function contact_us(){

        $title = "Contact us";

        return view('contact_us', compact('title'));
    }
    public function application(){

        $title = "Application Form";

        return view('application', compact('title'));
    }


}
