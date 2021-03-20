@extends('layouts.teacher')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow pt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <a href="result-pp-vi-add.html" class="float-left mr-3">
                        <form action="{{ route('result.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="">
                            <button class="btn btn-sm btn-primary mt-2" type="submit">
                                <i class="icon ion-plus-round"></i>&nbsp;Add Result
                            </button>
                        </form>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <ul>
                            <li><p>Class 7, 8.<a href="/sample/result_7_8.xlsx">download format</a></p></li>
                            <li><p>Class 9, 10. <a href="/sample/result_9_10.xlsx">download format</a></p></li>
                            <li><p>Class 11, 12 arts. <a href="/sample/teacher.xlsx">download format</a></p></li>
                            <li><p>Class 7, 8. <a href="/sample/teacher.xlsx">download format</a></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection