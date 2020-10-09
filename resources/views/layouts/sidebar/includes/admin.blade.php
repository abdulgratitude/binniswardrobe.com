<a href="{{route('admin.dashboard')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('admin.dashboard'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-view-dashboard-outline mdi-18px pr-3 "></i>
    <span>
        Dashboard
    </span>
</a>

<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed"
    data-toggle="collapse" data-target="#b-sidebar-notification" aria-expanded="false" aria-controls="b-sidebar-notification">
    <span>   <i class="mdi  mdi-bell-outline  mdi-18px pr-3 "></i>Notification</span> <i
        class="mdi mdi-chevron-down"></i>
</li>
<div class="collapse" id="b-sidebar-notification">

    <a href="{{route('user.notification.ticker.index')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.notification.ticker.index'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-waves mdi-18px pr-3 "></i>
        <span>
        Ticker Notification
    </span>
    </a>

    <a href="{{route('user.notification.bell.index')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.notification.bell.index'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-bell-plus-outline mdi-18px pr-3 "></i>
        <span>
        Bell Notification
    </span>
    </a>

</div>

<a href="{{route('admin.locality')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('admin.locality'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-map-marker-radius-outline mdi-18px pr-3 "></i>
    <span>
        Locality
    </span>
</a>


<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed"
    data-toggle="collapse" data-target="#b-sidebar-users" aria-expanded="false" aria-controls="b-sidebar-users">
    <span>   <i class="mdi  mdi-account-group-outline  mdi-18px pr-3 "></i>User</span> <i
        class="mdi mdi-chevron-down"></i>
</li>

<div class="collapse" id="b-sidebar-users">
    <a href="{{route('admin.register')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.register'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-account-multiple-plus-outline mdi-18px pr-3 "></i>
        <span>
        Register User
    </span>
    </a>
    <a href="{{route('user.password.index')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.password.index'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-lastpass mdi-18px pr-3 "></i>
        <span>
        User Password
    </span>
    </a>
</div>

<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed"
    data-toggle="collapse" data-target="#b-sidebar-companies" aria-expanded="false" aria-controls="b-sidebar-companies">
    <span>   <i class="mdi mdi-storefront-outline mdi-18px pr-3 "></i>Company</span> <i
        class="mdi mdi-chevron-down"></i>
</li>
<div class="collapse" id="b-sidebar-companies">
    <a href="{{route('user.company')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.company'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3"></i>
        <span>
        Companies
    </span>
    </a>
    <a href="{{route('user.company.hiring')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.company.hiring'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Company Hiring
    </span>
    </a>
    <a href="{{route('user.company.remark')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.company.remark'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Company Remark
    </span>
    </a>
    <a href="{{route('user.company.bonus.index')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.company.bonus.index'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Company Bonus
    </span>
    </a>
    <a href="{{route('user.company.point')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('user.company.point'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Company Point
    </span>
    </a>
</div>

<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed"
    data-toggle="collapse" data-target="#b-sidebar-jobs" aria-expanded="false" aria-controls="b-sidebar-jobs">
    <span>   <i class="mdi mdi-briefcase-outline mdi-18px pr-3 "></i>Jobs</span> <i
        class="mdi mdi-chevron-down"></i>
</li>
<div class="collapse" id="b-sidebar-jobs">
    <a href="{{route('admin.jobs')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.jobs'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Jobs
    </span>
    </a>

    <a href="{{route('admin.industries')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.industries'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Industries
    </span>
    </a>

    <a href="{{route('admin.functions')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.functions'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Functions
    </span>
    </a>

    <a href="{{route('admin.roles')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.roles'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Roles
    </span>
    </a>

    <a href="{{route('admin.job-board')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-board'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Board
    </span>
    </a>

    <a href="{{route('admin.job-education')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-education'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Education
    </span>
    </a>

    <a href="{{route('admin.job-type')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-type'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Type
    </span>
    </a>

    <a href="{{route('admin.job-employment-type')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-employment-type'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Employments
    </span>
    </a>

    <a href="{{route('admin.job-account-type')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-account-type'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Accounts
    </span>
    </a>

    <a href="{{route('admin.job-shift-type')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-shift-type'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Shifts
    </span>
    </a>

    <a href="{{route('admin.job-process-type')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-process-type'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Processes
    </span>
    </a>

    <a href="{{route('admin.job-designation')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-designation'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Designation
    </span>
    </a>

    <a href="{{route('admin.job-skill')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-skill'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Skill
    </span>
    </a>

    <a href="{{route('admin.job-specialization')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-specialization'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Specialization
    </span>
    </a>

    <a href="{{route('admin.job-totalmark')}}"
       class="d-flex align-items-center href-item @if(Request::url() === route('admin.job-totalmark'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-link mdi-18px pr-3 "></i>
        <span>
        Job Total Mark
    </span>
    </a>
</div>


<a href="{{route('admin.settings')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('admin.settings'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-cog-outline mdi-18px pr-3 "></i>
    <span>
        Settings
    </span>
</a>
