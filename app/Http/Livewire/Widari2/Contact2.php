<?php

namespace App\Http\Livewire\Widari2;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact2 extends Component
{
        public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public function send(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $phone = preg_replace('/[^0-9]/', '', $this->phone);
    
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ];
    
        // EMAIL KE ADMIN
        Mail::send('emails.contact-admin', ['data' => $data], function ($mail) {
            $mail->to('gbalivisa@gmail.com')
                 ->subject('Contact Form - ' . $this->subject);
        });
    
        // EMAIL KE USER
        Mail::send('emails.contact-user', ['data' => $data], function ($mail) {
            $mail->to($this->email)
                 ->subject('We received your message');
        });
    
        session()->flash('success', 'Message sent successfully!');
        $this->reset();
    }
    public function render()
    {
        return view('components.widari2.⚡contact');
    }
}