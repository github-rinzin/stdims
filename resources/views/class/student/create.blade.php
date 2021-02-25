@extends('layouts.student')
@section('content')
<body>
    <div id="wrapper">

        @include('inc.student.sidebar')

        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
               
                @include('components.topbar')

                <div class="container">
                    <form>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-text">
                                    <p><i class="icon ion-plus"></i>&nbsp;Join Class</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label>Class/Grade</label><input class="form-control" type="text"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label>Section/Division</label><input class="form-control" type="text"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><button class="btn btn-primary" type="button"><i class="icon ion-android-add"></i>&nbsp;Join</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
    </div>
    
@endsection
