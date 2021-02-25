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
                        <h1>Semester Freeze</h1>
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
                                <form action="{{ route('thesis.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
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
                                        <label  class="col-sm-2 control-label">Application Number #:</label>
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
                                                <option value="DR. MUHAMMAD MURTAZA YOUSAF">DR. MUHAMMAD MURTAZA YOUSAF</option>
                                                <option value="DR. SHAHZAD SARWAR">DR. SHAHZAD SARWAR</option>
                                                <option value="DR. LAEEQ ASLAM">DR. LAEEQ ASLAM</option>
                                                <option value="DR. WAQAR UL QOUNAIN">DR. WAQAR UL QOUNAIN</option>
                                                <option value="DR. ZOBIA SUHAIL">DR. ZOBIA SUHAIL</option>
                                                <option value="DR. NAZAR KHAN">DR. NAZAR KHAN</option>
                                            </select>
                                        </div>
                                        <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="csupervisor" placeholder="FALL/SPRING" >
                                                <option disabled selected value> -- select an option -- </option>
                                                <option value="DR. LAEEQ ASLAM">DR. LAEEQ ASLAM</option>
                                                <option value="DR. SHAHZAD SARWAR">DR. SHAHZAD SARWAR</option>
                                                <option value="DR. MUHAMMAD MURTAZA YOUSAF">DR. MUHAMMAD MURTAZA YOUSAF</option>
                                                <option value="DR. WAQAR UL QOUNAIN">DR. WAQAR UL QOUNAIN</option>
                                                <option value="DR. ZOBIA SUHAIL">DR. ZOBIA SUHAIL</option>
                                                <option value="DR. NAZAR KHAN">DR. NAZAR KHAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label  class="col-sm-2 control-label">DPCC NO#:</label>
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
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection