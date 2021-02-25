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
                        <h1>Student Examiner Update</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form  action="{{ route('examiner.update', $examinors[0]->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Recommendation:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$examinors[0]->reconm}}" name="reconm" placeholder="001"  />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC Meeting NO#:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" value="{{$examinors[0]->examdpc}}" name="examdpc" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">DDPC Diary No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$examinors[0]->diary_no}}" name="diary_no" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control" value="{{$examinors[0]->examdate}}" name="examdate" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-4">
                                        <button type="submit" name="sub" class="btn btn-info btn-block">Update
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
