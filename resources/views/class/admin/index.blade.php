@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
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
                <div class="col-md-6">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table table-sm table-bordered dataTable my-0 " id="dataTable">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-left">Class</th>
                                    <th class="text-left">Section</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classDivisions as $classDivision)
                                    
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $classDivision->grade->numeric }}</td>
                                    <td>{{ $classDivision->division->name }}</td>
                                    {{-- <td class="text-center">
                                        <button id="{{$classDivision->id}}" type="button" class="btn btn-sm btn-dark delete-button" data-href="{{route('class.destroy', $classDivision->id)}}" data-toggle="modal" data-target="#exampleModal">
                                            <i class="far fa-trash-alt"></i> &nbsp; delete
                                        </button>
                                    </td> --}}
                                </tr>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation !</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                Please confirm to delete.
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                            
                                            <form action="{{route('class.destroy', $classDivision->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{$classDivision->id}}">
                                                <button id="confirm-class-delete" type="submit" class="btn btn-primary btn-sm">Confirm, Delete</button>
                                            </form>    
                                        </div>
                                    </div>
                                    </div>
                                </div>                                
                                @endforeach
                                {{-- <script>
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $(document).ready(function () {
                                        $('.delete-button').click(function (e) { 
                                            e.preventDefault();
                                            $.ajax({
                                                url: $(this).attr('data-href'),
                                                type: 'DELETE',
                                                data : {
                                                    "id": $(this).attr('id')
                                                },
                                                success: function (response) {
                                                    alert(response);
                                                }
                                            });
                                        });
                                    });
                                    </script> --}}
                                
                                <!-- Modal -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>#</strong></td>
                                    <td class="text-left"><strong>Class</strong></td>
                                    <td class="text-left"><strong>Section</strong></td>
                                    {{-- <td class="text-center"><strong>Actions</strong></td> --}}
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
                          <input name="numeric" type="text" class="form-control form-control-sm" id="gradeNumeric">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                    <form class="mt-4" action="{{ route('division.store') }}" method="POST"> 
                        @csrf
                        <div class="mb-3">
                        <label for="divisionName" class="form-label text-capitalize">Division name</label>
                        <input name="division_name" type="text" class="form-control form-control-sm" id="divisionName">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection