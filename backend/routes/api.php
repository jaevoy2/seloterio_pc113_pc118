<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Employee;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;



Route::post('/create-user', [UserController::class, 'create']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('permission')->group(function() {
    Route::get('/index', [UserController::class, 'index']);
    Route::prefix('admin')->group(function() {
        Route::get('/employeeList', [UserController::class, 'employeeList'])->middleware('admin');
        Route::get('/find', [ListController::class, 'searchEmployee'])->middleware('admin');
        Route::get('/employee', [ListController::class, 'employee'])->middleware('admin');
    });
    Route::get('/limit', [ListController::class, 'limit']);
    Route::delete('/delete', [ListController::class, 'delete']);
    Route::put('/update/{id}', [ListController::class, 'update']);
});


Route::post('/create', [ListController::class, 'create']);
Route::get('/student', [ListController::class, 'student']);
