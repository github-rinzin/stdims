@extends('layouts.student')
@section('content')


<form action="{{ route('statement.store') }}" class="container-fluid w-75" method="POST">
    @csrf
    @method('post')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label>Subject</label>
                <input name="subject" class="form-control" type="text" @error('subject')
                    is-invalid
                @enderror required>
                @error('subject')
                    <div class="alert alert-danger mt-1 w-100">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Content</label>
                <textarea name="content" class="form-control form-control-lg" rows="8" @error('content')
                    is-invalid
                @enderror required>
            </textarea>
            @error('content')
                <div class="alert alert-danger mt-2 w-100">{{$message}}</div>
            @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i>&nbsp;Submit</button>
            </div>
        </div>
    </div>
</form>

@endsection
