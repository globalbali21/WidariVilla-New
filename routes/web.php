<?php

use App\Http\Livewire\Contactus;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Service;
use App\Http\Livewire\Villas\WidariVilla1;
use App\Http\Livewire\Villas\WidariVilla2;
use App\Http\Livewire\Villas\WidariVilla3;
use App\Http\Livewire\Villas\WidariVilla4;
use App\Http\Livewire\Widari1\Contact;
use App\Http\Livewire\Widari1\Gallery;
use App\Http\Livewire\Widari2\Contact2;
use App\Http\Livewire\Widari2\Gallery2;
use App\Http\Livewire\Widari3\Contact3;
use App\Http\Livewire\Widari3\Gallery3;
use App\Http\Livewire\Widari4\Contact4;
use App\Http\Livewire\Widari4\Gallery4;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/Services', Service::class);
Route::get('/ContactUs', Contactus::class);

// Home Villas
Route::get('/widarivilla1', WidariVilla1::class);
Route::get('/widarivilla2', WidariVilla2::class);
Route::get('/widarivilla3', WidariVilla3::class);
Route::get('/widarivilla4', WidariVilla4::class);

// Gallery
Route::get('/widarivilla1/gallery', Gallery::class);
Route::get('/widarivilla2/gallery', Gallery2::class);
Route::get('/widarivilla3/gallery', Gallery3::class);
Route::get('/widarivilla4/gallery', Gallery4::class);

// Contact
Route::get('/widarivilla1/contact', Contact::class);
Route::get('/widarivilla2/contact', Contact2::class);
Route::get('/widarivilla3/contact', Contact3::class);
Route::get('/widarivilla4/contact', Contact4::class);