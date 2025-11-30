<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /** All Employee Card View */
    public function allEmployeeCard()
    {
        return view('employees.all-employee-card');
    }

    /** All Employee List View */
    public function allEmployeeList()
    {
        return view('employees.all-employee-list');
    }

    /** Holidays View */
    public function holidays()
    {
        return view('employees.holidays');
    }

    /** Leaves (Admin) View */
    public function leavesAdmin()
    {
        return view('employees.leaves-admin');
    }

    /** Leaves (Employee) View */
    public function leavesEmployee()
    {
        return view('employees.leaves-employee');
    }

    /** Leave Settings View */
    public function leaveSettings()
    {
        return view('employees.leave-settings');
    }

    /** Attendance (Admin) View */
    public function attendanceAdmin()
    {
        return view('employees.attendance-admin');
    }

    /** Attendance (Employee) View */
    public function attendanceEmployee()
    {              
        return view('employees.attendance-employee');
    }

    /** Departments View */
    public function departments()
    {
        return view('employees.departments');
    }

    /** Designations View */
    public function designations()
    {
        return view('employees.designations');
    }

    /** Timesheet View */
    public function timesheet()
    {
        return view('employees.timesheet');
    }

    /** Shift & Scheduling View */
    public function shiftScheduling()
    {
        return view('employees.shift-scheduling');
    }

    /** Shift List View */
    public function shiftList()
    {
        return view('employees.shift-list');
    }

    /** Overtime View */
    public function overtime()
    {
        return view('employees.overtime');
    }

}
