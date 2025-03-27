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
        Route::post('/add-employee', [ListController::class, 'create'])->middleware('admin');
        Route::post('/delete', [ListController::class, 'delete'])->middleware('admin');
        Route::put('/update', [ListController::class, 'updateEmployee']);
    });
    Route::get('/limit', [ListController::class, 'limit']);
});


Route::get('/student', [ListController::class, 'student']);
