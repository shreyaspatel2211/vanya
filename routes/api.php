<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\GetAQuoteController;
use App\Http\Controllers\Api\FaqController;
use App\Http\Controllers\Api\BreedController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\InsuranceCoverController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\BreederController;
use App\Http\Controllers\Api\DoctorAppointmentController;
use App\Http\Controllers\Api\PetDateController;
use App\Http\Controllers\Api\PetHostelController;
use App\Http\Controllers\Api\WalkerAndTrainerController;
use App\Http\Controllers\Api\WellnessAndGroomingController;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/getuserdata', [AuthController::class, 'getUserData']);
Route::put('/updateprofile', [AuthController::class, 'updateProfile']);
Route::delete('/user/{id}', [AuthController::class, 'delete']);
Route::post('/add-device-token', [AuthController::class, 'addDeviceToken']);
Route::post('/remove-device-token', [AuthController::class, 'removeDeviceToken']);
Route::post('/update-password', [AuthController::class, 'updatePassword']);
Route::post('contact/submit', [ContactController::class, 'submit']);
Route::post('get-a-quote/submit', [GetAQuoteController::class, 'submit']);
Route::get('faqs', [FaqController::class, 'index']);
Route::get('breeds', [BreedController::class, 'index']);
Route::get('categories', [CategoryController::class, 'index']);
Route::get('services', [ServiceController::class, 'index']);
Route::get('insurance-covers', [InsuranceCoverController::class, 'index']);
Route::get('features', [FeatureController::class, 'index']);
Route::get('reviews', [ReviewController::class, 'index']);
Route::get('plans', [PlanController::class, 'index']);
Route::get('settings', [SettingController::class, 'index']);


Route::get('/doctors-grouped', [DoctorAppointmentController::class, 'doctorsGroupedByCategory']);
Route::get('/breeders', [BreederController::class, 'getBreeders']);
Route::get('/walkers-and-trainers', [WalkerAndTrainerController::class, 'getWalkersAndTrainers']);
Route::get('/pet-hostels', [PetHostelController::class, 'getPetHostels']);
Route::get('/wellness-grooming', [WellnessAndGroomingController::class, 'getWellnessAndGrooming']);
Route::get('/pet-dates', [PetDateController::class, 'getPetDate']);

Route::post('/add-breeders', [BreederController::class, 'BreederStore']);
Route::post('/book-breeder-appointment', [BreederController::class, 'BookBreederAppointment']);

Route::post('/add-doctors', [DoctorAppointmentController::class, 'DoctorStore']);
Route::post('/book-doctor-appointment', [DoctorAppointmentController::class, 'BookDoctorAppointment']);

Route::post('/add-hostel', [PetHostelController::class, 'HostelStore']);
Route::post('/book-hostel', [PetHostelController::class, 'BookHostel']);
Route::post('/add-hostels-plans', [PetHostelController::class, 'HostelPlanStore']);
Route::get('/get-hostel-plans/{hostel_id}', [PetHostelController::class, 'GetHostelPlan']);

Route::post('/add-walker-and-trainer', [WalkerAndTrainerController::class, 'WalkerAndTrainerStore']);
Route::post('/book-walker-and-trainer', [WalkerAndTrainerController::class, 'BookWalkerAndTrainer']);
Route::post('/add-walker-and-trainer-plans', [WalkerAndTrainerController::class, 'WalkerAndTrainerPlanStore']);
Route::get('/get-walker-and-trainer-plans/{walker_and_trainer_id}', [WalkerAndTrainerController::class, 'GetWalkerAndTrainerPlan']);

Route::post('/add-wellness-and-grooming', [WellnessAndGroomingController::class, 'WellnessAndGroomingStore']);
Route::post('/book-wellness-and-grooming', [WellnessAndGroomingController::class, 'BookWellnessAndGrooming']);
Route::post('/add-wellness-and-grooming-plans', [WellnessAndGroomingController::class, 'WellnessAndGroomingPlanStore']);
Route::get('/get-wellness-and-grooming-plans/{wellness_and_grooming_id}', [WellnessAndGroomingController::class, 'GetWellnessAndGroomingPlan']);

Route::post('/add-pet-for-date', [PetDateController::class, 'addPetForDate']);
Route::post('/pet-match', [PetDateController::class, 'petMatch']);

Route::post('/send-message', [ChatController::class, 'send']);
Route::get('/messages/{sender_id}/{receiver_id}', [ChatController::class, 'getMessages']);


Route::post('/chat/send', [ChatController::class, 'sendMessage']);
Route::get('/chat/history', [ChatController::class, 'getChatHistory']);

Route::get('/check-pet-like-status', [PetDateController::class, 'checkLikeStatus']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
