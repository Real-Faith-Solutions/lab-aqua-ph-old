<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\Helpers;
use App\Http\Controllers\ForbesTopController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnalysisRequestController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LabAcceptanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersRoleController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RightsManagementController;
use App\Http\Controllers\AdminRegisteredCommand;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
        return view('login');
    })->name('/');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::group([
    'prefix'     => 'api/v1',
], function () {
    Route::get('users', [UserController::class, 'getUsers'])->middleware('userauth');
    Route::get('users/status/update/{id}/{status}', [UserController::class, 'updateUserStatus'])->middleware('userauth');

    Route::group([
        'prefix'     => 'rights-management',
    ], function () {
        Route::post('add', [RightsManagementController::class, 'addRightsManagement']);
        Route::post('record', [RightsManagementController::class, 'getRightsManagement']);
    });

    Route::group([
        'prefix'     => 'user-management',
    ], function () {
        Route::post('add', [UsersRoleController::class, 'addUsersRole']);
        Route::post('record', [UsersRoleController::class, 'getUsersRole']);
    });

    Route::group([
        'prefix'     => 'analysis-request',
    ], function () {
        Route::post('add', [AnalysisRequestController::class, 'addNewAnalysisRequest']);
        Route::post('encode', [AnalysisRequestController::class, 'encodeAnalysisResult']);
        Route::get('record', [AnalysisRequestController::class, 'getAnalysisRequests']);
    });

    Route::group([
        'prefix'     => 'payment',
    ], function () {
        Route::post('add', [PaymentController::class, 'addPayment']);
        Route::get('record', [PaymentController::class, 'getPayments']);
    });

    Route::group([
        'prefix'     => 'facility',
    ], function () {
        Route::post('add', [FacilityController::class, 'addFacility']);
        Route::get('record', [FacilityController::class, 'getFacility']);
    });

    Route::group([
        'prefix'     => 'lab-acceptance',
    ], function () {
        Route::post('add', [LabAcceptanceController::class, 'addLabAcceptance']);
        Route::get('record', [LabAcceptanceController::class, 'getLabAcceptance']);
    });

    Route::group([
        'prefix'     => 'client',
    ], function () {
        Route::post('add', [ClientController::class, 'addNewClient']);
        Route::get('record', [ClientController::class, 'getClients']);
        Route::get('get/{account_name}', [ClientController::class, 'getClientsByAccountName']);
    });
});

Route::group([
    'prefix'     => 'user',
    'middleware' => 'userauth',
], function () {
    Route::get('dashboard', [ForbesTopController::class, 'getMostCounts']);

    /// Table Records Functionality Routes
    Route::get('csv-records', [ForbesTopController::class, 'getRecipients']);
    Route::post('csv-search', [ForbesTopController::class, 'findRecipients']);

    /// CSV Functionality Routes
    Route::get('csv-upload', function () {
        return view('csvuploader');
    });
    Route::post('csv-upload', [ForbesTopController::class, 'uploadCSVContent']);

    Route::get('message', function () {
        return view('message');
    });

    Route::get('user-records', [UserController::class, 'getUsersTable'])->middleware('userauth');
});


/// User Auth Functionality Routes
Route::get('/login', function () {
    return view('login');
})->middleware('userauth');
Route::post('/login', [AuthController::class, 'userLogin'])->middleware('userauth');

Route::get('/forgot-password', function () {
    return view('forgot_password');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/logout', [CustomAuthController::class, 'signOut'])->middleware('userauth');
/// User Auth Functionality Routes


Route::group([
    'prefix'     => 'admin',
    'middleware' => 'userauth',
], function () {
    // Route::get('/', [DashboardController::class, 'getDashboardPage']);

    Route::get('/dashboard', [DashboardController::class, 'getDashboardPage']);

    Route::group([
        'prefix'     => 'app-forms',
    ], function () {
        Route::get('analysis-request', function()
        {
            return view('admin.page_forms.analysis_request');
        });
    });

    Route::group([
        'prefix'     => 'app-forms',
    ], function () {
        Route::get('analysis-request/edit-form', function()
        {
            return view('admin.page_forms.analysis_request_edit_form');
        });
    });

    Route::group([
        'prefix'     => 'laboratory',
    ], function () {
        Route::get('dw-micro', function()
        {
            return view('admin.laboratory.dw_micro');
        });
        Route::get('dw-py-chem', function()
        {
            return view('admin.laboratory.dw_py_chem');
        });
        Route::get('ew-micro', function()
        {
            return view('admin.laboratory.ew_micro');
        });
        Route::get('ew-py-chem', function()
        {
            return view('admin.laboratory.ew_py_chem');
        });

    });

    Route::group([
        'prefix'     => 'record',
    ], function () {
        Route::get('/analysis-request', [AnalysisRequestController::class, 'getAnalysisRequestsPage']);
        Route::get('/lab-work-order', [AnalysisRequestController::class, 'getWorkOrderPage']);
        Route::get('/payment-info', [PaymentController::class, 'getPaymentsInfoPage']);
        Route::get('facility', [FacilityController::class, 'getFacilityPage']);
        Route::get('/analysis-request/{date_from}/{date_to}', [AnalysisRequestController::class, 'getAnalysisRequestPageBetween']);
        Route::get('/rights-management', [RightsManagementController::class, 'getRightsManagementPage']);
        Route::get('/lab-approval', [LabAcceptanceController::class, 'getLabApproval']);
        Route::get('/lab-approval/{id}', [LabAcceptanceController::class, 'getApprovalLabStatus'])->name('getApprovalLabStatus');
    });

    Route::group([
        'prefix'     => 'user-management',
    ], function () {
        Route::get('client', [ClientController::class, 'getClientPage']);
        Route::get('sales', [ClientController::class, 'getSalesPage']);
        Route::get('user', [CustomAuthController::class, 'getUsersRolePage']);
        Route::get('srole', [AdminRegisteredCommand::class, 'index'])->name('srole');
        Route::get('status/{id}', [AdminRegisteredCommand::class, 'status'])->name('status');
        Route::get('role',  function()  
        {
            return view('admin.user-management.role');
        });
        Route::get('add-role', [UsersRoleController::class, 'getUsersRolePage']);
        // Route::get('add-role',  function () {
        //     return view('admin.user-management.add_role');
        // });
    });

    Route::group([
        'prefix'     => 'report',
    ], function () {
        Route::get('/lab-result', [LabAcceptanceController::class, 'getLabResultPage']);
        Route::get('/lab-acceptance', [LabAcceptanceController::class, 'getLabAcceptancePage']);
        Route::get('/lab-status', [AnalysisRequestController::class, 'getLabStatus']);
        Route::get('/lab-status/{id}', [AnalysisRequestController::class, 'getChangeLabStatus'])->name('getChangeLabStatus');
        Route::get('/lab-result-print/{id}', [AnalysisRequestController::class, 'getLabResultPrintPage']);
        Route::get('/lab-acceptance/{date_from}/{date_to}', [LabAcceptanceController::class, 'getLabAcceptancePageBetween']);
        Route::get('/lab-result/{date_from}/{date_to}', [LabAcceptanceController::class, 'getResultPageBetween']);

        Route::get('/widget_reports',  function(){
            return view('admin.report.widget_reports');
        });
    });
});
