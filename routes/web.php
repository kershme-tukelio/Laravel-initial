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
    $books = [
        'title' => 'naslov1',
        'author' => 'author1'
    ];
    return $books;
    // return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});