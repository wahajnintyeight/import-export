<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Contact as ContactModel;
use Brian2694\Toastr\Toastr;
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
        $contact->first_name = $req->firstName;
        $contact->last_name = $req->lastName;
        $contact->email = $req->email;
        $contact->phone_number = $req->phone;
        $contact->message = $req->message;
        Mail::to("office@ghubtrading.co.uk")
            ->send(
                new Contact(
                        $contact->message,
                        $req->email,
                        $contact->first_name . " " . $contact->last_name,
                        $contact->phone_number
                )
            );

        Mail::to("accounts@ghubtrading.co.uk")
            ->send(
                new Contact(
                        $contact->message,
                        $req->email,
                        $contact->first_name . " " . $contact->last_name,
                        $contact->phone_number
                )
            );
        $contact->save();
        session()->flash('success', 'Message sent successfully!');
        return back();
    }
}