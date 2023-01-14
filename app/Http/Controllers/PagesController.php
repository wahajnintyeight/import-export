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
    public function view_catalog_page()
    {
        return view('catalog');
    }
    public function downloadPDF()
    {
        $file = public_path() . "/assets/media/KATALOG-TARG1.pdf";
        return response()->download($file);
    }

}