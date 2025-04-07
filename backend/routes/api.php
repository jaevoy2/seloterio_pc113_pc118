<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Employee;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;;
use Illuminate\Support\Facades\Auth;



Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/currentUser', [UserController::class, 'currentUser']);

Route::middleware(['permission', 'preventBackHistory'])->group(function() {
    Route::get('/index', [UserController::class, 'index']);

    Route::prefix('admin')->group(function() {
        // user management
        Route::get('/users', [UserController::class, 'showUsers'])->middleware('admin');
        Route::post('/add-user', [UserController::class, 'addUser'])->middleware('admin');
        Route::post('/edit-user', [UserController::class, 'editUser'])->middleware('admin');
        Route::post('/delete-user', [UserController::class, 'deleteUser'])->middleware('admin');

        // settings
        Route::get('/roles-permissions', [SettingController::class, 'showAll'])->middleware('admin');
        Route::post('/save-role', [SettingController::class, 'saveRole'])->middleware('admin');
        Route::post('/edit-role', [SettingController::class, 'saveEditRole'])->middleware('admin');
        Route::post('/delete-role', [SettingController::class, 'deleteRole'])->middleware('admin');
        Route::post('/save-permission', [SettingController::class, 'savePermission'])->middleware('admin');
        Route::post('/edit-permission', [SettingController::class, 'editPermission'])->middleware('admin');
        Route::post('/delete-permission', [SettingController::class, 'removePermisison'])->middleware('admin');
    });



    // sir marnie activity
    Route::prefix('employee')->group(function() {
        Route::get('/employeeList', [UserController::class, 'employeeList'])->middleware('admin');
        Route::get('/find', [ListController::class, 'searchEmployee'])->middleware('admin');
        Route::get('/employee', [ListController::class, 'employee'])->middleware('admin');
        Route::post('/add-employee', [ListController::class, 'create'])->middleware('admin');
        Route::delete('/delete', [ListController::class, 'deleteEmployee'])->middleware('admin');
        Route::put('/update', [ListController::class, 'updateEmployee']);
    });
    Route::prefix('student')->group(function() {
        Route::get('/students', [ListController::class, 'student'])->middleware('admin');
        Route::post('/add-student', [ListController::class, 'addStudent'])->middleware('admin');
        Route::put('/update-student', [ListController::class, 'updateStudent'])->middleware('admin');
        Route::post('/delete-student', [ListController::class, 'deleteStudent'])->middleware('admin');
    });
    Route::get('/limit', [ListController::class, 'limit']);
});


