@extends('layouts.admin')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
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
                            <th class="text-left">Class</th>
                            <th class="text-left">Section</th>
                            <th class="text-left">Class Teacher</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>3</td>
                            <td>A</td>
                            <td>Phuntsho Choden</td>
                            <td class="text-center">
                                {{-- <form class="text-center"><a href="statement-student-index.html"><i class="fa fa-eye"></i></a></form> --}}
                                <a href="">
                                    <button class="btn btn-sm btn-primary">
                                        view
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center">#</td>
                            <td><strong>Class</strong></td>
                            <td><strong>Section</strong></td>
                            <td class="text-left"><strong class="text-center">Class Teacher</strong></td>
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
@endsection