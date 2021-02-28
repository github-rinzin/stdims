@extends('layouts.admin')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class&nbsp;</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="card-body">
                <form class="container">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>Class Numeric</label><input class="form-control" type="email"></div>
                        </div>
                        <div class="col"><label>Section/Division Name</label><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-sm btn-primary" type="button"><i class="icon ion-ios-plus-outline"></i>&nbsp;Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection