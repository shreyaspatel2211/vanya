<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubmitClaimController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GetQuoteController;
use App\Http\Controllers\Voyager\DoctorAppointmentController;
use App\Http\Controllers\Voyager\BreederAppointmentController;
use App\Http\Controllers\Voyager\WalkerAndTrainerBookingController;
use App\Http\Controllers\Voyager\WellnessAndGroomingBookingController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\Api\ChatController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/dog_insurance', function () {
    return view('dog_insurance');
});

Route::get('/get_quote', [GetQuoteController::class, 'index']);
Route::post('/get-quote', [GetQuoteController::class, 'submit'])->name('get-quote.submit');

Route::get('/submit_claim', [SubmitClaimController::class, 'index']);

Route::get('/terms_and_condition', function () {
    return view('terms_condition');
});

Route::get('/plan', [PlanController::class, 'index']);

Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.detail');
Route::get('/get_breed', [GetQuoteController::class, 'getBreed'])->name('get.breed');

Route::post('/admin/reschedule-appointment-doctor/{id}', [DoctorAppointmentController::class, 'reschedule']);
Route::post('/admin/reschedule-appointment-breeder/{id}', [BreederAppointmentController::class, 'reschedule']);
Route::post('/admin/reschedule-appointment-walker/{id}', [WalkerAndTrainerBookingController::class, 'reschedule']);
Route::post('/admin/reschedule-appointment-wellness/{id}', [WellnessAndGroomingBookingController::class, 'reschedule']);

Route::get('/calculate-premium', [PremiumController::class, 'calculatePremium']);

Route::get('/admin/chat/{user1}/{user2}', [ChatController::class, 'show'])->name('admin.chat.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
