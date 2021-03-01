@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Student</h3>
        @include('components.previous')
    </div>
    <div class="alert alert-success" role="alert" style="margin: 1px;margin-left: 0;margin-right: 0;margin-bottom: 14px;margin-top: -16px;"><span><strong>Updated Successfully</strong>.</span></div>
    <div class="card shadow">
        <div class="card-header">
            <form class="form-inline mr-auto" target="_self">
                <div class="form-group"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search by name...."></div><i class="fa fa-search ml-2" style="font-size: 20pt;"></i>
                <a
                    class="ml-auto" href="statement-class-index.html"></a>
            </form>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Student Number</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Age</th>
                            <th class="text-left">CID</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>2376821</td>
                            <td>Rinzin Dorji</td>
                            <td>21</td>
                            <td>11505000945</td>
                            <td class="text-center">
                               
                                <button class="btn btn-sm btn-primary">
                                    view
                                </button>
                                <button class="btn btn-sm btn-dark" data-target="#delete-student-personal-detail" data-toggle="modal">
                                    delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <td><strong>Student Number</strong></td>
                            <td><strong>Name</strong></td>
                            <td><strong>Age</strong></td>
                            <td class="text-left"><strong class="text-center">CID</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="delete-student-personal-detail">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>You are about to delete the detail permenantly !</p>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Delete</button></div>
        </div>
    </div>
</div>
@endsection