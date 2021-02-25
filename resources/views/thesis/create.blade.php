
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
                        <h1>Thesis Registration</h1>
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
                        <form action="{{ route('thesis.store') }}" enctype="multipart/form-data" class="form-horizontal" role="form" method="POST"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Roll Number:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="r_number" placeholder="Roll Number"  required=""/>

                                    @if($rollno_invalid)
                                        <div>
                                            <p><font color="red" size="2pt">Invalid Roll Number</font></p>
                                        </div>
                                    @endif

                                </div>
                                <br>
                            </div>
                            <br>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Form #:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value=""  name="Fnumber" placeholder="Application Number"  required=""/>
                                </div>
                                <label  class="col-sm-2 control-label">Date:</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  value=""  name="Fdate" placeholder="Student Name"  required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Title:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" value=""  name="title" placeholder="Thesis Title"  required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Supervisor:</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="Tsupervisor" placeholder="FALL/SPRING" required >
                                            <option value=""> </option>
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="csupervisor" placeholder="FALL/SPRING" >
                                        <option value=""> </option>
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
                                <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value=""  name="Ddairy" placeholder="001"  />
                                </div>
                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control"  value=""  name="Dnumber" placeholder="D/___/PUCIT"  />
                                </div>
                                <label  class="col-sm-2 control-label">Date</label>
                                <div class="col-sm-2">
                                    <input type="date" class="form-control"  value=""  name="Ddate" placeholder=""  />
                                </div>
                                <label  class="col-sm-2 control-label">DDPC FILE</label>
                                <div class="col-sm-2">
                                    <input type="file" class="form-control form-input" value="" name="file" accept="application/pdf"/>
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