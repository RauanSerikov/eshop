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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');
Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');
Route::get('/mycontact', function () {
    return view('mycontact');
})->name('mycontact');

