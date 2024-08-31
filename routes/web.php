<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\user;
use App\http\Controllers\Singleaction;


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

// Route::get('/', function () {
//     return view('home');
// });
route::get('/' , [user::class, 'index']);
route::get('/service' , [user::class, 'service']);
route::get('/team',[user::class,'team']);



route ::get('/about',Singleaction::class);
route ::get('/why',Singleaction::class);

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/service', function () {
//     return view('service');
// });

// Route::get('/team', function () {
//     return view('team');
// });
// Route::get('/why', function () {
//     return view('why');
// });