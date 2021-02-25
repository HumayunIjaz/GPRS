
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
                        <h1>New Synopsis Registration</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        @if(\Session::has('success'))
                            <div class="alert alert-success" >
                                <p>{{\Session::get('success')}}</p>
                            </div>
                        @endif
                        <!-- PAGE CONTENT BEGINS -->
                        <form action="{{ route('synopsis.add',$synopsis[0]->id) }}" class="form-horizontal" enctype="multipart/form-data" role="form" method="post"  autocomplete="off" >
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

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
                                    <input type="text" class="form-control" value="{{$synopsis[0]->title}}"  name="Stitle" placeholder="Thesis Title"  required=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Supervisor:</label>
                                <div class="col-sm-3">
                                    <select class="form-control" value="{{$synopsis[0]->supervisor}}" name="supervisor" placeholder="FALL/SPRING"  >
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
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Recommendation:</label>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value=""  name="recommendation" placeholder="Recommendation"  />
                                    <select class="form-control" value="" name="recommendation" placeholder="Recommendation"  >
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
                                    <button type="submit" name="sub" class="btn btn-info btn-block">Update
                                        <i class="ace-icon fa fa-check bigger-110"></i></button>
                                </div>
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