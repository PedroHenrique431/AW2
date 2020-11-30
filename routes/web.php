<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenderController;


Route::get('/', function(){return view('welcome');});
Route::resource('/books', BookController::class)-> middleware('auth');
Route::resource('/genders', GenderController::class)-> middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
