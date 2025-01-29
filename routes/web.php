<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendMail;


Route::get('/', function () {
    return view('send-mail');
});

Route::get('/home', [HomeController::class, 'home'])->middleware('track');

// Route::get('/', [SendMail::class, 'sendMail']);
Route::get('/send-mail', [SendMail::class, 'sendMail']);