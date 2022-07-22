<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

use Vedmant\FeedReader\Facades\FeedReader;

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
Route::get('/', [App\Http\Controllers\TcController::class, 'index']);

Route::get('/aggregrate/{rss_id}', [NewsController::class, 'aggregrate']);
Route::get('/', [App\Http\Controllers\FeedController::class, 'index']);

Route::get('/lifestyle', function () {
    return view('lifestyle');
});
Route::get('/lifestyle', [App\Http\Controllers\LfController::class, 'index']);

Route::get('/otomotif', function () {
    return view('otomotif');
});
Route::get('/otomotif', [App\Http\Controllers\OtController::class, 'index']);

Route::get('/tech', function () {
    return view('tech');
});
Route::get('/tech', [App\Http\Controllers\TcController::class, 'index']);