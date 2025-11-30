<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li><a href="{{ route('home') }}"><i class="la la-home"></i> <span>Back to Home</span></a></li>
                <li class="menu-title">Settings</li>
                <li class="{{set_active(['company/settings/page'])}}"><a href="{{ route('company/settings/page') }}"><i class="la la-building"></i><span>Company Settings</span></a></li>
                <li class="{{set_active(['localization/page'])}}"><a href="{{ route('localization/page') }}"><i class="la la-clock-o"></i><span>Localization</span></a></li>
                <li class="{{set_active(['theme-settings/page'])}}"><a href="{{ route('theme-settings/page') }}"><i class="la la-photo"></i><span>Theme Settings</span></a></li>
                <li class="{{set_active(['roles-permissions/page'])}}"><a href="{{ route('roles-permissions/page') }}"><i class="la la-key"></i><span>Roles & Permissions</span></a></li>
                <li class="{{set_active(['email/settings/page'])}}"><a href="{{ route('email/settings/page') }}"><i class="la la-at"></i><span>Email Settings</span></a></li>
                <li class="{{set_active(['performance-setting/page'])}}"><a href="{{ route('performance-setting/page') }}"><i class="la la-chart-bar"></i><span>Performance Settings</span></a></li>
                <li class="{{set_active(['approval-setting/page'])}}"><a href="{{ route('approval-setting/page') }}"><i class="la la-thumbs-up"></i><span>Approval Settings</span></a></li>
                <li class="{{set_active(['invoice-settings/page'])}}"><a href="{{ route('invoice-settings/page') }}"><i class="la la-pencil-square"></i><span>Invoice Settings</span></a></li>
                <li class="{{set_active(['salary/settings/page'])}}"><a href="{{ route('salary/settings/page') }}"><i class="la la-money"></i><span>Salary Settings</span></a></li>
                <li class="{{set_active(['notifications-settings/page'])}}"><a href="{{ route('notifications-settings/page') }}"><i class="la la-globe"></i><span>Notifications</span></a></li>
                <li class="{{set_active(['change-password/page'])}}"><a href="{{ route('change-password/page') }}"><i class="la la-lock"></i><span>Change Password</span></a></li>
                <li class="{{set_active(['leave-type/page'])}}"><a href="{{ route('leave-type/page') }}"><i class="la la-cogs"></i><span>Leave Type</span></a></li>
                <li class="{{set_active(['toxbox-setting/page'])}}"><a href="{{ route('toxbox-setting/page') }}"><i class="la la-comment"></i><span>ToxBox Settings</span></a></li>
                <li class="{{set_active(['cron-setting/page'])}}"><a href="{{ route('cron-setting/page') }}"><i class="la la-rocket"></i><span>Cron Settings</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sidebar -->