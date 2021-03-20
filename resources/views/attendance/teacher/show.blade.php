@extends('layouts.teacher')
@section('content')
   
<div class="container-fluid w-75">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">{{  __('Rinzin Dorji') }}</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            @if($attendances->isEmpty())
               <div class="card-header">
                   <h1 class="card-title">NO RECORDS</h1>
               </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                @else
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                      
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-left">Date</th>
                                <th class="text-left">Day</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($attendances as $attendance)
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $attendance->created_at->format('d-m-Y')}}</td>
                            <td>{{ $attendance->created_at->translatedFormat('l')}} </td>
                            <form action="{{ route('attendance.update', $attendance->id ) }}" method="post">
                                @csrf
                                @method('put')
                                <td class="text-center">
                                    <input name="status" type="checkbox"
                                      @if($attendance->status == 'true') 
                                     checked>
                                      @else
                                        >
                                     @endif
                                     
                                </td>
                                <td class="text-center">
                                    <a href="#">
                                        <button class="btn btn-sm btn-success" type="submit">
                                            save
                                        </button>
                                    </a>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>#</strong></td>
                            <td><strong>Date</strong></td>
                            <td class="text-left"><strong>Day</strong></td>
                            <td class="text-center"><strong>Status</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div>
            <div class="row justify-content-end">
                <div class="col-md-6">
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