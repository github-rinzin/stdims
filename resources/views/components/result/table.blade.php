@if ('can:is-teacher')
    @if (isset(auth()->user()->teacher->classDivision))
        @if (auth()->user()->teacher->classDivision->grade->numeric  >= 11)
            @if (auth()->user()->teacher->classDivision->stream->id == 1)
                <table class="table table-bordered table-sm">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th colspan="2">Student Detail</th>
                            <th colspan="10">Subject name</th>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>English</th>
                            <th>Dzongkha</th>
                            <th>Maths</th>
                            <th>Biology</th>
                            <th>Physics</th>
                            <th>Chemistry</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                    @foreach ($results as $result)
                            <td>{{$result->student->code}}</td>
                            <td>{{$result->student->name}}</td>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->biology}}</td>
                            <td>{{$result->physics}}</td>
                            <td>{{$result->chemistry}}</td>                        
                    @endforeach
                    </tbody>
                </table>
            @elseif(auth()->user()->teacher->classDivision->stream->id == 2)
                <table class="table table-bordered table-sm">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th colspan="2">Student Detail</th>
                            <th colspan="6">Subject name</th>
                            <th colspan="2">Statics</th>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>English</th>
                            <th>Dzongkha</th>
                            <th>B-Maths</th>
                            <th>Commerce</th>
                            <th>Accounts</th>
                            <th>Eco/IT</th>
                            <th>Total</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                    @foreach ($results as $result)
                    <tr>
                            <td>{{$result->student->code}}</td>
                            <td>{{$result->student->name}}</td>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->bmaths}}</td>
                            <td>{{$result->commerce}}</td>
                            <td>{{$result->accounts}}</td>
                            <td>{{$result->eco_it}}</td>  
                            <td>
                                {{
                                    ($result->english +
                                    $result->dzongkha +
                                    $result->bmaths +
                                    $result->commerce +
                                    $result->accounts +
                                    $result->eco_it ) 
                                }}
                            </td>  
                            <td>
                                {{
                                    ($result->english +
                                    $result->dzongkha +
                                    $result->bmaths +
                                    $result->commerce +
                                    $result->accounts +
                                    $result->eco_it ) / 6 .'%'
                                }}
                            </td>  
                        </tr>                    
                    @endforeach
                    </tbody>
                </table>
            @elseif(auth()->user()->teacher->classDivision->stream->id == 3)
            <table class="table table-bordered table-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="2">Student Detail</th>
                        <th colspan="8">Subject name</th>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>English</th>
                        <th>Dzongkha</th>
                        <th>B-Maths</th>
                        <th>History</th>
                        <th>Geography</th>
                        <th>Eco/IT</th>
                        <th>Media</th>
                        <th>Rigzhung</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                @foreach ($results as $result)
                <tr>
                        <td>{{$result->student->code}}</td>
                        <td>{{$result->student->name}}</td>
                        <td>{{$result->english}}</td>
                        <td>{{$result->dzongkha}}</td>
                        <td>{{$result->bmaths}}</td>
                        <td>{{$result->history}}</td>
                        <td>{{$result->geography}}</td>
                        <td>{{$result->eco_it}}</td>  
                        <td>{{$result->media}}</td>
                        <td>{{$result->rigzhung}}</td>
                    </tr>                    
                @endforeach
                </tbody>
                <tfoot class="bg-dark text-light">
                        <th>Id</th>
                        <th>Name</th>
                        <th>English</th>
                        <th>Dzongkha</th>
                        <th>B-Maths</th>
                        <th>History</th>
                        <th>Geography</th>
                        <th>Eco/IT</th>
                        <th>Media</th>
                        <th>Rigzhung</th>
                </tfoot>
            </table>
            @endif
        @elseif(auth()->user()->teacher->classDivision->grade->numeric  >= 9)
            <table class="table table-bordered table-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="2">Student Detail</th>
                        <th colspan="10">Subject name</th>
                    </tr>
                    <tr class="text-capitalize">
                        <th>id</th>
                        <th>name</th>
                        <th>english</th>
                        <th>dzongkha</th>
                        <th>maths</th>
                        <th>history</th>
                        <th>geography</th>
                        <th>biology</th>
                        <th>physics</th>
                        <th>chemistry</th>
                        <th>ict</th>
                        <th>eco/it</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    @foreach ($results as $result)
                        <tr>
                            <td>{{$result->student->id}}</td>
                            <td>{{$result->student->name}}</td>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->history}}</td>
                            <td>{{$result->geography}}</td>
                            <td>{{$result->biology}}</td>
                            <td>{{$result->physics}}</td>
                            <td>{{$result->chemistry}}</td>
                            <td>{{$result->ict}}</td>
                            <td>{{$result->eco_it}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(auth()->user()->teacher->classDivision->grade->numeric  >= 7)
            <table class="table table-bordered table-sm ">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="2">Student Detail</th>  
                        <th colspan="7">Subject name</th>
                    </tr>
                    <tr> 
                        <th>Student Id</th>
                        <th>Name</th>

                        <th>English</th>
                        <th>Dzongkha</th>
                        <th>Maths</th>
                        <th>History</th>
                        <th>Geography</th>
                        <th>Science</th>
                    </tr>
                </thead >
                <tbody class="text-center">
                    @foreach ($results as $result)
                        <tr>
                            <td>{{$result->student->id}}</td>
                            <td>{{$result->student->name}}</td>

                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->history}}</td>
                            <td>{{$result->geography}}</td>
                            <td>{{$result->science}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(auth()->user()->teacher->classDivision->grade->numeric  > 3)
            <table class="table table-sm table-bordered">
                <thead class="bg-dark text-light">
                <tr>
                    <th colspan="2">Student Detail</th>
                    <th colspan="5">Subject</th>
                </tr>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>English</th>
                    <th>Dzongkha</th>
                    <th>Social Studies</th>
                    <th>Science</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        @endif
    @endif
@endif
@if('can:is-student')
    @if (isset(auth()->user()->student->classDivision))
        @if (auth()->user()->student->classDivision->grade->numeric  >= 11)
            @if (auth()->user()->student->classDivision->stream->id == 1)
                <table class="table table-bordered table-sm">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th colspan="10">Subject name</th>
                        </tr>
                        <tr>
                            <th>English</th>
                            <th>Dzongkha</th>
                            <th>Maths</th>
                            <th>Biology</th>
                            <th>Physics</th>
                            <th>Chemistry</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                    @foreach ($results as $result)
                        <tr>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->biology}}</td>
                            <td>{{$result->physics}}</td>
                            <td>{{$result->chemistry}}</td>                        
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @elseif(auth()->user()->student->classDivision->stream->id == 2)
                <table class="table table-bordered table-sm">
                    <thead class="bg-dark text-light">
                        <tr>
                            <th colspan="6">Subject name</th>
                            <th colspan="2">Statics</th>
                        </tr>
                        <tr>
                            <th>English</th>
                            <th>Dzongkha</th>
                            <th>B-Maths</th>
                            <th>Commerce</th>
                            <th>Accounts</th>
                            <th>Eco/IT</th>
                            <th>Total</th>
                            <th>Percentage</th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                    @foreach ($results as $result)
                    <tr>
                        <td>{{$result->english}}</td>
                        <td>{{$result->dzongkha}}</td>
                        <td>{{$result->bmaths}}</td>
                        <td>{{$result->commerce}}</td>
                        <td>{{$result->accounts}}</td>
                        <td>{{$result->eco_it}}</td>  
                        <td>
                            {{
                                ($result->english +
                                $result->dzongkha +
                                $result->bmaths +
                                $result->commerce +
                                $result->accounts +
                                $result->eco_it ) 
                            }}
                        </td>  
                        <td>
                            {{
                                ($result->english +
                                $result->dzongkha +
                                $result->bmaths +
                                $result->commerce +
                                $result->accounts +
                                $result->eco_it ) / 6 .'%'
                            }}
                        </td>  
                    </tr>                    
                    @endforeach
                    </tbody>
                </table>
            @elseif(auth()->user()->student->classDivision->stream->id == 3)
            <table class="table table-bordered table-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="8">Subject name</th>
                    </tr>
                    <tr>
                        <th>English</th>
                        <th>Dzongkha</th>
                        <th>B-Maths</th>
                        <th>History</th>
                        <th>Geography</th>
                        <th>Eco/IT</th>
                        <th>Media</th>
                        <th>Rigzhung</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                @foreach ($results as $result)
                <tr>
                    <td>{{$result->english}}</td>
                    <td>{{$result->dzongkha}}</td>
                    <td>{{$result->bmaths}}</td>
                    <td>{{$result->history}}</td>
                    <td>{{$result->geography}}</td>
                    <td>{{$result->eco_it}}</td>  
                    <td>{{$result->media}}</td>
                    <td>{{$result->rigzhung}}</td>
                    </tr>                    
                @endforeach
                </tbody>
            </table>
            @endif
        @elseif(auth()->user()->student->classDivision->grade->numeric  >= 9)
            <table class="table table-bordered table-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="10">Subject name</th>
                    </tr>
                    <tr class="text-capitalize">
                        <th>english</th>
                        <th>dzongkha</th>
                        <th>maths</th>
                        <th>history</th>
                        <th>geography</th>
                        <th>biology</th>
                        <th>physics</th>
                        <th>chemistry</th>
                        <th>ict</th>
                        <th>eco/it</th>
                    </tr>
                </thead>
                <tbody class="text-left">
                    @foreach ($results as $result)
                        <tr>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->history}}</td>
                            <td>{{$result->geography}}</td>
                            <td>{{$result->biology}}</td>
                            <td>{{$result->physics}}</td>
                            <td>{{$result->chemistry}}</td>
                            <td>{{$result->ict}}</td>
                            <td>{{$result->eco_it}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(auth()->user()->student->classDivision->grade->numeric  >= 7)
            <table class="table table-bordered table-sm ">
                <thead class="bg-dark text-light">
                    <tr>
                        <th colspan="6">Subject name</th>
                    </tr>
                    <tr>
                        <th>English</th>
                        <th>Dzongkha</th>
                        <th>Maths</th>
                        <th>History</th>
                        <th>Geography</th>
                        <th>Science</th>
                    </tr>
                </thead >
                <tbody class="text-center">
                        @foreach ($results as $result)
                        <tr>
                            <td>{{$result->english}}</td>
                            <td>{{$result->dzongkha}}</td>
                            <td>{{$result->maths}}</td>
                            <td>{{$result->history}}</td>
                            <td>{{$result->geography}}</td>
                            <td>{{$result->biology}}</td>
                            <td>{{$result->science}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @elseif(auth()->user()->student->classDivision->grade->numeric  > 3)
            <table class="table table-sm table-bordered">
                <thead class="bg-dark text-light">
                <tr>
                    <th colspan="5">Subject</th>
                </tr>
                <tr>
                    <th>English</th>
                    <th>Dzongkha</th>
                    <th>Social Studies</th>
                    <th>Science</th>
                </tr>
                </thead>
                <tbody>
                
                </tbody>
            </table>
        @endif
    @endif
@endif