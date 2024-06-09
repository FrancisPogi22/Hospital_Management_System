<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicalRecordController; 
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

Route::get('getAllMedicalRecords', [MedicalRecordController::class, 'getAllMedicalRecords']);
Route::get('getAllDoctorMedicals/{id}', [MedicalRecordController::class, 'getAllDoctorMedicals']);
Route::get('showMedicalRecords/{id}', [MedicalRecordController::class, 'showMedicalRecords']);
Route::get('viewMedicalRecords/{id}', [MedicalRecordController::class, 'viewMedicalRecords']);
Route::patch('editMedicalRecord/{id}', [MedicalRecordController::class, 'editMedicalRecord']);

