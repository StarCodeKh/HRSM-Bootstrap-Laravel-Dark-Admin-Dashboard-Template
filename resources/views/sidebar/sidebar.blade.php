
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ set_active(['home','em/dashboard']) ? 'noti-dot' : '' }}">
                        <i class="la la-dashboard"></i>
                        <span> Dashboard</span> <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['home'])}}" href="{{ route('home') }}">Admin Dashboard</a></li>
                        <li><a class="{{set_active(['em/dashboard'])}}" href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                    </ul>
                </li>

                <li class="menu-title"> <span>Employees</span> </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="la la-user"></i> 
                        <span> Employees</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li>
                            <a class="{{set_active(['all-employee-card','all-employee-list'])}}" href="{{ route('all-employee-card') }}">All Employees</a>
                        </li>
                        <li><a class="{{set_active(['holidays'])}}" href="{{ route('holidays') }}">Holidays</a></li>
                        <li>
                            <a class="{{set_active(['leaves-admin'])}}" href="{{ route('leaves-admin') }}">Leaves (Admin) 
                                <span class="badge badge-pill bg-primary float-right">0</span>
                            </a>
                        </li>
                        <li><a class="{{set_active(['leaves-employee'])}}" href="{{ route('leaves-employee') }}">Leaves (Employee)</a></li>
                        <li><a class="{{set_active(['leave-settings'])}}" href="{{ route('leave-settings') }}">Leave Settings</a></li>
                        <li><a class="{{set_active(['attendance-admin'])}}" href="{{ route('attendance-admin') }}">Attendance (Admin)</a></li>
                        <li><a class="{{set_active(['attendance-employee'])}}" href="{{ route('attendance-employee') }}">Attendance (Employee)</a></li>
                        <li><a class="{{set_active(['departments'])}}" href="{{ route('departments') }}">Departments</a></li>
                        <li><a class="{{set_active(['designations'])}}" href="{{ route('designations') }}">Designations</a></li>
                        <li><a class="{{set_active(['timesheet'])}}" href="{{ route('timesheet') }}">Timesheet</a></li>
                        <li><a class="{{set_active(['shift-scheduling','shift-list'])}}" href="{{ route('shift-scheduling') }}">Shift & Schedule</a></li>
                        <li><a class="{{set_active(['overtime'])}}" href="{{ route('overtime') }}">Overtime</a></li>
                    </ul>
                </li>

                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li class="submenu">
                    <a href="#" class="{{ set_active(['profile/em-profile','profile/client-profile']) ? 'noti-dot' : '' }}">
                        <i class="la la-user"></i>
                        <span> Profile </span> 
                        <span class="menu-arrow"></span>
                    </a>
                   <ul style="{{ request()->is('/*') ? 'display: block;' : 'display: none;' }}">
                        <li><a class="{{set_active(['profile/em-profile'])}}" href="{{ route('profile/em-profile') }}"> Employee Profile </a></li>
                        <li><a class="{{set_active(['profile/client-profile'])}}" href="{{ route('profile/client-profile') }}"> Client Profile </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->