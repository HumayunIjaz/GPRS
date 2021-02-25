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
                        <h1>New Student Examiner Details</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
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
                        <form action="{{ route('examiner.add',$examiner[0]->id) }}" class="form-horizontal" role="form" method="POST"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="recommend" placeholder="Recommendation" required >
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="Approve">Approve</option>
                                        <option value="Not Approve">Not Approve</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">DDPC Meeting NO#:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control"  name="examdpcnumber" placeholder="001"  />
                                </div>
                                <label  class="col-sm-2 control-label">DDPC Diary No#</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="examdiary" placeholder="D/___/PUCIT"  />
                                </div>
                                <label  class="col-sm-1 control-label">Date</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  name="examdate" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-10 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">Submit
                                        <i class="ace-icon fa fa-check bigger-110"></i></button>
                                </div>
                            </div><!-- /.row -->
                        </form>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection
