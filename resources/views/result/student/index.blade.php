@extends('layouts.student')
@section('content')

<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive table" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-sm table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Class Numeric</th>
                            <th>Year</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($results as $result)
                         <tr>
                            <td class="text-center pb-0">{{ $i++ }}</td>
                            <td class="pb-0">12uu</td>
                            <td class="pb-0">2012</td>
                            <td class="pb-0">
                                <a href="">
                                    <button class="btn  btn-sm btn-primary">
                                        view
                                    </button>
                                </a>
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Class Numeric</th>
                            <th>Year</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        
    </div>
    
</div>


@endsection
