<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('index', [\App\Http\Controller\HomepageController::class, 'index']);
Route::get('about', [HomepageController::class, 'about']);
Route::get('kategori', [HomepageController::class, 'kategory']);
Route::get('contact', [HomepageController::class, 'contact']);
Route::get('admin', [DashboardController::class, 'index']);
// Route::get('kategori', [KategoriController::class, 'index']);


// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/', 'DashboardController@index');
//     // route resource
//     Route::get('/', 'KategoriController@index');
//     Route::get('/', 'DashboardController@index');
// });


