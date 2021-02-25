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
                        <h1>Edit Student Extension</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <form  action="{{ route('extension.update', $extension[0]->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Application No:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$extension[0]->diary_no}}"  name="diary_no" placeholder="Application No"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Application Date:</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$extension[0]->date}}"  name="date" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC Meeting NO#:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$extension[0]->dpc_no}}"  name="dpc_no" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Diary No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value="{{$extension[0]->dpc}}"  name="dpc" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$extension[0]->dpcdate}}"  name="dpcdate" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Recommendation:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$extension[0]->dpcreomnd}}"  name="dpcreomnd" placeholder="Approve/NotApprove"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">DPCC Diary No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value="{{$extension[0]->dpcc}}"  name="dpcc" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$extension[0]->dpccdate}}"  name="dpccdate" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">ASRB Dairy No:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$extension[0]->asrb}}"  name="asrb" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">ASRB Data</label>
                                    <div class="col-sm-2">
                                        <input type="Date" class="form-control"  value="{{$extension[0]->asrbdate}}"  name="asrbdate" placeholder="D/___/ACAD"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Extension Approve</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$extension[0]->extension}}"  name="extension" placeholder=""  />
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