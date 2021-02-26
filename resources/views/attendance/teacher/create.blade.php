@extends('layouts.teacher')
@section('content')

<div class="container-fluid">
<div class="d-sm-flex justify-content-between align-items-center mb-4">
    <h3 class="text-dark mb-0">Attendance</h3>
    @include('components.previous')
</div>
<form>
    <div class="card shadow">
        <div class="card-header py-3">
            <div class="form-group form-inline"><label>Attendance for :&nbsp;&nbsp;</label><input class="form-control" type="date"></div>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Student Number</th>
                            <th>Student Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dorji</td>
                            <td class="text-center"><input type="checkbox" style="margin-left: 0px;" checked=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-row">
                <div class="col-md-6"><button class="btn btn-primary" type="button"><i class="far fa-calendar-plus"></i>&nbsp; Submit</button></div>
            </div>
        </div>
    </div>
</form>
</div>
    
 @endsection