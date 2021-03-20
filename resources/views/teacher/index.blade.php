@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Teacher </h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header">
            <a class="btn btn-sm btn-primary float-right" href="{{ route('teacher.create') }}">Add New Teacher</a>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-bordered table-sm dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher) 
                           
                        <tr>
                            <td>{{ $i++}}</td>
                            <td class="text-capitalize">{{ $teacher->name }}</td>
                            <td>{{ $teacher->ClassDivision->grade->numeric }}</td>
                            <td>{{ $teacher->classDivision->division->name  }}</td>
                            <th>
                            
                            <form action="{{ route('teacher.destroy', $teacher->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn-dark btn-sm btn " type="submit">
                                    delete
                                </button>
                            </form> 
                            </th>
                        </tr>
                        @endforeach
                   
                    
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Grade</strong></td>
                            <td><strong>Section</strong></td>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="float-right">
                        {{ $teachers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection