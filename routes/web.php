<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SvController;
use App\Http\Controllers\HsController;
use App\Mail\GuiMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get("hs", [HsController::class, 'hs']);
Route::post("hs", [HsController::class, 'hs_store'])->name('hs_store');
Route::get("sv", [SvController::class, 'sv']);
Route::post("sv", [SvController::class, 'sv_store'])->name('sv_store');
Route::get('/sendmail', function () {
    Mail::send(new GuiMail());
    return "Đã gửi mail";
});
