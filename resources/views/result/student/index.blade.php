@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            @include('components.result.table',['results', $results])
        </div>
        
    </div>
    
</div>


@endsection
