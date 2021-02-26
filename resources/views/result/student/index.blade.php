@extends('layouts.student')
@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Result</h3>
        @include('components.previous')
    </div>
</div>
<div class="container">
    
    <div class="card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>12</td>
                        <td>2012</td>
                        <td><a href=""><i class="fa fa-eye"></i></a></td>
                    </tr>  
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
