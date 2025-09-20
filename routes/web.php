<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\MessageController;

Route::get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


use Illuminate\Support\Facades\Response;

Route::get('/cv', function () {
    $path = public_path('cv/MonCV.pdf');
    return Response::file($path, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="MonCV.pdf"'
    ]);
});
