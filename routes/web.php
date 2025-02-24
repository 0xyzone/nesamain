<?php

use App\Livewire\Events\ListNesaEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    $titleName = "";
    return view('welcome', compact('titleName'));
})->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about.index');
Route::get('/certificates', [MainController::class, 'certificates'])->name('certificates.index');
Route::get('/events', [MainController::class, 'events'])->name('events.index');
Route::get('/news', [MainController::class, 'news'])->name('news.index');
Route::get('/contact', [MainController::class, 'contact'])->name('contact.index');

Route::get('/demo/', [DemoController::class, 'index'])->name('demo.index');
Route::get('/demo/{id}', [DemoController::class, 'show'])->name('demo.show');
Route::get('/eventTable', ListNesaEvent::class);

Route::view('fifth-nec', 'fyftnec')->name('fyft');