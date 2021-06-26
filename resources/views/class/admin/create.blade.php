@extends('layouts.admin')
@section('content')

<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class&nbsp;</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="card-body">
                <form class="container" action="{{ route('class.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <select  name="gradeId" class="form-select form-control form-control-sm" type="text" placeholder="class numeric...." aria-label="Default select example" required>
                                <option value="empty" selected>grade</option>
                                @foreach ($grades as $grade) 
                                    <option value="{{ $grade->id}}">{{ $grade->numeric}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select name="divisionId" class="form-select form-control form-control-sm"  placeholder="division/section name..." aria-label="Default select example" required>
                                <option value="empty" selected>division</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id}}">{{ $division->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select name="streamId" class="form-select form-control form-control-sm"  placeholder="division/section name..." aria-label="Default select example">
                                <option value="null" selected>stream</option>
                                @foreach ($streams  as $stream)
                                    <option value="{{ $stream->id}}">{{ $stream->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-sm btn-primary mt-3" type="submit"><i class="icon ion-ios-plus-outline"></i>&nbsp;Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection