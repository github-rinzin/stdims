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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="class-teacher-dashboard.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="approve-student-index.html"><i class="fas fa-table"></i><span>Approve Student</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="student-details-index.html"><i class="fas fa-users"></i><span>Student Details&nbsp;</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="attendance-index.html"><i class="fas fa-user-check"></i><span>Attendance</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="statement-student-index.html"><i class="fa fa-id-card-o"></i><span>Student's Statement</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="result-index.html"><i class="fas fa-signal"></i><span>&nbsp;Result Management&nbsp;</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Jarna Gurung</span><div class="dropdown-divider"></div></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                        role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Attendance</h3><a href="attendance-index.html"><button class="btn ml-auto" type="button"><i class="fa fa-long-arrow-left"></i>&nbsp;Back&nbsp;</button></a></div>
                    <form>
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <div class="form-group form-inline"><label>Attendance for :&nbsp;&nbsp;</label><input class="form-control" type="date"></div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table dataTable my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Student Number</th>
                                                <th>Student Name</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dorji</td>
                                                <td class="text-center"><input type="checkbox" style="margin-left: 0px;" checked=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Pema Zam</td>
                                                <td class="text-center"><input type="checkbox" style="margin-left: 0px;" checked=""></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Pema Yangzin</td>
                                                <td class="text-center"><input type="checkbox" style="margin-left: 0px;" checked=""></td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                        <tfoot>
                                            <tr></tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6"><button class="btn btn-primary" type="button"><i class="far fa-calendar-plus"></i>&nbsp; Submit</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
 @endsection