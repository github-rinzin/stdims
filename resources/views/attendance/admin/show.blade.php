@extends('layouts.admin')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Attendance</h3><a href="admin-dashboard-index.html"><button class="btn ml-auto text-uppercase" type="button"><i class="fa fa-long-arrow-left"></i>&nbsp;Back&nbsp;</button></a></div>
</div>
<div class="container-fluid">
    <form>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Day</th>
                                <th class="text-center">Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>20/07/2021</td>
                                <td>Monday</td>
                            <form>
                                @csrf
                                <td style="padding: 0;">
                                    <div class="form-group align-content-center" style="margin-bottom: 0;">
                                        <input type="checkbox" style="margin: 0px;margin-right: 0;margin-left: 46%;margin-top: 19px;">
                                    </div>
                                </td>
                                <td>
                                    <button class="btn btn-primary" type="button">Update</button>
                                </td>
                            </form>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><strong>#</strong></td>
                                <td><strong>Date</strong></td>
                                <td><strong>Day</strong></td>
                                <td class="text-center"><strong>Status</strong></td>
                                <td><strong>Actions</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="form-row justify-content-end">
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
    </form>
</div>

@endsection