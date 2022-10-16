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

Route::get('index', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/detail', function () {
    return view('pages.detail');
});
Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/team', function () {
    return view('pages.team');
});
Route::get('/testimonial', function () {
    return view('pages.testimonial');
});
Route::get('/welcome', function () {
    return view('pages.welcome');
});
