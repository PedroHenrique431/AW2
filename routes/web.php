<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenderController;


Route::get('/', function(){return view('welcome');});
Route::resource('/books', BookController::class);
Route::resource('/genders', GenderController::class);
