<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Auth;
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

Route::get('', function () {
    return view('homepage/index');
    // return "Hahahaha The BamboKids";
});

Route::get('/beranda', [LatihanController::class, 'beranda']);
// Route::get('/homepage', [HomepageController::class, 'index']);

Auth::routes();


Route::get('homepage', [\App\Http\Controllers\HomepageController::class, 'index']);
