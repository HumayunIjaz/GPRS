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
                        <h1>Add Student</h1>
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
                            <form action="{{ route('student.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Roll Number:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="r_number" placeholder="Roll Number" required />
                                    </div>
                                    <label  class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="s_name" placeholder="Student Name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Contact Number:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="s_contact" placeholder="Contact Number" required />
                                    </div>
                                    <label  class="col-sm-2 control-label">Student status:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="s_status" placeholder="Degree Status" required >
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="Promoted">Promoted</option>
                                            <option value="Dropout">Dropout</option>
                                            <option value="Not Enter">Not Enter</option>
                                        </select>
                                        {{--                                        <input type="text" class="form-control"   />--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Degree Name:</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="s_degree" placeholder="Degree Title" required >
                                            <option value="MPhil">MPhil</option>
                                            <option value="PhD">PhD</option>
                                        </select>
                                        {{--                                        <input type="text" class="form-control"   />--}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Degree Title:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="s_degree_title" placeholder="CS" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Admission Year</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="year" placeholder="FALL/SPRING" required >
                                            <option value="Fall16">Fall16</option>
                                            <option value="Fall17">Fall17</option>
                                            <option value="Fall18">Fall18</option>
                                            <option value="Fall19">Fall19</option>
                                            <option value="Fall20">Fall20</option>
                                        </select>

{{--                                        <input type="text" class="form-control"   />--}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Credit Hours:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  name="c_horse" placeholder="00" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-4 col-sm-4">
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