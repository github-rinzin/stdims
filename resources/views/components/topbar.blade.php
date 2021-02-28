<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">{{ __('Admin') }}</a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                        <a  class="dropdown-item" 
                            role="presentation" 
                            href="{{ route('logout') }}" 
                            onclick = "
                                event.preventDefault();
                                document.getElementById('logout-form').submit();
                            "
                        >
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>                        
            </li>
        </ul>
    </div>
</nav>