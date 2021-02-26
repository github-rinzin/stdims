@extends('layouts.student')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
</div>
<form class="container">
    <div class="card">
        <div class="card-header">
            <div class="card-text">
                <p>Fill in the following fields.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group"><label>Subject</label><input class="form-control" type="text"></div>
            <div class="form-group"><label>Content</label><textarea class="form-control"></textarea></div>
            <div class="form-group"><a href="#"><button class="btn btn-primary" type="button"><i class="fa fa-check"></i>&nbsp;Submit</button></a></div>
        </div>
    </div>
</form>

@endsection
