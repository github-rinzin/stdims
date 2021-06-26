@extends('layouts.teacher')
@section('content')
<div class="container w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Create/Upload Result</h3>
        @include('components.previous') 
    </div>
    <div class="card">
        <div class="card-header">
            Please select a file to upload
        </div>
        <div class="card-body">
            <form action="{{ route('result.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="file">Excel file (.xlsx only)</label>
                <input type="file" name="file" id="" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                <button class="btn btn-sm btn-dark float-right" type="submit">
                    Upload
                </button>
            </form>
        </div>
        <div class="card-footer">
            @include('components.result.resultformatfile')
        </div>
    </div>
</div>
@endsection
