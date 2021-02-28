@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class</h3>
        @include('components.previous')
    </div>
    <div class="card">
        <div class="card-header m-0">
            {{-- <a href="class-create.html"><button class="btn btn-primary" type="button"><i class="fa fa-plus"></i>&nbsp; Add</button></a> --}}
            <form action="" method="">
                @csrf
                <div class="form-row m-0">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="text" placeholder="class numeric....">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input class="form-control form-control-sm" type="text" placeholder="division/section name...">
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-sm btn-primary" type="button">
                            <i class="icon ion-ios-plus-outline"></i>Add
                        </button>
                    </div>
                </div>
               
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Class</th>
                            <th class="text-left">Section</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>B</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#delete-class">
                                    <i class="far fa-trash-alt"></i> &nbsp; delete
                                </button>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td class="text-left"><strong>Class</strong></td>
                            <td class="text-left"><strong>Section</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="delete-class">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body text-center">
                <p>Are you sure you want to delet the class ?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-sm btn-light" type="button" data-dismiss="modal">Close</button>
                <button class="btn  btn-sm btn-danger" type="button">Yes</button>
            </div>
        </div>
    </div>
</div>
@endsection