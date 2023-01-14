<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $mailfrom;
    public $phone;
    public $fullname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $mailfrom, $fullname, $phone)
    {
        //
        // $this->name = $name;
        $this->message = $message;
        $this->fullname = $fullname;
        $this->phone = $phone;
        $this->mailfrom = $mailfrom;
    }


    public function build()
    {
        return $this->subject('Contact Query')->markdown('emails.contact');
    }

}