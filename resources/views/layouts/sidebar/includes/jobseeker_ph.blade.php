<a href="{{route('jobseeker.ph.dashboard')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.dashboard'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-view-dashboard-outline mdi-18px pr-3"></i>
    <span>
        Dashboard
    </span>
</a>
<a href="{{route('jobseeker.ph.notification')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.notification'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-bell-outline mdi-18px pr-3 "></i>
    <span>
        Notifications
    </span>
</a>
<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed" data-toggle="collapse" data-target="#b-sidebar-jobs" aria-expanded="false" aria-controls="b-sidebar-jobs">
    Jobs <i class="mdi mdi-chevron-up"></i>
</li>
<div class="collapse" id="b-sidebar-jobs" style="">
    <a href="{{route('jobseeker.ph.job')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.job'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            View Jobs
        </span>
    </a>
    <a href="{{route('jobseeker.ph.job.recommended_job')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.job.recommended_job'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Recommended Jobs
        </span>
    </a>
    <a href="{{route('jobseeker.ph.job.job_inbox')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.job.job_inbox'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Manage Jobs
        </span>
    </a>
</div>
<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed" data-toggle="collapse" data-target="#b-sidebar-network" aria-expanded="false" aria-controls="b-sidebar-network">
    Network <i class="mdi mdi-chevron-up"></i>
</li>
<div class="collapse" id="b-sidebar-network" style="">
    <a href="{{route('jobseeker.ph.network.followers')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.followers'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Followers
        </span>
    </a>
    <a href="{{route('jobseeker.ph.network.following')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.following'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Following
        </span>
    </a>
    <a href="{{route('jobseeker.ph.network.recommended')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.recommended'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Recommended Recruiter
        </span>
    </a>
    <a href="{{route('jobseeker.ph.network.nearest')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.nearest'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Nearest Recruiter
        </span>
    </a>
    <a href="{{route('jobseeker.ph.network.search')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.search'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Search Recruiter
        </span>
    </a>
    <a href="{{route('jobseeker.ph.network.who_viewed')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.network.who_viewed'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Who Viewed
        </span>
    </a>
</div>

<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed" data-toggle="collapse" data-target="#b-sidebar-profile" aria-expanded="false" aria-controls="b-sidebar-profile">
    Profile <i class="mdi mdi-chevron-up"></i>
</li>
<div class="collapse" id="b-sidebar-profile" style="">
    <a href="{{route('jobseeker.ph.profile')}}" class="d-flex align-items-center href-item @if(Request::url() === route('jobseeker.ph.profile'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-bell-outline mdi-18px pr-3 "></i>
        <span>
        Manage Profile
        </span>
    </a>
</div>




