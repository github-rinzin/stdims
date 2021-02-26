@extends('layouts.teacher')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow">
        <div class="card-header"><a href="result-pp-vi-add.html"><button class="btn btn-primary" type="button"><i class="icon ion-plus-round"></i>&nbsp;Add Result&nbsp;</button></a></div>
        <div class="card-header"><a href="result-pp-vi-index.html"><button class="btn btn-primary" type="button"><i class="icon ion-eye"></i>&nbsp;View</button></a></div>
    </div>
</div>
@endsection