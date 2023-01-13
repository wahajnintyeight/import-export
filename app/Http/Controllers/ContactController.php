<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Contact as ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    //
    public function create(Request $req)
    {
        // dd("??");
        $contact = new ContactModel();
        $contact->name = $req->name;
        $contact->surname = $req->name;
        $contact->email = $req->email;
        $contact->message = $req->message;
        // dd($contact);
        Mail::to("miksmth502@gmail.com")->send(new Contact($contact->message, $req->email));
        // Mail::to("office@ghubtrading.co.uk")->send(new Contact($contact->message, $req->email));
        // Mail::to("accounts@ghubtrading.co.uk")->send(new Contact($contact->message, $req->email));
        $contact->save();
        return view('contact');
    }
}