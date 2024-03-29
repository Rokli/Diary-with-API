<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/main', function () {
    return view('diary',['status'=>'visible']);
});
Route::post('/register/exit',[AuthenticationController::class, 'register'] );
Route::view('/register/input','auth')->name("register");
