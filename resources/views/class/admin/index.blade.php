@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Class;</h3>
        @include('components.previous')
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header"><a href="class-create.html"><button class="btn btn-primary" type="button"><i class="fa fa-plus"></i>&nbsp; Add</button></a></div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
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
                            <td class="text-center"><a href="" style="padding: 5px;" data-toggle="modal" data-target="#delete-class"><i class="far fa-trash-alt"></i></a></td>
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
@endsection