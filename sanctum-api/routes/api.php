<?php

use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





Route::get('patients', [PatientController::class, 'patients']);
Route::get('showPatient/{id}', [PatientController::class, 'showPatient']);
Route::post('registerPatients', [PatientController::class, 'registerPatients']);
Route::put('editPatient/{id}', [PatientController::class, 'editPatient']);
Route::delete('deletePatient/{id}', [PatientController::class, 'deletePatient']);
Route::delete('removePatient/{id}', [PatientController::class, 'removePatient']);
