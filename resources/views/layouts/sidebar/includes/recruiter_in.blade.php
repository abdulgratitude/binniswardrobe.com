<a href="{{route('recruiter.in.dashboard')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.dashboard'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-view-dashboard-outline mdi-18px pr-3 "></i>
    <span>
        Dashboard
    </span>
</a>

<a href="{{route('recruiter.in.inbox')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.inbox'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
    <span>
        Inbox
    </span>
</a>

<a href="{{route('recruiter.in.notification')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.notification'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-bell-outline mdi-18px pr-3 "></i>
    <span>
        Notifications
    </span>
</a>


<a href="{{route('recruiter.in.settings')}}"
   class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.settings'))sidebar-active font-weight-bold text-primary @endif">
    <i class="mdi mdi-cog-outline mdi-18px pr-3 "></i>
    <span>
        Settings
    </span>
</a>

<li class="cursor-pointer d-flex align-items-center list-group-item list-group-item-action justify-content-between collapsed" data-toggle="collapse" data-target="#b-sidebar-jobs" aria-expanded="false" aria-controls="b-sidebar-jobs">
    Jobs <i class="mdi mdi-chevron-up"></i>
</li>
<div class="collapse" id="b-sidebar-jobs" style="">
    <a href="{{route('recruiter.in.job.newJob')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.job.newJob'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Post New Job
        </span>
    </a>
    <a href="{{route('recruiter.in.job.job_inbox.manageJob')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.job.job_inbox.manageJob'))sidebar-active font-weight-bold text-primary @endif">
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
    <a href="{{route('recruiter.in.network.follower')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.follower'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Followers
        </span>
    </a>
    <a href="{{route('recruiter.in.network.following')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.following'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Following
        </span>
    </a>
    <a href="{{route('recruiter.in.network.recommended')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.recommended'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Recommended Jobseeker
        </span>
    </a>

    <a href="{{route('recruiter.in.network.nearest')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.nearest'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Nearest Jobseeker
        </span>
    </a>
    <a href="{{route('recruiter.in.network.search')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.search'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Search Jobseeker
        </span>
    </a>
    <a href="{{route('recruiter.in.network.who_viewed')}}" class="d-flex align-items-center href-item @if(Request::url() === route('recruiter.in.network.who_viewed'))sidebar-active font-weight-bold text-primary @endif">
        <i class="mdi mdi-inbox-outline mdi-18px pr-3 "></i>
        <span>
            Who Viewed
        </span>
    </a>
</div>
