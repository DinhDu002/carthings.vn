<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');
Route::get('/category-grid', function () {
    return view('category-grid');
})->name('category-grid');
Route::get('/category-grid', function () {
    return view('category-grid');
})->name('category-grid');
Route::get('/single', function () {
    return view('single');
})->name('single');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/blog_details', function () {
    return view('blog_details');
})->name('blog_details');
Route::get('/create_post', function () {
    return view('create_post');
})->name('create_post');
Route::get('/settings', function () {
    return view('settings');
})->name('settings');
Route::get('/close-account', function () {
    return view('close-account');
})->name('close-account');
Route::get('/my-ads', function () {
    return view('my-ads');
})->name('my-ads');
Route::get('/favourite', function () {
    return view('favourite');
})->name('favourite');
Route::get('/ad-alerts', function () {
    return view('ad-alerts');
})->name('ad-alerts');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');
Route::get('/404', function () {
    return view('404');
})->name('404');
