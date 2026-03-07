<?php

use App\Http\Livewire\Contactus;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Service;
use App\Http\Livewire\Villas\WidariVilla1;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);
Route::get('/widarivilla1', WidariVilla1::class);
Route::get('/Services', Service::class);
Route::get('/ContactUs', Contactus::class);