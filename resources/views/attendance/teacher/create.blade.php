@extends('layouts.teacher')
@section('content')

<div class="container-fluid w-75">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Attendance</h3>
    @include('components.previous')
</div>
<form>
    <div class="card shadow">
        <div class="card-header ">
            <div class="m-0 p-0 form-group form-inline">
                <label>Attendance for :&nbsp;&nbsp;</label>
                <input class="form-control" type="date">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>12180038</td>
                            <td>Rinzin Dorji</td>
                            <td class="text-center">
                                <input type="checkbox" style="margin-left: 0px;" checked="">
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <button class="float-right btn btn-sm btn-primary" type="button">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
    
 @endsection