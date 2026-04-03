<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class BookingMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Villa Booking')
                    ->view('emails.booking');
    }
}