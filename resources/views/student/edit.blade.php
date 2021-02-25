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
                            <form  action="{{ route('student.update', $student->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
{{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
{{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Student Roll :</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" value="{{$student->roll_number}}"  name="roll_number" placeholder="Roll Number" required />
                                    </div>
                                    <label  class="col-sm-1 control-label">Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->name}}"  name="name" placeholder="Student Name" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Contact Number:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->contact}}"name="contact" placeholder="Contact Number" required />
                                    </div>
                                    <label  class="col-sm-1 control-label">Student status:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->status}}"name="status" placeholder="Degree Status" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Degree Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->degree}}"name="degree" placeholder="MPhil/PhD" required />
                                    </div>
                                    <label  class="col-sm-1 control-label">Degree Tital:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->degree_title}}"name="degree_title" placeholder="CS" required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Degree Yeas:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->fall}}"name="fall" placeholder="FALL/SPRING" required />
                                    </div>
                                    <label  class="col-sm-1 control-label">Credit Hours:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control"  value="{{$student->Cr_Hr}}"name="Credit_Hourse" placeholder="Credit Horse Number" required />
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