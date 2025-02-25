<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubmitClaimController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServiceController;

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
Route::get('/', [IndexController::class, 'index']);

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', [ContactController::class, 'index']);

// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', [AboutController::class, 'index']);

Route::get('/dog_insurance', function () {
    return view('dog_insurance');
});

Route::get('/get_quote', function () {
    return view('get_quote');
});

// Route::get('/submit_claim', function () {
//     return view('submit_claim');
// });
Route::get('/submit_claim', [SubmitClaimController::class, 'index']);

Route::get('/terms_and_condition', function () {
    return view('terms_condition');
});

// Route::get('/plan', function () {
//     return view('plans');
// });
Route::get('/plan', [PlanController::class, 'index']);

Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.detail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
