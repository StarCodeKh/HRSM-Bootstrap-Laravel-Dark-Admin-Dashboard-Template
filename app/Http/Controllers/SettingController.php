<?php

namespace App\Http\Controllers;

use App\Models\RolesPermissions;
use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    /** Company Settings Page */
    public function companySettings()
    {
        return view('settings.companysettings');
    }

    /** Localization */
    public function localizationIndex()
    {
        return view('settings.localization');
    }

    /** Theme Settings */
    public function themeSettings()
    {
        return view('settings.theme-settings');
    }

    /** Roles & Permissions */
    public function rolesPermissions()
    {
        return view('settings.roles-permissions');
    }

    /** Email Settings */
    public function emailSettingsIndex()
    {
        return view('settings.email-settings');
    }

    /** Performance Setting */
    public function performanceSetting()
    {
        return view('settings.performance-setting');
    }

    /** Approval Setting */
    public function approvalSetting()
    {
        return view('settings.approval-setting');
    }

    /** Invoice Settings */
    public function invoiceSettings()
    {
        return view('settings.invoice-settings');
    }

    /** Salary Settings */
    public function salarySettingsIndex()
    {
        return view('settings.salary-settings');
    }

    /** Notifications Settings */
    public function notificationsSettings()
    {
        return view('settings.notifications-settings');
    }  
    
    /** Change Password */
    public function changePassword()
    {
        return view('settings.change-password');
    }

    /** Leave Type */
    public function leaveType()
    {
        return view('settings.leave-type');
    }

    /** ToxBox Setting */
    public function toxboxSetting()
    {
        return view('settings.toxbox-setting');
    }

    /** Cron Setting */
    public function cronSetting()
    {      
        return view('settings.cron-setting');
    }
}
