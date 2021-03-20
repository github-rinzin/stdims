@extends('layouts.student')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h4 class="text-dark mb-0">Attendance</h4>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold">Attandance Information</p>
        </div>
        <div class="card-body">
            @if($attendances->isEmpty())
               <div class="card-header">
                   <h1 class="card-title">NO RECORDS</h1>
               </div>
               @else
               
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Serial Number</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $attendance->created_at->translatedFormat('l')}}</td>
                            <td>{{ $attendance->created_at->format('d-m-Y')}}</td>
                            <td class="text-center">
                                @if ($attendance->status=='true')
                                    Present
                                @else
                                    Absent
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Serial Number</th>
                            <th>Day</th>
                            <th>Date</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            @endif
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                           {{ $attendances->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
