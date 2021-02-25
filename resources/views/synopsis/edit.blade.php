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
                        <h1>Synopsis Updated</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{\Session::get('success')}}</p>
                                </div>
                            @elseif(\Session::has('danger'))
                                <div class="alert alert-danger" >
                                    <p>{{\Session::get('danger')}}</p>
                                </div>
                        @endif
                            <!-- PAGE CONTENT BEGINS -->
                            <form  action="{{ route('synopsis.update', $synopsis[0]->id ) }}" enctype="multipart/form-data" method="post" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('post') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Form #:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->dairy_no}}"  name="dairy_no" placeholder="Application Number"  required=""/>
                                    </div>
                                    <label  class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$synopsis[0]->date}}"  name="date" placeholder="Student Name"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->title}}"  name="title" placeholder="Thesis Title"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->supervisor}}"  name="supervisor" placeholder="Supervisor"  />

                                    </div>
                                    <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->csupervisor}}"  name="csupervisor" placeholder="Co-Supervisor"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Recommendation:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->recomnddpcc}}"  name="recommendation" placeholder="Recommendation"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->dpc}}"  name="dpc" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Dairy No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value="{{$synopsis[0]->DNo}}"  name="DNo" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$synopsis[0]->date1}}"  name="date1" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC FILE</label>
                                    <div class="col-sm-2">
                                        <input type="file" class="form-control form-input" value="" name="file" accept="application/pdf"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DPCC Diary Number</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->synopsis_dpcc}}"  name="synopsis_dpcc" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$synopsis[0]->dpcc_date}}"  name="dpcc_date" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">ASRB Diary Number</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$synopsis[0]->synopsis_asrb}}"  name="synopsis_asrb" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$synopsis[0]->asrb_date}}"  name="asrb_date" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">ASRB FILE</label>
                                    <div class="col-sm-2">
                                        <input type="file" class="form-control form-input" value="" name="asrbfile" accept="application/pdf"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-4">
                                        <button type="submit" name="sub" class="btn btn-info btn-block">Update
                                            <i class="ace-icon fa fa-check bigger-110"></i></button>
                                    </div>
                                </div>
                            </form>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection