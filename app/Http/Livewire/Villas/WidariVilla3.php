<?php

namespace App\Http\Livewire\Villas;

use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class WidariVilla3 extends Component
{
        public $name;
    public $email;
    public $phone;
    public $check_in;

public function submit()
{
    $this->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'check_in' => 'required|date',
    ]);

    $data = [
        'villa' => 'Widari Villa 3',
        'name' => $this->name,
        'email' => $this->email,
        'phone' => $this->phone,
        'check_in' => $this->check_in,
    ];

    // Kirim ke ADMIN
    Mail::to('gbalivisa@gmail.com')->send(new BookingMail($data));

    // Kirim ke USER (auto reply)
    Mail::to($this->email)->send(new BookingMail($data));

    session()->flash('success', 'Booking berhasil dikirim!');

    $this->reset();
}
    public function render()
    {
        return view('components.villas.⚡widari3');
    }
}