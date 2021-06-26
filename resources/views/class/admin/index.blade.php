@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    @include('components.alert')

    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class</h3>
        @include('components.previous')
    </div>
    <div class="card">
        
        <div class="card-header m-0">
            <a class="btn btn-sm btn-info" href="{{ route('class.create') }}">   
                New Class   
            </a>
        </div>
        <div class="card-body container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-sm table-bordered dataTable my-0 " id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Class</th>
                                    <th class="text-left">Section</th>
                                    <th class="text-left">Stream</th>
                                    <th class="text-left">Class Teacher</th>
                                    <th class="text-left">Total student</th>
                                    <th class="text-capitalize">actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classDivisions as $classDivision)
                                    
                                <tr class="text-capitalize">
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $classDivision->grade->numeric }}</td>
                                    <td>{{ $classDivision->division->name }}</td>
                                    
                                    @if ($classDivision->stream_id != null)
                                        <td>
                                            {{$classDivision->stream->name}}
                                        </td>
                                    @else
                                        <td class="">
                                            NA
                                        </td>
                                    @endif
                                    
                                    @if ($classDivision->teacher != null)
                                        <td>
                                            {{$classDivision->teacher->name}}
                                        </td>
                                    @else
                                    <td class="">
                                       NA
                                    </td>
                                    @endif
                                    
                                    @if ($classDivision->teacher != null )
                                        <td>
                                            {{$classDivision->teacher->totalStudents() }}
                                        </td>
                                    @else
                                        <td class="">
                                            NA
                                        </td>
                                    @endif

                                    @if ($classDivision->teacher != null && $classDivision->teacher->totalStudents() != 0)
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{route('index.class.detail', $classDivision->teacher->id)}}">detail</a>
                                        </td>
                                    @else
                                        <td class="">
                                            NA
                                        </td>
                                    @endif

                                </tr>                            
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td class="text-left"><strong>Class</strong></td>
                                    <td class="text-left"><strong>Section</strong></td>
                                    <th class="text-left">Stream</th>
                                    <th class="text-left">Class Teacher</th>
                                    <th class="text-left">Total student</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>   
                </div>
                <div class="col-md-5">
                    <form action="{{ route('grade.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                          <label for="gradeNumeric" class="form-label text-capitalize">Grade numeric</label>
                          <input name="numeric" type="text" class="form-control form-control-sm" id="gradeNumeric" required @error('numeric')
                              is-invalid
                          @enderror>
                        </div>
                        @error('numeric')
                            <div class="alert alert-danger mt-1">{{$message}}</div>
                        @enderror
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                    <form class="mt-4" action="{{ route('division.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                        <label for="divisionName" class="form-label text-capitalize">Division name</label>
                        <input name="division_name" type="text" class="form-control form-control-sm" id="divisionName" required>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection