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
                        <h1>Change Thesis Details</h1>
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
                            <form  action="{{ route('thesis.add', $theses[0]->id ) }}" enctype="multipart/form-data" method="post" class="form-horizontal" role="form"  autocomplete="off" >
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('POST') }}--}}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Form #:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value=""  name="dairy_no" placeholder="Application Number"  required=""/>
                                    </div>
                                    <label  class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="date" placeholder="Student Name"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="{{$theses[0]->title}}"  name="title" placeholder="Thesis Title"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$theses[0]->supervisor}}"  name="tsupervisor" placeholder="Supervisor" />
                                        <select class="form-control"  value="{{$theses[0]->supervisor}}" name="tsupervisor" placeholder="FALL/SPRING" >
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$theses[0]->csupervisor}}"  name="tcsupervisor" placeholder="Co-Supervisor" />
                                        <select class="form-control" value="{{$theses[0]->csupervisor}}" name="tcsupervisor" placeholder="FALL/SPRING" >
                                            @if(($theses[0]->csupervisor==false))
                                                {
                                                <option value=""> </option>
                                                }
                                            @endif
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Recommendation:</label>
                                    <div class="col-sm-2">
                                        <select class="form-control" name="recommendation" placeholder="Recommendation"  >
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="Approve">Approve</option>
                                            <option value="Not Approve">Not Approve</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DPCC NO#:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value=""  name="dpc" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Dairy No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value=""  name="DNo" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="Ddate" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-2 control-label">DDPC FILE</label>
                                    <div class="col-sm-2">
                                        <input type="file" class="form-control form-input" value="" name="filechange" accept="application/pdf"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-4">
                                        <button type="submit" name="sub" class="btn btn-info btn-block">New Create
                                            <i class="ace-icon fa fa-check bigger-110"></i></button>
                                    </div>
                                </div><!-- /.row -->
                            </form>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection