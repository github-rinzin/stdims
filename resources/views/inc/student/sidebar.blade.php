<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Student IMS</span></div>
        </a>
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('student.dashboard') }}"><i class="fas fa-user"></i><span>Dashboard</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('attendance.index')}}"><i class="fas fa-table"></i><span>Attendance</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('statement.index')}}"><i class="fas fa-table"></i><span>Statement</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('student.result.index')}}"><i class="fas fa-table"></i><span>Result</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('join.create') }}"><i class="fas fa-plus"></i><span>Join Class</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>