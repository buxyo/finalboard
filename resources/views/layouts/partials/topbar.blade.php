<div class="navbar-custom">
    <ul class="list-unstyled topbar-menu float-end mb-0">
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button">
                <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="flag" height="12">
                <span class="align-middle d-none d-sm-inline-block">English</span>
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="" class="me-1" height="12"> English
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <img src="{{ asset('assets/images/flags/france.jpg') }}" alt="" class="me-1" height="12"> Français
                </a>
            </div>
        </li>
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button">
                <span class="account-user-avatar">
                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">Dominic Keller</span>
                    <span class="account-position">Founder</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-edit me-1"></i> Settings
                </a>
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout me-1"></i> Logout
                </a>
            </div>
        </li>
    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
</div>
