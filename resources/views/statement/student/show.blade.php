@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0 ml-4">Statement</h3>
        @include('components.previous')
    </div>
    <form class="container">
        <div class="card shadow">
            <div class="card-header ">
                <div class="card-text float-right">
                    <div class="card-title">
                        12/FEB/2021
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group"><label>Subject</label><input class="form-control" type="text" readonly="" disabled=""></div>
                <div class="form-group"><label>Content</label><textarea class="form-control" disabled="" readonly="" rows="10"></textarea></div>
            </div>
        </div>
    </form>
</div>
@endsection

