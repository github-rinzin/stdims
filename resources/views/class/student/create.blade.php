@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Join Class</h4>
        @include('components.previous')
    </div>
    <form action="{{ route('join.store') }}" method="POST">
        @csrf
        <div class="card shadow">
            <div class="card-body">
                <div class="form-row">
                    <div class="col d-flex justify-content-center mt-3">
                        <select  name="class_division_id" class="form-select form-control form-control-sm w-50 " type="text" placeholder="class numeric...." aria-label="Default select example">
                            <option value="empty" selected>Class numeric/Division name</option>
                            @foreach ($class as $item) 
                                   
                                    <option class="text-capitalize" value="{{ $item->id}}">{{ $item->grade->numeric.'    '.$item->division->name }}</option>
                                
                            @endforeach
                          
                        </select>
                        <button class="btn btn-sm btn-primary  float-right" type="submit"><i class="icon ion-android-add"></i>&nbsp;Join</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
