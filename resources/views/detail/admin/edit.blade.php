@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student&nbsp;</h3>
         @include('components.previous')
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="test.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Name</span><input class="form-control" type="text" minlength="8" maxlength="16" required=""></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Class/Grade</span><input class="form-control" type="text" required="" minlength="1"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Section/Division/Stream</span><input class="form-control" type="text" required=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Date of Birth</span><input class="form-control" type="date" value="07/20/1999" required=""></div>
                        </div>
                        <div class="col"><span>Age</span>
                            <div class="form-group"><input class="form-control" type="number" min="6" step="1" required=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Citizen Identy Card Number</span><input class="form-control" type="text" minlength="11" maxlength="11" pattern="[0-9]"></div>
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
                        <div class="col"><span>Dzongkha</span>
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
                            <div class="form-group"><span>Student Code Number</span><input class="form-control" type="text" required=""></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Father's Name</span><input class="form-control" type="text" required=""></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Father's Contact Number</span><input class="form-control" type="tel" required=""></div>
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
@endsection