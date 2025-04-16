<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tin/{id}' , [TinController::class, 'chitiet']);
Route::get('/cat/{idLT}', [TinController::class, 'tintrongloai']);