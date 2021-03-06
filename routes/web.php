<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app.entities.statics.home');
})->name('home');

Route::get('/director', function () {
    return view('app.entities.doctor.show');
})->name('director');
Route::get('/lewis', function(){
    return view('app.entities.doctor.lewis');
})->name('lewis');

Route::get('/contact', function(){
    return view('app.entities.contact');
})->name('contact');