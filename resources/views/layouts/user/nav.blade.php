<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{route('user/home')}}">Larabench</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{route('user/home')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Logs">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseLogs" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Rent</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseLogs">
                    <li>
                        <a href="{{ route(('user/setup')) }}">New</a>
                    </li>
                    <li>
                        <a href="{{ route('user/ticket') }}">Extend</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="{{ route('user/help') }}">
                    <i class="fa fa-fw fa-question"></i>
                    <span class="nav-link-text">Help</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="https://github.com/cen4010-spring18-team13/backend">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">GitHub</span>
                </a>
            </li>
            @if  (Auth::user()->isAdmin())
                <li class="nav-item bg-primary" data-toggle="tooltip" data-placement="right" title="Link">
                    <a class="nav-link text-white bg-primary" href="{{ route('admin/home') }}">
                        <i class="fa fa-fw fa-unlock-alt"></i>
                        <span class="nav-link-text text-white">Admin</span>
                    </a>
                </li>
                @endif
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell mr-1"></i>
                    {{ Auth::user()->name }}
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an example message, 3 Users online, 2 Workbenches available</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>