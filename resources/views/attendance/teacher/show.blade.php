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
            <div id="content-1">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <li class="nav-item dropdown no-arrow" role="presentation"></li>
                            <li class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Jarna Gurung</span><div class="dropdown-divider"></div></a>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                    role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Attendance</h3><a href="attendance-index.html"><button class="btn ml-auto" type="button"><i class="fa fa-long-arrow-left"></i>&nbsp;Back&nbsp;</button></a></div>
                </div>
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header d-flex flex justify-content-between">
                            <div class="card-text">
                                <p class="pt-3 text-dark">Student Name :- Dorji&nbsp;</p>
                            </div>
                            <div class="card-header border-0"><a href="attendance-create.html"></a></div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table dataTable my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Serial Number</th>
                                            <th class="text-left">Date</th>
                                            <th class="text-left">Day</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2376821</td>
                                            <td>20/07/2021</td>
                                            <td></td>
                                            <td style="padding: 0;">
                                                <form>
                                                    <div class="form-group align-content-center" style="margin-bottom: 0;"><input type="checkbox" style="margin: 0px;margin-right: 0;margin-left: 46%;margin-top: 19px;" checked=""></div>
                                                </form>
                                            </td>
                                            <td class="text-center"><button class="btn btn-sm text-uppercase text-dark" type="submit"><a class="text-dark" href="#">&nbsp;save&nbsp;<i class="icon ion-arrow-up-a"></i></a></button></td>
                                        </tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr></tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Serial Number</strong></td>
                                            <td><strong>Date</strong></td>
                                            <td class="text-left"><strong>Day</strong></td>
                                            <td class="text-center"><strong>Status</strong></td>
                                            <td class="text-center"><strong>Actions</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection