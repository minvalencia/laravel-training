<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>

    </div>

    <div class="header-right">
        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name">John Doe</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li>
                        <a role="menuitem" tabindex="-1" href="{{ route('logout') }}"><i class="bx bx-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->
