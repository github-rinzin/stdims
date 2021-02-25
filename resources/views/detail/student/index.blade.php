@extends('layouts.student')
@section('content')
<body id="page-top">
    <div id="wrapper">
        @include('inc.student.sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <p></p>
                        </form>
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
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Dorji Nima</span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                        role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Profile</h3>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Name</span><input class="border rounded border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Class/Grade</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Section/Division/Stream</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Date of Birth</span><input class="border-white form-control" type="date" value="07/20/1999" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col"><span>Age</span>
                                            <div class="form-group"><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Citizen Identiy Card Number</span><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col"><span>House Number</span>
                                            <div class="form-group"><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col"><span>Thram Number</span>
                                            <div class="form-group"><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Village</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col"><span>Gewog</span>
                                            <div class="form-group"><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col"><span>Dzongkha</span>
                                            <div class="form-group"><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Name of Previous School</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Student Code Number</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Father's Name</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Father's Contact Number</span><input class="border-white form-control" type="tel" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Father's Address</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Name</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Contact Number</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Mother's Address</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group"><span>Presently Staying with/Relation/Occupation and Address</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group"><span>Contact Number</span><input class="border-white form-control" type="text" disabled="" readonly=""></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col"><a href="student-edit.html"><button class="btn btn-primary ml-auto" type="button">Edit&nbsp; &nbsp;<i class="fa fa-edit"></i>&nbsp;</button></a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@endsection
</html>