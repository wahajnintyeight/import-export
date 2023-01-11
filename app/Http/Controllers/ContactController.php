<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    //
    public function create(Request $req)
    {
        // dd($req);
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->surname = $req->surname;
        $contact->email = $req->email;
        $contact->department = $req->department;
        $contact->message = $req->message;
        $contact->save();
        return view('contact');
    }
}