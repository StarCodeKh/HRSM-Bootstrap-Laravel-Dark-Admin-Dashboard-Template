<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
    Route::get('home',function()
    {
        return view('dashboard.home');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // -----------------------------login----------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('logout/page', 'logoutPage')->name('logout/page');
    });

    // ------------------------------ register ----------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'register')->name('register');
        Route::post('/register','storeUser')->name('register');    
    });

    // ----------------------------- forget password ----------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');    
    });

    // ----------------------------- reset password -----------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword');    
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
    Route::middleware('auth')->group(function () {
        // --------------------- main dashboard ------------------//
        Route::controller(HomeController::class)->group(function () {
            Route::get('/home', 'index')->name('home');
            Route::get('em/dashboard', 'emDashboard')->name('em/dashboard');
        });
    });

    // ---------------------- Profile ----------------------------//
    Route::middleware('auth')->prefix('profile')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('em-profile', 'emProfile')->name('profile/em-profile');
            Route::get('client-profile', 'clientProfile')->name('profile/client-profile');
        });
    });

    // -------------------------- Settings --------------------------//
    Route::controller(SettingController::class)->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('company/settings/page', 'companySettings')->name('company/settings/page');
            Route::get('localization/page', 'localizationIndex')->name('localization/page');
            Route::get('theme-settings/page', 'themeSettings')->name('theme-settings/page');
            Route::get('roles-permissions/page', 'rolesPermissions')->name('roles-permissions/page');
            Route::get('email/settings/page', 'emailSettingsIndex')->name('email/settings/page');
            Route::get('performance-setting/page', 'performanceSetting')->name('performance-setting/page');
            Route::get('approval-setting/page', 'approvalSetting')->name('approval-setting/page');
            Route::get('invoice-settings/page', 'invoiceSettings')->name('invoice-settings/page');
            Route::get('salary/settings/page', 'salarySettingsIndex')->name('salary/settings/page');
            Route::get('notifications-settings/page', 'notificationsSettings')->name('notifications-settings/page');
            Route::get('change-password/page', 'changePassword')->name('change-password/page');
            Route::get('leave-type/page', 'leaveType')->name('leave-type/page');
            Route::get('toxbox-setting/page', 'toxboxSetting')->name('toxbox-setting/page');
            Route::get('cron-setting/page', 'cronSetting')->name('cron-setting/page');
        });
    });

    // ------------------------- Employee ---------------------------//
    Route::controller(EmployeeController::class)->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('all-employee-card', 'allEmployeeCard')->name('all-employee-card');
            Route::get('all-employee-list', 'allEmployeeList')->name('all-employee-list');
            Route::get('holidays', 'holidays')->name('holidays');
            Route::get('leaves-admin', 'leavesAdmin')->name('leaves-admin');
            Route::get('leaves-employee', 'leavesEmployee')->name('leaves-employee');
            Route::get('leave-settings', 'leaveSettings')->name('leave-settings');
            Route::get('attendance-admin', 'attendanceAdmin')->name('attendance-admin');
            Route::get('attendance-employee', 'attendanceEmployee')->name('attendance-employee');
            Route::get('departments', 'departments')->name('departments');
            Route::get('designations', 'designations')->name('designations');
            Route::get('timesheet', 'timesheet')->name('timesheet');
            Route::get('shift-scheduling', 'shiftScheduling')->name('shift-scheduling');
            Route::get('shift-list', 'shiftList')->name('shift-list');
            Route::get('overtime', 'overtime')->name('overtime');
        });
    });
});