<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="/*background-image: linear-gradient(180deg,#df4e4e 10%,#be2222);*/">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="">
            <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
            <div class="sidebar-brand-text mx-3"><span>Student ims</span></div>
        </a>
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('admin.detail.class') }}"><i class="far fa-user-circle"></i><span>Student</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('class.index') }}"><i class="far fa-user-circle"></i><span>Class</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href=""><i class="fas fa-chalkboard-teacher"></i><span>Class Teacher</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('admin.attendance.class') }}"><i class="fas fa-address-book"></i><span>Attendance</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('admin.result.class') }}"><i class="fas fa-user-circle"></i><span>Result</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('admin.statement.class') }}"><i class="fas fa-user-circle"></i><span>Statement</span></a></li>
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>