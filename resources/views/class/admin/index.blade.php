@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    @if (session('msg'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('msg') }}
        <button id="btn-close" type="button" class="btn-close float-right btn mb-2 pt-0" data-bs-dismiss="alert" aria-label="Close">x</button>
      </div>
    @endif
 
    <script type="text/javascript">
        $("#btn-close").click(function(){
            $(".alert-dismissible").hide();
        });
    </script>

    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class</h3>
        @include('components.previous')
    </div>
    <div class="card">
        
        <div class="card-header m-0">
            <a class="btn btn-primary" href="{{ route('class.create') }}">   
                New Class   
            </a>
        </div>
        <div class="card-body container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-sm table-bordered dataTable my-0 " id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Class</th>
                                    <th class="text-left">Section</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classDivisions as $classDivision)
                                    
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $classDivision->grade->numeric }}</td>
                                    <td>{{ $classDivision->division->name }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="{{ '#delete-class'.$classDivision->id }}">
                                            <i class="far fa-trash-alt"></i> &nbsp; delete
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade" role="dialog" tabindex="-1" id="{{ 'delete-class'.$classDivision->id }}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Confirm Delete</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                                <div class="modal-body text-center">
                                                    <p>Are you sure you want to delete the class ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-sm btn-light" type="button" data-dismiss="modal">Close</button>
                                                    <form class="" action="{{route('class.destroy', $classDivision->id)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn   btn-danger" type="submit">Yes, Confirm</button>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td class="text-left"><strong>Class</strong></td>
                                    <td class="text-left"><strong>Section</strong></td>
                                    <td class="text-center"><strong>Actions</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>   
                </div>
                <div class="col-md-6">
                    <form action="{{ route('grade.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                          <label for="gradeNumeric" class="form-label text-capitalize">Grade numeric</label>
                          <input name="numeric" type="text" class="form-control" id="gradeNumeric">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    <form class="mt-4" action="{{ route('division.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                        <label for="divisionName" class="form-label text-capitalize">Division name</label>
                        <input name="division_name" type="text" class="form-control" id="divisionName">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection