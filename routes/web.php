<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'welcome' => ['Welcome all!']
    ];
    return view('home', $data);
})->name('home');


Route::get('/link-one', function () {
    return view('link-one');
})->name('link-one');


Route::get('/link-two', function () {
    return view('link-two');
})->name('link-two');


Route::get('/link-three', function () {
    return view('link-three');
})->name('link-three');
