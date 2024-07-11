<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\SimpleHealthCheckController;

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
})->middleware('verify.shopify')->name('home');

Route::get('/phpinfo', function () { phpinfo(); });

Route::get('health', SimpleHealthCheckController::class); //TODO: add auth middleware
