<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Employee;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [UserController::class, 'login']);
Route::post('/create-user', [UserController::class, 'create']);

Route::middleware('permission')->group(function() {
    Route::get('/index', [UserController::class, 'index']);
    // Route::get('/employeeList', [UserController::class, 'employeeList'])->middleware('admin');
    Route::get('/employee', [ListController::class, 'employee']);
    Route::get('/student', [ListController::class, 'student']);
    Route::get('/find', [ListController::class, 'searchEmployee']);
    Route::get('/limit', [ListController::class, 'limit']);
    Route::post('create', [ListController::class, 'create']);
    Route::delete('/delete', [ListController::class, 'delete']);
    Route::put('/update/{id}', [ListController::class, 'update']);
});

