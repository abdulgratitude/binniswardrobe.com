<nav id="nav-bar" class="navbar b-header shadow-sm mb-3">
    <div class="d-flex  align-items-center navbar-brand">
        <i class="mdi mdi-menu b-sidebar-trigger cursor-pointer"></i>

        <span class="px-1 page-name">
            @yield('navbar-name')
        </span>
    </div>

    <div class="d-flex navbar-expand align-items-center">

        <div class="notification-bell px-2 ">
            <i class="mdi mdi-bell-outline cursor-pointer bell" id="notification-bell-toggle"></i>
            <span class="badge badge-danger badge-pill bell-count"></span>
            <div class="notifications shadow" id="notification-panel">
                <div class="text-right m-1 border-bottom p-1 pb-2">
                    <button class="btn badge badge-danger" onclick="markAllRead()">clear notifications</button>
                </div>
                <div id="notification-panel-show">

                </div>

            </div>
        </div>
    </div>
</nav>
