@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    @if (session('msg'))
    <div class="alert alert-success w-100" role="alert">
            {{session('msg') }}
    </div>
    @endif
    <div class="d-sm-flex justify-content-between align-items-center">
        <h3 class="text-dark mb-0">Detail</h3>
        @include('components.previous')
    </div>
    <div class="d-sm-flex justify-content-between align-items-center mb-4"></div>
    <div class="card shadow">
        <div class="card-body">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Name</span><input class="border rounded border-white form-control" type="text" disabled="" readonly="" value="{{ $student->name}}"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Class/Grade</span><input class="border-white form-control" type="text" disabled="" readonly="" 
                                @if (Auth::user()->student->class_division_id != null)
                                    value="{{ $student->classDivision->grade->numeric }}"
                                @endif
                            ></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Section/Division/Stream</span><input class="border-white form-control" type="text" disabled="" readonly="" 
                               @if (Auth::user()->student->class_division_id != null)
                                    value="{{ $student->classDivision->division->name }}"
                               @endif
                            ></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Date of Birth</span><input class="border-white form-control" type="date"  disabled="" readonly="" value="{{ $student->dob }}"></div>
                        </div>
                        <div class="col"><span>Age</span>
                            <div class="form-group"><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly="" value="{{ $student->age }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Citizen Identiy Card Number</span><input class="border-white form-control" type="number" min="6" step="1" disabled="" readonly="" value="{{ $student->cid }}"></div>
                        </div>
                        <div class="col"><span>House Number</span>
                            <div class="form-group"><input class="border-white form-control" type="text"  disabled="" readonly="" value="{{ $student->address->house_number }}"></div>
                        </div>
                        <div class="col"><span>Thram Number</span>
                            <div class="form-group"><input class="border-white form-control" type="text"  disabled="" readonly="" value="{{ $student->address->thram_number }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Village</span><input class="border-white form-control text-capitalize" type="text" disabled="" readonly="" value="{{ $student->address->village }}"></div>
                        </div>
                        <div class="col"><span>Gewog</span>
                            <div class="form-group"><input class="border-white form-control text-capitalize" type="text" disabled="" readonly="" value="{{ $student->address->gewog }}"></div>
                        </div>
                        <div class="col"><span>Dzongkha</span>
                            <div class="form-group"><input class="border-white form-control text-capitalize" type="text" disabled="" readonly="" value="{{ $student->address->dzongkhag }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Name of Previous School</span><input class="border-white form-control text-capitalize" type="text" disabled="" readonly="" value="{{ $student->name_of_previous_school }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Student Code Number</span><input class="border-white form-control" type="text" disabled="" readonly="" value="{{ $student->code }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Father's Name</span><input class="border-white form-control  text-capitalize" type="text" disabled="" readonly="" value="{{ $student->fathers_name }}"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Father's Contact Number</span><input class="border-white form-control" type="tel" disabled="" readonly="" value="{{ $student->fathers_contact }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Father's Address</span><input class="border-white form-control" type="text" disabled="" readonly="" value="{{ $student->fathers_address }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Mother's Name</span><input class="border-white form-control  text-capitalize" type="text" disabled="" readonly="" value="{{ $student->mothers_name }}"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><span>Mother's Contact Number</span><input class="border-white form-control" type="text" disabled="" readonly="" value="{{ $student->mothers_contact }}"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><span>Mother's Address</span><input class="border-white form-control" type="text" disabled="" readonly=""  value="{{ $student->mothers_address }}"></div>
                        </div>
                    </div>
                    {{-- <div class="form-row">
                        <div class="col"><a href="{{ route('student.edit', $student->id ) }}"><button class="btn btn-primary ml-auto" type="button">Edit&nbsp; &nbsp;<i class="fa fa-edit"></i>&nbsp;</button></a></div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection