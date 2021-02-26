@extends('layouts.student')
@section('content')
<div class="container">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Join Class</h4>
        @include('components.previous')
    </div>
</div>
    <div class="container">
        <form>
            <div class="card">
                <div class="card-header">
                    <div class="card-text">
                        <p><i class="icon ion-plus"></i>&nbsp;Join Class</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group"><label>Class/Grade</label><input class="form-control" type="text"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Section/Division</label><input class="form-control" type="text"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col"><button class="btn btn-primary" type="button"><i class="icon ion-android-add"></i>&nbsp;Join</button></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
