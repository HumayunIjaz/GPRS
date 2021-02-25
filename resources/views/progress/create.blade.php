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
                        <h1> MPhil Progress Reports</h1>
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
                        <form action="{{ route('progress.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Roll Number:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control"  name="r_number" placeholder="Roll Number"  required=""/>

                                </div>
                                <br>
                                <br>
                            </div>
                            <br>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">Report 1:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report1" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 2:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report2" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 3:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report3" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">Report 4:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report4" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Reprot 5:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report5" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 6:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report6" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 7:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="Report7" placeholder=""  />
                                </div>
                            </div>
                            <h2>Semester Fee</h2>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 1:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="semes1" placeholder="Semester 1"  >
                                        <option value="Submite">Submite</option>
                                    </select>

                                </div>
                                <label  class="col-sm-2 control-label">Semester 2:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="semes2" placeholder="Semester 2"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-1 control-label">Semester 3:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="semes3" placeholder="Semester 3"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 4:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="semes4" placeholder="Semester 4"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <h2>Extra Tenure</h2>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Tenure 1:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="tene1" placeholder="Degree Status"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Tenure 2:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="tene2" placeholder="Tenure 2"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Tenure 3:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="tene3" placeholder="Tenure 3"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Tenure 4:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="tene4" placeholder="Tenure 3"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
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
