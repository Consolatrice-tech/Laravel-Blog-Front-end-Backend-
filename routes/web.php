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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[\App\Http\Controllers\BlogPostController::class,'index'])->name('home');

Route::get('/details/{id}',[\App\Http\Controllers\BlogPostController::class,'show'])->name('details');

Route::get('/events',function(){
    return view('events');
});

Route::get('/login',function(){
    return view('auth.login');
});
Route::get('/signup',function(){
    return view('sign-up');

});Route::get('/dashboard',function(){
    return view('dashboard');
});
// Route::view('/dashboard','dashboard')->middleware('auth');