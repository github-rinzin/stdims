@extends('layouts.student')
@section('content')

<div class="container">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
</div>
<form class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-text">
                <p>Date : 12/FEB/2021</p>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group"><label>Subject</label><input class="form-control" type="text" readonly="" disabled=""></div>
            <div class="form-group"><label>Content</label><textarea class="form-control" disabled="" readonly=""></textarea></div>
        </div>
    </div>
</form>
@endsection

