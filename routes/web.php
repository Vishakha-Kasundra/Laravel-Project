<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
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
    return view('welcome');
});

Route::get('/form', function () {
    return view('template.form');
})->name('Form');

Route::get('/Home', function () {
    return view('template.Home');
})->name('Home');

Route::get('/Contact', function () {
    return view('template.ContactUs');
})->name('Contact');

Route::get('/About', function () {
    return view('template.AboutUs');
})->name('About');

Route::resource('user', StockController::class);
