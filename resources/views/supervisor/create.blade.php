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
                        <h1>Add Supervisor</h1>
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
                            <form action="{{ route('supervisor.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Supervisor Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="sup_name" placeholder="Supervisor Name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-3 control-label">Designation:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="sup_desig" placeholder="Supervisor Designation" required />
                                    </div>
                                </div>

                                    <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-4">
                                        <button type="submit" name="sub" class="btn btn-info btn-block">Submit
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