@if (auth()->user()->teacher->classDivision->grade->numeric  >= 11)
    @if (auth()->user()->teacher->classDivision->stream->id == 1)
        <a class="btn btn-sm btn-dark float-right" href="/sample/class-11-12sci.xlsx">download format file for (11-12 Science)</a>
    @elseif(auth()->user()->teacher->classDivision->stream->id == 2)
        <a class="btn btn-sm btn-dark float-right" href="/sample/class-11-12com.xlsx">download format file for (11-12 Commerce)</a>    
    @elseif(auth()->user()->teacher->classDivision->stream->id == 3)
        <a class="btn btn-sm btn-dark float-right" href="/sample/class-11-12arts.xlsx">download format file for (11-12 Arts)</a>
    @endif
@elseif(auth()->user()->teacher->classDivision->grade->numeric  >= 9)
    <a class="btn btn-sm btn-dark float-right" href="/sample/class-9-10.xlsx">download format file for (9-10)</a>
@elseif(auth()->user()->teacher->classDivision->grade->numeric  >= 7)
    <a class="btn btn-sm btn-dark float-right" href="/sample/class-7-8.xlsx">download format file for (7-8)</a>
@elseif(auth()->user()->teacher->classDivision->grade->numeric  >= 1)
    <a class="btn btn-sm btn-dark float-right" href="">download format file</a>
@endif