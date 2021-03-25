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
                                <input name="id" class=" form-control form-control-sm {{ $errors->has('id') ? 'error' : '' }}" type="text">
                                     @if ($errors->has('id'))
                                        <div class="error">
                                             {{ $errors->first('id')}}
                                        </div>
                                     @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label> Full Name</label>
                                <input name="name" class=" form-control form-control-sm {{ $errors->has('name') ? 'error' : '' }} " type="text">
                                @if ($errors->has('name'))
                                        <div class="error">
                                             {{ $errors->first('name')}}
                                        </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input name="email" class=" form-control form-control-sm {{ $errors->has('email') ? 'error' : '' }} " type="email" >
                                @if ($errors->has('email'))
                                        <div class="error">
                                             {{ $errors->first('email')}}
                                        </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <label>Password</label>
                            <input name="password" class=" form-control form-control-sm {{ $errors->has('password') ? 'error' : '' }} " type="text">
                            @if ($errors->has('password'))
                                    <div class="error">
                                         {{ $errors->first('password')}}
                                    </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" class=" form-control form-control-sm {{ $errors->has('username') ? 'error' : '' }} " type="text">
                                @if ($errors->has('username'))
                                     <div class="error">
                                          {{ $errors->first('username')}}
                                    </div>
                                @endif 
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Class</label>
                                <select  name="class_division_id" class="form-select form-control form-control-sm " type="text" placeholder="class" aria-label="Default select example">
                                    <option value="empty" selected>grade/division/stream</option>
                                    @foreach ($classDivisions as $class) 
                                        <option class="text-capitalize" value="{{ $class->id}}">
                                            {{ $class->grade->numeric.'    '.$class->division->name}}
                                            @if ($class->stream_id != null )
                                                {{$class->stream->name }}
                                            @endif
                                        </option>
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
            <div class="card-footer">

            </div>
        </div>
    </div>
@endsection