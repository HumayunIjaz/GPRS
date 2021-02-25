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
                        <h1>Synopsis Registration</h1>
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
                            <form action="{{ route('synopsis.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data" method="post"  autocomplete="off" >
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Roll Number:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control"  name="r_number" placeholder="Roll Number"  required=""/>


                                        @if($rollno_invalid)
                                            <div>
                                                <p><font color="red" size="2pt">Invalid Roll Number</font></p>
                                            </div>
                                    </div>
                                    @endif
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Form #:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value=""  name="SFnumber" placeholder="Application Number"  required=""/>
                                    </div>
                                    <label  class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="SFdate" placeholder="Student Name"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value=""  name="Stitle" placeholder="Thesis Title"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor:</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="STsupervisor" placeholder="FALL/SPRING" required >
                                            <option value=""> </option>
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="Scsupervisor" placeholder="FALL/SPRING" >
                                            <option value=""> </option>
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
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
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value=""  name="SDdairy" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Dairy No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value=""  name="SDnumber" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="SDdate" placeholder=""  />
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
                                        <input type="text" class="form-control" value=""  name="Sdpccdairy" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="Sdpccdate" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">ASRB Diary Number</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value=""  name="SAdairy" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value=""  name="SAdate" placeholder=""  />
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
                                        <button type="submit" name="sub" class="btn btn-info btn-block">Enter
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

