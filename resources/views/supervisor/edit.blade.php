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
                        <h1>Edit Student</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form  action="{{ route('supervisor.update', $supervisors->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor Name :</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$supervisors->name}}"  name="name" placeholder="Roll Number" required />
                                    </div>
                                    <label  class="col-sm-2 control-label">Designation</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  value="{{$supervisors->designation}}"  name="designation" placeholder="Student Name" required />
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