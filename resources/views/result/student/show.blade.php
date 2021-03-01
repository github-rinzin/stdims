@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous')    
    </div>
    <div class="card shadow">
        <div class="card-body justify-content-center">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0 w-75 m-auto" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Subject</th>
                            <th>Marks Obtained</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>English</td>
                            <td>65</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Subject</th>
                            <th>Marks Obtained</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
