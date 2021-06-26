@extends('layouts.teacher')
@section('content')


<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Statement&nbsp;</h3>
        @include('components.previous') 
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-left">Subject</th>
                            <th class="text-left">Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($statements as $statement)   
                        <tr>
                            <td class="text-center">{{ $i++ }}</td>
                            <td>{{ $statement->subject}}</td>
                            <td>{{ $statement->created_at->format('Y-m-d')}}</td>
                            <td class="text-center">
                                <a class="text-center text-dark" href="{{ route('statement.show', $statement->id ) }}" >
                                   <button class="btn btn-sm btn-primary">view</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center"><strong>#</strong></td>
                            <td class="text-left"><strong>Subject</strong></td>
                            <td class="text-left"><strong>Date&nbsp;</strong></td>
                            <td class="text-center"><strong>Actions</strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            {{ $statements->links()}}
        </div>
    </div>
</div>
@endsection