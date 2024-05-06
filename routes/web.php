<?php

use App\Http\Controllers\Visitor\HomeController;
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
//     return view('visitor-page.home');
// });

// Route Visitor start

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/product', [HomeController::class, 'product']);

    // Route::get('/product/{id}', [ExperienceController::class, 'show'])->name('experience.show');
});
