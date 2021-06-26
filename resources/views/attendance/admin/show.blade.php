@extends('layouts.admin')
@section('content')

<div class="w-75 container-fluid">
    @include('components.alert')
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Attendance</h3><a href="admin-dashboard-index.html">
        @include('components.previous')
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table-bordered table table-sm dataTable " id="dataTable">
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
                        @foreach ($attendances as $attendance)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $attendance->date }}</td>
                            <td>{{ $attendance->created_at->translatedFormat('l')}}</td>
                        <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
                            @csrf
                            @method("put")
                            <td class="text-center">
                                <input name="status" type="checkbox"
                                    @if($attendance->status == 'true') 
                                    checked>
                                    @else
                                    >
                                    @endif
                            </td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="submit">Update</button>
                            </td>
                        </form>
                        </tr>
                        @endforeach
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
                   
                        {{$attendances->links()}}
                    
                </div>
            </div>
        </div>
    </div>
    
</div>

@endsection