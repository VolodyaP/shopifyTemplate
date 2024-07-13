<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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



Route::middleware('verify.shopify')->group(function () {
    Route::view('/','app')->name('home');
    Route::get('/me', function () { return response()->json(['name' => auth()->user()->name]); });
});



//TODO: add auth middleware
Route::get('phpinfo', function () { phpinfo(); });
Route::get('health', HealthCheckResultsController::class);
