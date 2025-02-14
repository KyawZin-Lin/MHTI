<nav class="navbar navbar-expand navbar-light bg-color topbar mb-4 static-top shadow border-left-color">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span
                    class="mr-2 d-none d-lg-inline text-white-600 small">{{ auth()->guard('admin_user')->user()->name }}
                    🔽</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                {{-- <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a> --}}
                {{-- <div class="dropdown-divider"></div> --}}

                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf

                        <button type="submit" class="dropdown-item"><i
                                class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout</button>
                    </form>
                </a>

            </div>
        </li>

    </ul>

</nav>
