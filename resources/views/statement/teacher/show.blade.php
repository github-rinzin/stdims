@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">{{ __('Pema Namgay') }}</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow">
        <div class="card-body">
            <form>
                <div class="form-group"><label>Subject</label><input class="form-control border-0" type="text" readonly="" disabled=""></div>
                <div class="form-group"><label>Content</label><textarea class="form-control form-control-lg border-0" readonly="" rows="10" disabled=""></textarea></div>
            </form>
        </div>
    </div>
</div>        
@endsection