<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);
//    ->middleware('auth','verified');
Route::get('/add_doctor_view',[AdminController::class,'addview']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appointment/{id}',[HomeController::class,'cancel_appointment']);
Route::get('/appointments_view',[AdminController::class,'appointments_view']);
Route::get('/doctor_all',[AdminController::class,'doctor_view']);
Route::get('/Approved_appointment/{id}',[AdminController::class,'Approved_appointment']);
Route::get('/canceled_appointment/{id}',[AdminController::class,'canceled_appointment']);
Route::get('/delete_doctor/{id}',[AdminController::class,'delete_doctor']);
Route::get('/update_doctor/{id}',[AdminController::class,'update_doctor']);
Route::post('/edite_doctor/{id}',[AdminController::class,'edite_doctor']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
