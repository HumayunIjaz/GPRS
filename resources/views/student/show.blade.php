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
                        <h1>Student File</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <style>
                                .container{padding: 30px;}
                            </style>
                            @if(\Session::has('danger'))
                                <div class="alert alert-danger" >
                                    <p>{{\Session::get('danger')}}</p>
                                </div>
                            @endif
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Student Roll :</label>
                                    <div class="col-sm-3">
                                        {{ $student->roll_number}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Name:</label>
                                    <div class="col-sm-3">
                                    {{$student->name}}
                                    </div>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Contact Number:</label>
                                    <div class="col-sm-3">
                                        {{$student->contact}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Student status:</label>
                                    <div class="col-sm-3">
                                       {{$student->status}}
                                    </div>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Degree Name:</label>
                                    <div class="col-sm-3">
                                    {{$student->degree}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Degree Tital:</label>
                                    <div class="col-sm-3">
                                        {{$student->degree_title}}
                                    </div>
                                </div>
                            <br>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Degree Yeas:</label>
                                    <div class="col-sm-3">
                                        {{$student->fall}}
                                    </div>
                                    <label  class="col-sm-2 control-label">Credit Hours:</label>
                                    <div class="col-sm-3">
                                        {{$student->Cr_Hr}}
                                    </div>
                                </div>
                            <br>
                            <br>
                            @if(Auth::user()->role == 'admin' )
                            <div class="form-group">
                                <div class="col-sm-3">
                                    <a href ="{{ url('/student/'.$student['id'].'/edit') }}" >Edit</a>
                                </div >
                            </div>
                                <div clss="col-sm-4" style="text-align:right">
                                    <form action ="{{action('StudentController@destroy', $student['id'])}}" method="post">
                                        {{csrf_field()}}
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="_mothod" value="DELETE">
                                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            @endif
                            <br>
                     @if($student->degree=='MPhil')
                                <div class="page-header">
                                    <h1>MPhil Thesis Registration Details</h1>
                                </div><!-- /.page-header -->
                                <div class="row">
                                    <div class="col-xs-12">
                                        @if($clears==true)
                                            @foreach ($clears as $cle )
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Clearance Details:</label>
                                                    <div class="col-sm-3">
                                                        {{$cle['status']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Date of Clearnce:</label>
                                                    <div class="col-sm-3">
                                                        {{$cle['passdate']}}
                                                    </div>
                                                </div>
                                              <br>
                                                <div class="form-group">
                                                </div>
                                            @endforeach
                                        @endif
                                        @foreach ($theses as $theses )
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Form #:</label>
                                                <div class="col-sm-3">
                                                    {{$theses['dairy_no']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Date:</label>
                                                <div class="col-sm-3">
                                                    {{$theses['date']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Title:</label>
                                                <div class="col-sm-10">
                                                    {{$theses['title']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Supervisor:</label>
                                                <div class="col-sm-3">
                                                    {{$theses['supervisor']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$theses['csupervisor']}}
                                                </div>
                                            </div>
                                            <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Recommendation:</label>
                                                    <div class="col-sm-2">
                                                        {{$theses['recomnddpcc']}}
                                                    </div>
                                                </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">DPCC NO#:</label>
                                                <div class="col-sm-3">
                                                    {{$theses['dpc']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                                <div class="col-sm-3">
                                                    {{$theses['DNo']}}
                                                </div>
                                                <label  class="col-sm-1 control-label">Date</label>
                                                <div class="col-sm-0">
                                                    {{$theses['date1']}}
                                                </div>
                                            </div>
                                            <br>
                                            @if($theses['pdf_file']==true)
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">DPCC File</label>
                                                    <div class="col-sm-2">
                                                      <a href="{{ asset('storage/app/')}}/{{$theses['pdf_file']}}"  target="_blank">pdf</a>
                                                    </div>
                                                </div>
                                                @endif

                                        @endforeach

                                        <br>
                                        <br>
                                            @if(Auth::user()->role == 'admin' )
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                                <a href ="{{ url('/thesis/'.$student['id'].'/edit') }}" >Edit</a>
                                            </div>
                                            <div class="col-sm-offset-10 csol-sm-2">
                                                <a href ="{{ url('/thesis/'.$student['id'].'/change') }}" >Change Thesis</a>
                                            </div>
                                        </div>
                                            @endif
                                        <br>
                                            @if($previousregistrations==true)
                                                <div>
                                                    <h4>Student Previous Thesis Registration Details</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">

                                                        @foreach ($previousregistrations as $pregistration )
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">Form #:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['dairy_no']}}
                                                                </div>
                                                                <label  class="col-sm-2 control-label">Date:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['date']}}
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">Title:</label>
                                                                <div class="col-sm-10">
                                                                    {{$pregistration['title']}}
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">Supervisor:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['supervisor']}}
                                                                </div>
                                                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['csupervisor']}}
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['recomnddpcc']}}
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">DPCC NO#:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['dpc']}}
                                                                </div>
                                                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                                                <div class="col-sm-3">
                                                                    {{$pregistration['DNo']}}
                                                                </div>
                                                                <label  class="col-sm-1 control-label">Date</label>
                                                                <div class="col-sm-0">
                                                                    {{$pregistration['date1']}}
                                                                </div>
                                                            </div>
                                                            @if($pregistration['pdf_file']==true)
                                                                <div class="form-group">
                                                                    <label  class="col-sm-2 control-label">DPCC File</label>
                                                                    <div class="col-sm-2">
                                                                        <a href="{{ asset('storage/app/')}}/{{$pregistration['pdf_file']}}"  target="_blank">DDPC PDF</a>
                                                                    </div>
                                                                </div>
                                                            @endif
                                     <br>
                                                            <br>
                                                        @endforeach
                                                        <br>
                                            @endif
                                            <div class="page-header">
                                                <h1> MPhil Progress Report & Fee</h1>
                                            </div><!-- /.page-header -->
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <!-- PAGE CONTENT BEGINS -->
                                                    @foreach ($progress as $progress )
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">1:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['pro1']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">2:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['pro2']}}
                                                            </div>
                                                            <label  class="col-sm-1 control-label">3:</label>
                                                            <div class="col-sm-1">
                                                                {{$progress['pro3']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">4:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['pro4']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">5:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['pro5']}}
                                                            </div>
                                                            <label  class="col-sm-1 control-label">6:</label>
                                                            <div class="col-sm-1">
                                                                {{$progress['pro6']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">7:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['pro7']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <h2>Semester Fee</h2>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Semester 1:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['sms1']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Semester 2:</label>
                                                            <div class="col-sm-2">
                                                                {{$progress['sms2']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Semester 3:</label>
                                                            <div class="col-sm-0">
                                                                {{$progress['sms3']}}
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Semester 4:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['sms4']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <h2>Extra Tenure</h2>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Tenure 1:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['tne1']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Tenure 2:</label>
                                                            <div class="col-sm-2">
                                                                {{$progress['tne2']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Tenure 3:</label>
                                                            <div class="col-sm-1">
                                                                {{$progress['tne3']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Tenure 4:</label>
                                                            <div class="col-sm-3">
                                                                {{$progress['tne4']}}
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <br>
                                              <br>
                                                    @if(Auth::user()->role == 'admin' )
                                                    <div class="form-group">
                                                        <div class="col-sm-1">
                                                            <a href ="{{ url('/progress/'.$student['id'].'/edit') }}" >Edit</a>
                                                        </div>
                                                    </div>
                                                    @endif
                            @endif
                                                    <br>
                                                    @if($student->degree=='PhD')
                                        <div class="page-header">
                                        <h1>Synopsis Registration Details</h1>
                                        </div><!-- /.page-header -->
                                <div class="row">
                                    <div class="col-xs-12">
                                    @if($clears==true)
                                            @foreach ($clears as $cle )
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Clearnce Details:</label>
                                                    <div class="col-sm-3">
                                                        {{$cle['status']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Date of Clearnce:</label>
                                                    <div class="col-sm-3">
                                                        {{$cle['passdate']}}
                                                    </div>
                                                </div>
                                          <br>
                                                <div class="form-group">
                                                </div>
                                            @endforeach
                                                @endif
                                        @foreach ($synopsis as $synopses )
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Form #:</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['dairy_no']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Date:</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['date']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Title:</label>
                                                <div class="col-sm-10">
                                                    {{$synopses['title']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Supervisor:</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['supervisor']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['csupervisor']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['recomnddpcc']}}
                                                </div>
                                            </div>
                                        <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">DPCC NO#:</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['dpc']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['DNo']}}
                                                </div>
                                                <label  class="col-sm-1 control-label">Date</label>
                                                <div class="col-sm-1">
                                                    {{$synopses['date1']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">DPCC Diary Number</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['synopsis_dpcc']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Date</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['dpcc_date']}}
                                                </div>
                                            </div>
                                        <br>
                                            @if($synopses['pdf_file']==true)
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">DPCC File</label>

                                                    <div class="col-sm-2"  class="container" id="pdf-viewer">
                                                        <a href="{{ asset('storage/app/')}}/{{$synopses['pdf_file']}}" type="application/pdf" style="width:100px; height:600px;" frameborder="0" target="page: _blank">DDPC PDF</a>
                                                    </div>
                                                </div>
                                            @endif
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">ASRB Diary Number</label>
                                                <div class="col-sm-3">
                                                {{$synopses['synopsis_asrb']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Date</label>
                                                <div class="col-sm-3">
                                                    {{$synopses['asrb_date']}}
                                                </div>
                                            </div>
                                        <br>
                                            @if($synopses['asrbpdf_file']==true)
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">ASRB File</label>
                                                    <div class="col-sm-2">

                                                        <a href="{{ asset('storage/app/')}}/{{$synopses['asrbpdf_file']}}" target="_blank">ASRB PDF
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                            <br>
                                        @endforeach
                                        <br>
                                            @if(Auth::user()->role == 'admin' )
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <a href ="{{ url('/synopsis/'.$student['id'].'/edit') }}" >Edit</a>
                                                </div>
                                                <div class="col-sm-offset-10 col-sm-0">
                                                    <a href ="{{ url('/synopsis/'.$student['id'].'/change') }}" >Change Synopsis</a>
                                                </div>
                                            </div>
                                            @endif
                                    </div>
                                    <br>
                                            @if($previoussynopses==true)
                                            <div >
                                            <h4>Previous Synopsis Registration Details</h4>
                                    </div><!-- /.page-header -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            @foreach ($previoussynopses as $psynopses )
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Form #:</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['dairy_no']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Date:</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['date']}}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Title:</label>
                                                    <div class="col-sm-10">
                                                        {{$psynopses['title']}}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Supervisor:</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['supervisor']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['csupervisor']}}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">DPCC NO#:</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['dpc']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Dairy No#</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['DNo']}}
                                                    </div>
                                                    <label  class="col-sm-1 control-label">Date</label>
                                                    <div class="col-sm-1">
                                                        {{$psynopses['date1']}}
                                                    </div>
                                                </div>
                                                <br>
                                                @if($psynopses['pdf_file']==true)
                                                    <div class="form-group">
                                                        <label  class="col-sm-2 control-label">DPCC File</label>
                                                        <div class="col-sm-2">
                                                            <a href="{{ asset('storage/app/')}}/{{$psynopses['pdf_file']}}"  target="_blank">DDPC PDF</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">DPCC Diary Number</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['synopsis_dpcc']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Date</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['dpcc_date']}}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">ASRB Diary Number</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['synopsis_asrb']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Date</label>
                                                    <div class="col-sm-3">
                                                        {{$psynopses['asrb_date']}}
                                                    </div>
                                                </div>
                                            <br>
                                                @if($psynopses['asrbpdf_file']==true)
                                                    <div class="form-group">
                                                        <label  class="col-sm-2 control-label">ASRB File</label>
                                                        <div class="col-sm-2">
                                                            <a href="{{ asset('storage/app/')}}/{{$psynopses['asrbpdf_file']}}"  target="_blank">ASRB PDF</a>
                                                        </div>
                                                    </div>
                                                @endif

                                                <br>
                                                <br>
                                            @endforeach
                                            @endif
                                </div>
                                    <br>
                                    <br>
                                    <div class="page-header">
                                        <h1>PHD Student Progress Report & Fee</h1>
                                    </div><!-- /.page-header -->
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <!-- PAGE CONTENT BEGINS -->
                                            @foreach ($p_h_d_progresses as $pHDProgress )
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Report 1:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro1']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 2:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro2']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 3:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro3']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 4:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro4']}}
                                                    </div>
                                                </div>
                                            <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Report 5:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro5']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 6:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro6']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 7:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro7']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 8:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro8']}}
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Report 9:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro9']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 10:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro10']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 11:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro11']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Report 12:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdpro12']}}
                                                    </div>
                                                </div>
                                            <br>
                                                <h2>Semester Fee</h2>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Semester 1:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms1']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 2:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms2']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 3:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms3']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 4:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms4']}}
                                                    </div>
                                                </div>
                                            <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Semester 5:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms5']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 6:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms6']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 7:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms7']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 8:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms8']}}
                                                    </div>
                                                </div>
                                            <br>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Semester 9:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms9']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Semester 10:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdsms10']}}
                                                    </div>
                                                </div>
                                            <br>
                                                <h2>Extra Tenure</h2>
                                                <div class="form-group">
                                                    <label  class="col-sm-2 control-label">Tenure 1:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdtne1']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Tenure 2:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdtne2']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Tenure 3:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdtne3']}}
                                                    </div>
                                                    <label  class="col-sm-2 control-label">Tenure 4:</label>
                                                    <div class="col-sm-1">
                                                        {{$pHDProgress['phdtne4']}}
                                                    </div>
                                                </div>
                                                <br>
                                            @endforeach
                                            <br>
                                            <br>
                                            <br>
                                            @if(Auth::user()->role == 'admin' )
                                                <div class="form-group">
                                                    <div class="col-sm-3">
                                                        <a href ="{{ url('/phdprogress/'.$student['id'].'/edit') }}" >Edit</a>
                                                    </div>
                                                </div>
                                            @endif
                                            @endif
                                    <br>
                                    <div class="page-header">
                                <h1>Student Extension</h1>
                            </div><!-- /.page-header -->
                            <div class="row">
                                <div class="col-xs-12">
                                    @foreach ($extensions as $extension )
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Application No#:</label>
                                            <div class="col-sm-3">
                                                {{ $extension['diary_no'] }}
                                            </div>
                                            <label  class="col-sm-2 control-label">Date:</label>
                                            <div class="col-sm-3">
                                                {{$extension['date']}}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                            <div class="col-sm-3">
                                                {{$extension['dpc_no']}}
                                            </div>
                                            <label  class="col-sm-2 control-label">Dairy No#</label>
                                            <div class="col-sm-3">
                                                {{$extension['dpc']}}
                                            </div>
                                            <label  class="col-sm-1 control-label">Date</label>
                                            <div class="col-sm-0">
                                                {{$extension['dpcdate']}}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">Recommendation:</label>
                                            <div class="col-sm-3">
                                                {{$extension['dpcreomnd']}}
                                            </div>
                                            <label  class="col-sm-2 control-label">DPCC Dairy No#</label>
                                            <div class="col-sm-3">
                                                {{$extension['dpcc']}}
                                            </div>
                                            <label  class="col-sm-1 control-label">Date</label>
                                            <div class="col-sm-0">
                                                {{$extension['dpccdate']}}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label">ASRB Dairy No:</label>
                                            <div class="col-sm-3">
                                                {{$extension['asrb']}}
                                            </div>
                                            <label  class="col-sm-2 control-label">ASRB Dairy Data</label>
                                            <div class="col-sm-3">
                                                {{$extension['asrbdate']}}
                                            </div>
                                            <label  class="col-sm-1 control-label">Extension</label>
                                            <div class="col-sm-0">
                                                {{$extension['extension']}}
                                            </div>
                                        </div>
                                    @endforeach
                                        <br>
                                        <br>
                                        @if(Auth::user()->role == 'admin' )
                                        <div class="form-group">
                                            <div class="col-sm-1">
                                                <a href ="{{ url('/extension/'.$student['id'].'/edit') }}" >Edit</a>
                                            </div>
                                            <div class="col-sm-offset-10 col-sm-0">
                                                <a href ="{{ url('/extension/'.$student['id'].'/change') }}" >Extension Required</a>
                                            </div>
                                        </div>
                                        @endif
                                        <br>
                                        @if($previousextension==true)
                                </div>
                                <h4>Student Previous Extension Details</h4>
                            </div><!-- /.page-header -->
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    @foreach ($previousextension as $pextension )
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Application No#:</label>
                                                            <div class="col-sm-3">
                                                                {{ $pextension['dairy_no'] }}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Date:</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['date']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['dpc_no']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">Dairy No#</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['dpc']}}
                                                            </div>
                                                            <label  class="col-sm-1 control-label">Date</label>
                                                            <div class="col-sm-0">
                                                                {{$pextension['dpcdate']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">Recommendation:</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['dpcreomnd']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">DPCC Dairy No#</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['dpcc']}}
                                                            </div>
                                                            <label  class="col-sm-1 control-label">Date</label>
                                                            <div class="col-sm-0">
                                                                {{$pextension['dpccdate']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label  class="col-sm-2 control-label">ASRB Dairy No:</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['asrb']}}
                                                            </div>
                                                            <label  class="col-sm-2 control-label">ASRB Dairy Data</label>
                                                            <div class="col-sm-3">
                                                                {{$pextension['asrbdate']}}
                                                            </div>
                                                            <label  class="col-sm-1 control-label">Extension</label>
                                                            <div class="col-sm-0">
                                                                {{$pextension['extension']}}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                                                    @endforeach
                                                    <br>
                                                    <br>
                                                    <br>
                                                </div>
                                                @endif

                                <div class="page-header">
                                    <h1>Student Examiner</h1>
                                </div><!-- /.page-header -->
                                    <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        @foreach ($examiners as $examiner )
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                                <div class="col-sm-3">
                                                  {{$examiner['reconm']}}
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                                <div class="col-sm-3">
                                                    {{$examiner['examdpc']}}
                                                </div>
                                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                                <div class="col-sm-3">
                                                    {{$examiner['diary_no']}}
                                                </div>
                                                <label  class="col-sm-1 control-label">Date</label>
                                                <div class="col-sm-1">
                                                    {{$examiner['examdate']}}
                                                </div>
                                            </div>
                                                @endforeach
                                            <br>
                                            @if(Auth::user()->role == 'admin' )
                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <a href ="{{ url('/examiner/'.$student['id'].'/edit') }}" >Edit</a>
                                                </div>
                                                <div class="col-sm-offset-10 col-sm-0">
                                                    <a href ="{{ url('/examiner/'.$student['id'].'/change') }}" >New Examiner</a>
                                                </div>
                                            </div>
                                            @endif

                                            @if($previousexaminor==true)
                                                <br>
                                                <div >
                                                    <h4>Student Previous Examiner</h4>
                                                </div><!-- /.page-header -->
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        @foreach ($previousexaminor as $pexaminer )
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pexaminer['reconm']}}
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group">
                                                                <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                                                <div class="col-sm-3">
                                                                    {{$pexaminer['examdpc']}}
                                                                </div>
                                                                <label  class="col-sm-2 control-label">Dairy No#</label>
                                                                <div class="col-sm-3">
                                                                    {{$pexaminer['diary_no']}}
                                                                </div>
                                                                <label  class="col-sm-1 control-label">Date</label>
                                                                <div class="col-sm-0">
                                                                    {{$pexaminer['examdate']}}
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <br>
                                            @endif
                                                            <br>
                                                            <br>
                                                            <form action ="{{action('ThesisController@clear', $student['id'])}}" method="post">
                                                                {{csrf_field()}}
                                                                {{ method_field('GET') }}
                                                                <input type="hidden" name="_mothod" value="GET">
                                                                <button type="submit" name="submit" class="btn btn-danger">CLEARANCE</button>
                                                            </form>
                                    </div>
                                </div>
                            </div> <!-- PAGE CONTENT ENDS -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection