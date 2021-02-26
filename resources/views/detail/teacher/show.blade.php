@extends('layouts.teacher')
@section('content')
   
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student&nbsp;</h3>
         @include('components.previous')
    </div>
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
                        <div class="col"><a href="student-details-edit.html"><button class="btn btn-primary ml-auto" type="button">Edit&nbsp; &nbsp;<i class="fa fa-edit"></i>&nbsp;</button></a></div>
                    </div>
                </form>
            </div>
        </div>
</div>
        
@endsection