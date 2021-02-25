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
                        <h1>New Degree Time Extension</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
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
                        <form action="{{ route('extension.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Roll Number:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control"  name="r_number" placeholder="Roll Number"  />

                                    @if($rollno_invalid)
                                        <div>
                                            <p><font color="red" size="2pt">Invalid Roll Number</font></p>
                                        </div>
                                    @endif

                                </div>
                                <br>
                            </div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Application No:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="enumber" placeholder="Application No" required />
                                </div>
                                <label  class="col-sm-2 control-label">Application Date:</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  name="date" placeholder="" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">DDPC Meeting NO#:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="dpc_no" placeholder="001"  />
                                </div>
                                <label  class="col-sm-2 control-label">DDPC Diary No#</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="dpcnumber" placeholder="D/___/PUCIT"  />
                                </div>
                                <label  class="col-sm-1 control-label">Date</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  name="dpcdate" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="recommendation" placeholder="Recommendation"  >
                                        <option disabled selected value> -- select an option -- </option>
                                        <option value="Approve">Approve</option>
                                        <option value="Not Approve">Not Approve</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">DPCC Diary No#</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="dpcc" placeholder="D/___/PUCIT"  />
                                </div>
                                <label  class="col-sm-1 control-label">Date</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  name="dpccdate" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">ASRB Diary No:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  name="asrb" placeholder="001"  />
                                </div>
                                <label  class="col-sm-2 control-label">ASRB Dairy Data</label>
                                <div class="col-sm-2">
                                    <input type="Date" class="form-control"  name="asrbdate" placeholder="D/___/ACAD"  />
                                </div>
                                <label  class="col-sm-2 control-label">Extension Approve</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  name="extension" placeholder=""  />
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