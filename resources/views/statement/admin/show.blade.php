@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-3">
        <h3 class="text-dark mb-0">Statement&nbsp;</h3>
        @include('components.previous')
    </div>
</div>
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header">
            <p style="margin-bottom: 0px;">Rinzin Dorji&nbsp;</p>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group"><label>Subject</label><input class="form-control border-0" type="text" readonly="" disabled=""></div>
                <div class="form-group"><label>Date</label><input class="form-control border-0" type="text" readonly="" disabled=""></div>
                <div class="form-group"><label>Content</label><textarea class="form-control form-control-lg border-0" readonly="" rows="5" disabled=""></textarea></div>
                <div class="form-group justify-content-end"><button class="btn btn-primary bg-danger ml-auto" type="button" data-toggle="modal" data-target="#delete-statement"><i class="icon ion-trash-a"></i>&nbsp;Delete</button></div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="delete-statement">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Warning!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                	<span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the statement ?</p>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Yes</button>
           	</div>
        </div>
    </div>
</div>
@endsection
