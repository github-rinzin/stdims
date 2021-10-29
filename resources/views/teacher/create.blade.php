@extends('layouts.admin')
@section('content')
    <div class="container-fluid w-75">
        @include('components.alert')
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Teacher</h3>
            @include('components.previous')
        </div>
       
        <div class="card shadow">
            <div class="card-body">
            <form class="container w-75" action="{{ route('teacher.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>Teacher Id</label>
                                <input name="id" class=" form-control form-control-sm" type="text" @error('id')
                                    is-invalid
                                @enderror required>
                                @error('id')
                                    <div class="alert alert-danger">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label> Full Name</label>
                                <input name="name" class="form-control form-control-sm" @error('name')
                                    is-invalid
                                @enderror type="text" required>
                                @error('name')
                                    {{$message}}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input name="email" class=" form-control form-control-sm" type="email" required>
                            </div>
                        </div>
                        <div class="col">
                            <label>Password</label>
                            <input name="password" class=" form-control form-control-sm" type="password" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" class=" form-control form-control-sm " type="text" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Class</label>
                                <select  name="class_division_id" class="form-select form-control form-control-sm " type="text" placeholder="class" aria-label="Default select example">
                                    <option value="empty" selected>grade/division/stream</option>
                                    @foreach ($classDivisions as $class) 
                                        @if($class->teacher == null)
                                        <option class="text-capitalize" value="{{ $class->id}}">
                                            {{ $class->grade->numeric.'    '.$class->division->name}}
                                            @if ($class->stream_id != null )
                                                {{$class->stream->name }}
                                            @endif
                                        </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <button class="btn btn-sm btn-primary" type="submit">
                                Add&nbsp;
                                <i class="icon ion-person-add"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection