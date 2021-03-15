<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\PostController;
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
Route::get('post/create', function () {
    DB::table('posts')->insert([
        'title' => 'Rauan Serikov',
        'body' => 'portfolio'
    ]);
});

Route::get('post', [PostController::class, 'index']);
Route::get('post/create', function() {
    return view('post.create'); 
});

Route::post('post/create', [PostController::class, 'store'])->name('add-post');

Route::get('post/{id}', [PostController::class, 'get_post']);