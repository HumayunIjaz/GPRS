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
                        <h1>PhD Progress Reports</h1>
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
                        <form action="{{ route('phdprogress.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Roll Number:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control"  name="r_number" placeholder="Roll Number" required />

                                    @if($rollno_invalid)
                                        <div>
                                            <p><font color="red" size="2pt">Invalid Roll Number</font></p>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">Report 1:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport1" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 2:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport2" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 3:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport3" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 4:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport4" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">Report 5:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport5" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 6:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport6" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 7:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport7" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 8:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport8" placeholder=""  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-1 control-label">Report 9:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport9" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 10:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport10" placeholder="" />
                                </div>
                                <label  class="col-sm-1 control-label">Report 11:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport11" placeholder=""  />
                                </div>
                                <label  class="col-sm-1 control-label">Report 12:</label>
                                <div class="col-sm-2">
                                    <input type="month" class="form-control" value=""  name="PHDReport12" placeholder=""  />
                                </div>
                            </div>
                            <h2>Semester Fee</h2>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 1:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes1" placeholder="Semester 1"  >
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 2:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes2" placeholder="Semester 2"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 3:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes3" placeholder="Semester 3"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 4:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes4" placeholder="Semester 4"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 5:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes5" placeholder="Semester 5"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 6:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes6" placeholder="Semester 6"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 7:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes7" placeholder="Semester 7"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 8:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes8" placeholder="Semester 8"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Semester 9:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes9" placeholder="Semester 9"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Semester 10:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDsemes10" placeholder="Semester 10"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <h2>Extra Tenure</h2>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Tenure 1:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDtene1" placeholder="Tenure 1"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Tenure 2:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDtene2" placeholder="Tenure 2"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                                <label  class="col-sm-2 control-label">Tenure 3:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDtene3" placeholder="Tenure 3"  >
                                        <option value=""></option>
                                        <option value="Submite">Submite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Tenure 4:</label>
                                <div class="col-sm-2">
                                    <select class="form-control" name="PHDtene4" placeholder="Tenure 4"  >
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
