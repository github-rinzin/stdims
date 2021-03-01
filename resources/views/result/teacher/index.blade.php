@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow pt-3">
        <div class="card-body">
            <a href="result-pp-vi-add.html" class="float-left mr-3">
                <button class="btn btn-sm btn-primary" type="button">
                    <i class="icon ion-plus-round"></i>&nbsp;Add Result
                </button>
            </a>
            <a href="">
                <button class="btn btn-sm btn-primary " type="button">
                    <i class="icon ion-eye"></i>&nbsp;View
                </button>
            </a>
        </div>
    </div>
</div>
@endsection