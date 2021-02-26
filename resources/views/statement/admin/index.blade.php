@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement</h3>
        @include('components.previous')
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
            <div class="card-text">
                <p style="margin-bottom: 0;">Student Name: Rinzin Dorji&nbsp;</p>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-left">#</th>
                            <th class="text-left">Subject</th>
                            <th class="text-left">Date of Statement</th>
                            <th class="text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2376821</td>
                            <td>Drinking&nbsp;</td>
                            <td>1/JAN/2020</td>
                            <td>
                            	<a class="text-center text-dark" href="" style="padding: 11px;">
                            		<i class="fa fa-eye"></i>
                            	</a>
                            	<a class="text-center text-dark" href="#" style="padding: 11px;" data-toggle="modal" data-target="#delete-statement">
                            		<i class="icon ion-trash-a"></i>
                            	</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><strong>#</strong></td>
                            <td class="text-left"><strong>Subject</strong></td>
                            <td class="text-left"><strong>Date of Statement</strong></td>
                            <td class="text-left"><strong>Actions</strong></td>
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

<div class="modal fade" role="dialog" tabindex="-1" id="delete-statement">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning!</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
            <div class="modal-body">
                <p>You are about to delete the statement.</p>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Okey</button></div>
        </div>
    </div>
</div>
@endsection