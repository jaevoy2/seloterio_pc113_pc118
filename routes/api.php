<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Employee;
use App\Http\Controllers\ListController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/employee', [ListController::class, 'employee']);
Route::get('/student', [ListController::class, 'student']);
Route::get('/find', [ListController::class, 'searchEmployee']);
Route::get('/limit', [ListController::class, 'limit']);
Route::post('create', [ListController::class, 'create']);
Route::delete('/delete', [ListController::class, 'delete']);
Route::put('/update/{id}', [ListController::class, 'update']);

