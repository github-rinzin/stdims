@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @if (session('msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button id="btn-close" type="button" class="btn-close float-right btn mb-2 pt-0" data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>
    @endif
 
    <script type="text/javascript">
        $("#btn-close").click(function(){
            $(".alert-dismissible").hide();
        });
    </script>
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student&nbsp;</h3>
         @include('components.previous')
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Name</span>
                                <input name="name" class="form-control text-capitalize" type="text" value="{{$student->name}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Date of Birth</span>
                                <input name="dob" class="form-control" type="date" value="{{$student->dob}}">
                            </div>
                        </div>
                        <div class="col"><span>Age</span>
                            <div class="form-group">
                                <input name="age" class="form-control" type="number" value="{{$student->age}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Citizen Identy Card Number</span>
                                <input name="cid" class="form-control" type="text" value="{{$student->cid}}">
                            </div>
                        </div>
                        <div class="col">
                            <span>House Number</span>
                            <div class="form-group">
                                <input name="house_number" class="form-control" type="text" value="{{$student->address->house_number}}">
                            </div>
                        </div>
                        <div class="col"><span>Thram Number</span>
                            <div class="form-group"><input name="thram_number" class="form-control" type="text" value="{{$student->address->thram_number}}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Village</span>
                                <input name="village" class="form-control text-capitalize" type="text" value="{{$student->address->village}}">
                            </div>
                        </div>
                        <div class="col">
                            <span>Gewog</span>
                            <div class="form-group">
                                <input name="gewog" class="form-control text-capitalize" type="text" value="{{$student->address->gewog}}">
                            </div>
                        </div>
                        <div class="col"><span>Dzongkhag</span>
                            <div class="form-group">
                                <input name="dzongkhag" class="form-control text-capitalize" type="text" value="{{$student->address->dzongkhag}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Name of Previous School</span>
                                <input name="name_of_previous_school" class="form-control text-capitalize" type="text" value="{{$student->name_of_previous_school}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Student Code Number</span>
                                <input name="code" class="form-control" type="text" value="{{$student->code}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Name</span>
                                <input name="fathers_name" class="form-control text-capitalize" type="text" value="{{$student->fathers_name}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Contact Number</span>
                                <input name="fathers_contact" class="form-control" type="tel" value="{{$student->fathers_contact}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Address</span>
                                <input name="fathers_address" class="form-control" type="text" value="{{$student->fathers_address}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Name</span>
                                <input name="mothers_name" class="form-control text-capitalize" type="text" value="{{$student->mothers_name}}">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Contact</span>
                                <input name="mothers_contact" class="form-control" type="text" value="{{$student->mothers_contact}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Address</span>
                                <input name="mothers_address" class="form-control text-capitalize" type="text" value="{{$student->mothers_address}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button type="submit" value="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection