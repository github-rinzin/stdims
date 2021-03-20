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
    <div class="card shadow">
        <div class="card-body">
            <div class="card-body">
                
                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                @endif

                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <span>Student Code</span>
                                <input name="code" class="form-control {{ $errors->has('code') ? 'error' : '' }}" type="text" value="{{$student->code}}">
                                @if ($errors->has('code'))
                                     <div class="error">
                                          {{ $errors->first('code')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <span>Full Name</span>
                                <input name="name" class="form-control text-capitalize {{ $errors->has('name') ? 'error' : '' }} " type="text" value="{{$student->name}}">
                                @if ($errors->has('name'))
                                    <div class="error">
                                         {{ $errors->first('name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <span>Age</span>
                            <div class="form-group">
                                <input name="age" class="form-control {{ $errors->has('age') ? 'error' : '' }}" type="number" value="{{$student->age}}">
                                @if ($errors->has('age'))
                                     <div class="error">
                                          {{ $errors->first('age')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <span>Date of Birth</span>
                                <input name="dob" class="form-control {{ $errors->has('dob') ? 'error' : '' }} " type="date" value="{{$student->dob}}">
                                @if ($errors->has('dob'))
                                <div class="error">
                                     {{ $errors->first('dob')}}
                                </div>
                            @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <span>Name of Previous School</span>
                                <input name="name_of_previous_school" class="form-control text-capitalize {{ $errors->has('name_of_previous_school') ? 'error' : '' }}" type="text" value="{{$student->name_of_previous_school}}">
                                @if ($errors->has('name_of_previous_school'))
                                     <div class="error">
                                          {{ $errors->first('name_of_previous_school')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Citizen Identy Card Number</span>
                                <input name="cid" class="form-control {{ $errors->has('cid') ? 'error' : '' }}" type="text" value="{{$student->cid}}">
                                @if ($errors->has('cid'))
                                    <div class="error">
                                         {{ $errors->first('cid')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <span>House Number</span>
                            <div class="form-group">
                                <input name="house_number" class="form-control {{ $errors->has('house_number') ? 'error' : '' }}" type="text" value="{{$student->address->house_number}}">
                                @if ($errors->has('house_number'))
                                    <div class="error">
                                       test
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col"><span>Thram Number</span>
                            <div class="form-group">
                            <input name="thram_number" class="form-control" type="text" value="{{$student->address->thram_number}}"></div>
                            @if ($errors->has('thram_number'))
                            <div class="invalid-feedback">
                                Please choose a username.
                              </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Village</span>
                                <input name="village" class="form-control text-capitalize {{ $errors->has('village') ? 'error' : '' }}" type="text" value="{{$student->address->village}}">
                                @if ($errors->has('village'))
                                     <div class="error">
                                          {{ $errors->first('village')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <span>Gewog</span>
                            <div class="form-group">
                                <input name="gewog" class="form-control text-capitalize {{ $errors->has('gewog') ? 'error' : '' }}" type="text" value="{{$student->address->gewog}}">
                                @if ($errors->has('gewog'))
                                     <div class="error">
                                          {{ $errors->first('gewog')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col"><span>Dzongkhag</span>
                            <div class="form-group">
                                <input name="dzongkhag" class="form-control text-capitalize {{ $errors->has('dzongkhag') ? 'error' : '' }}" type="text" value="{{$student->address->dzongkhag}}">
                                @if ($errors->has('dzongkhag'))
                                     <div class="error">
                                          {{ $errors->first('dzongkhag')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Name</span>
                                <input name="fathers_name" class="form-control text-capitalize {{ $errors->has('fathers_name') ? 'error' : '' }}" type="text" value="{{$student->fathers_name}}">
                                @if ($errors->has('fathers_name'))
                                     <div class="error">
                                          {{ $errors->first('fathers_name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Contact Number</span>
                                <input name="fathers_contact" class="form-control {{ $errors->has('fathers_contact') ? 'error' : '' }}" type="tel" value="{{$student->fathers_contact}}">
                                @if ($errors->has('fathers_contact'))
                                     <div class="error">
                                          {{ $errors->first('fathers_contact')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Father's Address</span>
                                <input name="fathers_address" class="form-control {{ $errors->has('fathers_address') ? 'error' : '' }}" type="text" value="{{$student->fathers_address}}">
                                @if ($errors->has('fathers_address'))
                                     <div class="error">
                                          {{ $errors->first('fathers_address')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Name</span>
                                <input name="mothers_name" class="form-control text-capitalize {{ $errors->has('mothers_name') ? 'error' : '' }}" type="text" value="{{$student->mothers_name}}">
                                @if ($errors->has('mothers_name'))
                                     <div class="error">
                                          {{ $errors->first('mothers_name')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Contact</span>
                                <input name="mothers_contact" class="form-control {{ $errors->has('mothers_contact') ? 'error' : '' }}" type="text" value="{{$student->mothers_contact}}">
                                @if ($errors->has('mothers_contact'))
                                     <div class="error">
                                          {{ $errors->first('mothers_contact')}}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <span>Mother's Address</span>
                                <input name="mothers_address" class="form-control text-capitalize {{ $errors->has('mothers_address') ? 'error' : '' }}" type="text" value="{{$student->mothers_address}}">
                                @if ($errors->has('mothes_address'))
                                     <div class="error">
                                          {{ $errors->first('mothes_address')}}
                                    </div>
                                @endif
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