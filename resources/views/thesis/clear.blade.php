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
                        <h1>Student Clearance</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                    <p>{{\Session::get('success')}}</p>
                                </div>
                            @elseif(\Session::has('danger'))
                                <div class="alert alert-danger" >
                                    <p>{{\Session::get('danger')}}</p>
                                </div>
                            @endif
                                <form  action="{{ route('thesis.move',$thesis[0]->id) }}" method="post" class="form-horizontal" role="form"  autocomplete="off" >
                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    {{--                                {{ csrf_field() }}--}}
                                    {{--                                {{ method_field('POST') }}--}}

                                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                    {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                    {{--                                --}}
                                    <meta name="csrf_token" content="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">Status of the Student</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" value=""  name="status" placeholder="Student Pass Status"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">Date:</label>
                                        <div class="col-sm-2">
                                            <input type="date" class="form-control"  value=""  name="passdate" placeholder="Student Name"  />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-3">
                                            <button type="submit" name="sub" class="btn btn-info btn-block">Clearance
                                                <i class="ace-icon fa fa-check bigger-110"></i></button>
                                        </div>
                                    </div>
                                </form>
                        </div>
                            <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection