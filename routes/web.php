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
    if (auth()->user()) 
    {
         return view('home');
    }
    else
    {
           return view('/landing/landingpage');
    }
});
Route::get('/terms', function () {
    return view('terms');
	//return view('welcome');
});
Route::get('/aboutus', function () {
    return view('/landing/aboutus');
	//return view('welcome');
});
Route::post('/completereg', function () {
    return view('/completereg');
	//return view('welcome');
});
Route::get('/login', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/register2', function () {
    return view('/auth/register2');
	//return view('welcome');
});

require __DIR__.'/auth.php';

