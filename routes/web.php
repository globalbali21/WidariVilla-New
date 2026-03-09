<?php

use App\Http\Livewire\Contactus;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Service;
use App\Http\Livewire\Villas\WidariVilla1;
use App\Http\Livewire\Widari1\Contact;
use App\Http\Livewire\Widari1\Gallery;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/widarivilla1', WidariVilla1::class);
Route::get('/widarivilla1/gallery', Gallery::class);
Route::get('/widarivilla1/contact', Contact::class);
Route::get('/Services', Service::class);
Route::get('/ContactUs', Contactus::class);