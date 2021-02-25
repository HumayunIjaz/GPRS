@extends('layouts.app')
@section('content')
    <div class="main-container ace-save-state" id="main-container">
        <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
            @include('layouts.sideBar')
        </div>
        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content">
                    <!-- /.ace-settings-container -->
                    <div class="page-header">
                        <h1>Supervisor File</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            @foreach($supervisor as $supervisor)
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor Name :</label>
                                    <div class="col-sm-3">
                                        {{$supervisor->name}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Designation :</label>
                                    <div class="col-sm-3">
                                        {{$supervisor->designation}}
                                    </div>
                                </div>
                            @endforeach
                            <br>
                                <div class="page-header">
                                    <h1>PhD Thesis Registration Details</h1>
                                </div><!-- /.page-header -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br>
                                        @foreach ($synopses as $synop )
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Roll NO</label>
                                                <div class="col-sm-3">
                                                    {{$synop->roll_number }}
                                                </div>
                                                <label  class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-3">
                                                    {{$synop->name }}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Title:</label>
                                                <div class="col-sm-10">
                                                    {{$synop->title}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$synop->supervisor }}
                                                </div>
                                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$synop->csupervisor }}
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        @endforeach
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="page-header">
                                    <h1>MPhil Thesis Registration Details</h1>
                                </div><!-- /.page-header -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br>
                                        @foreach ($theses as $thes )
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Roll NO</label>
                                                <div class="col-sm-3">
                                                    {{$thes->roll_number }}
                                                </div>
                                                <label  class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-3">
                                                    {{$thes->name }}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Title:</label>
                                                <div class="col-sm-10">
                                                    {{$thes->title}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$thes->supervisor }}
                                                </div>
                                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$thes->csupervisor }}
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        @endforeach
                                        <br>
                                        <br>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection