<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\Employee;
use App\Http\Controllers\ListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Auth;
use App\Models\PracticeOrder;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Twilio\Rest\Client;

Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/setup', [UserController::class, 'setupAccount']);
Route::post('/setup/save', [UserController::class, 'saveSetup']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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
        Route::post('/show-specific', [SettingController::class, 'showSpecific'])->middleware('admin');
        Route::post('/edit-role', [SettingController::class, 'saveEditRole'])->middleware('admin');
        Route::post('/delete-role', [SettingController::class, 'deleteRole'])->middleware('admin');
        Route::get('/menus', [SettingController::class, 'menus']);
        Route::post('/store-menus', [SettingController::class, 'storeMenu'])->middleware('admin');
        Route::get('access_control', [SettingController::class, 'access']);
        Route::post('/store-menu-permission', [SettingController::class, 'saveMenuPerm'])->middleware('admin');
        // Route::post('/remove-permission', [SettingController::class, 'removePermission'])->middleware('admin');

        //delivery assignment
        Route::get('/orders', [DeliveryController::class, 'orders']);
        Route::get('/riders', [DeliveryController::class, 'riders']);
        Route::get('deliveries', [DeliveryController::class, 'deliveries']);
        Route::post('/assign-order', [DeliveryController::class, 'assigned']);
        Route::get('/reassign-order', [DeliveryController::class, 'reassignRiders']);
        Route::post('/save-reassign', [DeliveryController::class, 'saveReassign']);

        // Report
        Route::get('/report', [ReportController::class, 'reportList'])->middleware('admin');
        Route::post('/filter/month', [ReportController::class, 'filterMonth'])->middleware('admin');

    });

    // riders delivery
    Route::prefix('rider')->group(function() {
        Route::get('/my-assigned-order', [RiderController::class, 'getDelivery']);
        Route::post('/update-order-status', [RiderController::class, 'updateOrderStatus']);
        Route::post('/scanned-details', [RiderController::class, 'scannedDetails']);
        Route::post('/store/proof', [RiderController::class, 'storeProof']);
        Route::get('/history', [RiderController::class, 'myHistory']);

    });

    // Dashboard
    Route::get('/dashboard-content', [UserController::class, 'dashboard']);

    Route::get('/currentUser', [UserController::class, 'currentUser']);
    Route::post('/edit-profile', [UserController::class, 'editProfile']);
    Route::post('/remove-profile', [UserController::class, 'removeProfileImage']);
    Route::post('/uploadFile', [UserController::class, 'uploadFile']);
    Route::get('/getFileUploads', [UserController::class, 'getFileUploads']);
    Route::post('/remove-file', [UserController::class, 'removeFile']);
    Route::get('/account', [UserController::class, 'accountView']);
    Route::get('/user-access', [UserController::class, 'userMenuAccess']);


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


Route::get('/practice-order', function() {
    $orders =  PracticeOrder::with('foods')->get();
    return response()->json($orders);
});
