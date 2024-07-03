<div class="main-sidebar sidebar-style-2" tabindex="1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0);"><span class="logo-name"><img src="{{asset('admin_assets/img/logo.png')}}" /></span> </a>
            <a href="javascript:void(0);"><span class="logo-fm"><img src="{{asset('admin_assets/img/logo_fm.png')}}" /></span> </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>

            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/profile*') || Request::is('admin/password*') || Request::is('admin/detail*') ? 'active' : ' ' }}" >
                    <i class="ph-identification-card"></i>
                    <span>Manage Account</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/profile*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin.profile') }}">My Profile</a></li>
                    <li class="{{ Request::is('admin/password*') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('admin.password') }}">Change Password</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="menu-toggle nav-link has-dropdown {{ Request::is('admin/criminals*') ? 'active' : ' ' }}">
                    <i class="ph ph-user-list"></i>
                    <span> Suspects</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/criminals/create') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('criminals.create') }}">Create  Suspect</a></li>
                    <li class="{{ Request::is('admin/criminals') ? 'active' : ' ' }}"><a class="nav-link" href="{{ route('criminals.index') }}"> Suspect Entry List</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Request::is('admin/slider-time-maintains*') ? 'active' : ' ' }}">
                <a href="{{ route('slider-time-maintains.index') }}">
                    <i class="ph-gauge"></i>
                    <span>Slider Time Maintain</span>
                </a>
            </li>
            {{-- <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-file"></i>
                    <span>B2B Markup Management</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="admin-markup.html">Admin Markup</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" class="menu-toggle nav-link has-dropdown">
                    <i class="ph-wallet"></i>
                    <span>B2B Deposits</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Manage / Add Deposits</a></li>
                    <li><a class="nav-link" href="">Manage New Deposits
                            Request</a></li>
                    <li><a class="nav-link" href="">Approved Deposits Request</a>
                    </li>
                    <li><a class="nav-link" href="">Deposit History</a></li>
                    <li><a class="nav-link" href="">Refund Deposit</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-ticket"></i>
                    <span>All Cancel Ticket</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-user-circle"></i>
                    <span>Regional Manager</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Itinerary</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Upload Ticket</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>Customer Database</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="">
                    <i class="ph-fingerprint"></i>
                    <span>My Operator Log Details</span>
                </a>
            </li> --}}
        </ul>
    </aside>
</div>
