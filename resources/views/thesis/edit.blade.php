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
                            <form  action="{{ route('thesis.update', $theses[0]->id ) }}" enctype="multipart/form-data" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Form #:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$theses[0]->dairy_no}}"  name="dairy_no" placeholder="Application Number"  required=""/>
                                    </div>
                                    <label  class="col-sm-2 control-label">Date:</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$theses[0]->date}}"  name="date" placeholder="Student Name"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Title:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" value="{{$theses[0]->title}}"  name="ttitle" placeholder="Thesis Title"  required=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Supervisor:</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" value="{{$theses[0]->supervisor}}" name="tsupervisor" placeholder="FALL/SPRING"  >
                                            <option value=""> </option>
                                            @foreach ($supervisors as $supervisor )
                                                <option value="{{ $supervisor['name'] }}"> {{ $supervisor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Co-Supervisor</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" value="{{$theses[0]->csupervisor}}" name="tcsupervisor" placeholder="FALL/SPRING" >
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
                                        <input type="text" class="form-control" value="{{$theses[0]->recomnddpcc}}"  name="recommendation" placeholder="tsupervisor" />
                                        <select class="form-control" value="{{$theses[0]->recomnddpcc}}" name="recommendation" placeholder="Recommendation"  >
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="Approve">Approve</option>
                                            <option value="Not Approve">Not Approve</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">DDPC NO#:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$theses[0]->dpc}}"  name="tdpc"  name="Ddairy" placeholder="001"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Dairy No#</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control"  value="{{$theses[0]->DNo}}"  name="tDNo" placeholder="D/___/PUCIT"  />
                                    </div>
                                    <label  class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-2">
                                        <input type="date" class="form-control"  value="{{$theses[0]->date1}}"  name="tDdate" placeholder=""  />
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
                    </div><!-- /.row -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection