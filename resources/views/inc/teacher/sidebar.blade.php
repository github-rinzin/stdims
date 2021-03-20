<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
            <div class="sidebar-brand-text mx-3"><span>STUDENT IMS</span></div>
        </a>
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('teacher.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('join.index') }}"><i class="fas fa-table"></i><span>Approve Student</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('student.index') }}"><i class="fas fa-users"></i><span>Details</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('teacher.attendance.index') }}"><i class="fas fa-user-check"></i><span>Attendance</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('teacher.statement.student') }}"><i class="fa fa-id-card-o"></i><span>Statement</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('result.index') }}"><i class="fas fa-signal"></i><span>Result</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>