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
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/project', function () {
    return view('pages.project');
})->name('project');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog-single', function () {
    return view('pages.blog-single');
})->name('blog-single');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');



