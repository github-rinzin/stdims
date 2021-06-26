@extends('layouts.admin')
@section('content')
<div class="container-fluid w-75">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">{{$student->name.' '.$student->classDivision->grade->numeric.' '.$student->classDivision->division->name}}
            @if (isset($student->classDivision->stream))
                {{$student->classDivision->stream->name}}
            @endif
        </h3>
        @include('components.previous')
    </div>
    <div class="card shadow">
        @if (count($results) != 0)
        <div class="card-body d-flex justify-content-center">
            <table class="table table-bordered table-sm w-50">
                <thead class="bg-dark text-light">
                    <th>Subject Name</th>
                    <th>Marks Obtained</th>
                </thead>
                <tbody>
                    <tr>
                        <td>English</td>
                        <td>{{$results[0]->english}}</td>
                    </tr>
                    <tr>
                        <td>Dzongkha</td>
                        <td>{{$results[0]->dzongkha}}</td>
                    </tr>
                    @if (isset($results[0]->bmaths))
                    <tr>
                        <td>Maths</td>
                        <td>{{$results[0]->bmaths}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->maths))
                    <tr>
                        <td>Maths</td>
                        <td>{{$results[0]->maths}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->physics))
                        <tr>
                            <td>Physics</td>
                            <td>{{$results[0]->physics}}</td>
                        </tr>
                        <tr>
                            <td>Chemistry</td>
                            <td>{{$results[0]->chemistry}}</td>
                        </tr>
                        <tr>
                            <td>Biology</td>
                            <td>{{$results[0]->biology}}</td>
                        </tr>
                    @endif
                    @if (isset($results[0]->history))
                    <tr>
                        <td>History</td>
                        <td>{{$results[0]->history}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->history))
                    <tr>
                        <td>Geography</td>
                        <td>{{$results[0]->geography}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->eco_it))
                    <tr>
                        <td>Eco/IT</td>
                        <td>{{$results[0]->eco_it}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->media))
                    <tr>
                        <td>Media</td>
                        <td>{{$results[0]->media}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->rigzhung))
                    <tr>
                        <td>Rigzhung</td>
                        <td>{{$results[0]->rigzhung}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->accounts))
                    <tr>
                        <td>Accounts</td>
                        <td>{{$results[0]->accounts}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->commerce))
                    <tr>
                        <td>Commerce</td>
                        <td>{{$results[0]->commerce}}</td>
                    </tr>
                    @endif
                    @if (isset($results[0]->science))
                    <tr>
                        <td>Science</td>
                        <td>{{$results[0]->science}}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        @else
        <div class="card-header">
            No Records Found                        
        </div>
        @endif
    </div>
</div>
@endsection