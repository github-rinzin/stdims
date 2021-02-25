@extends('layouts.teacher')
@section('content')
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>STUDENT IMS</span></div>
                </a>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="admin-dashboard-index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="approve-student-index.html"><i class="fas fa-table"></i><span>Approve Student</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-users"></i><span>Student Detail</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fas fa-user-check"></i><span>Attendance</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fa fa-id-card-o"></i><span>Student's Statement</span></a><a class="nav-link" href="#"><i class="fas fa-signal"></i><span>Result</span>&nbsp;Management</a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content-1">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Student</h3><a href="student-details-index.html"><button class="btn ml-auto" type="button"><i class="fa fa-long-arrow-left"></i>&nbsp;Back&nbsp;</button></a></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Name</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Date of Birth</span><input class="form-control" type="date" value="07/20/1999"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><span>Age</span>
                                            <div class="form-group"><input class="form-control" type="number" min="6" step="1"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Citizen Identy Card Number</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col"><span>House Number</span>
                                            <div class="form-group"><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col"><span>Thram Number</span>
                                            <div class="form-group"><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Village</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col"><span>Gewog</span>
                                            <div class="form-group"><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col"><span>Dzongkhag</span>
                                            <div class="form-group"><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Name of Previous School</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Student Code Number</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Father's Name</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Father's Contact Number</span><input class="form-control" type="tel"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Father's Address</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Name</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Contact Number</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Address</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Presently Staying with/Relation/Occupation and Address</span><input class="form-control" type="text"></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Contact Number</span><input class="form-control" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><button class="btn btn-primary" type="button">Update</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection