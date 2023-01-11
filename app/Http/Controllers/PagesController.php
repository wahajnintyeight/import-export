<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function view_about()
    {
        return view('about');
    }
    public function view_services()
    {
        return view('services');
    }
    public function view_contact_page()
    {
        return view('contact');
    }
    
}