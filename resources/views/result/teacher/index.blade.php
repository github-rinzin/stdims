@extends('layouts.teacher')
@section('content')
<div class="container">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow ">
        @if (isset(auth()->user()->teacher->classDivision))
        <div class="card-header">
           <div class="float-left">
               <a href="{{route('result.create')}}" class="btn btn-sm btn-dark">upload result</a>
            </div>
        </div>
        <div class="card-body">
            @include('components.result.table',['results' => $results ?? ''])
        </div>
        @else 
        <div class="card-header">
            {{__('This option is currently not available!')}}
        </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
    </div>
</div>
@endsection
    