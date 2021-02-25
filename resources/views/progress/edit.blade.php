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
                        <h1>Progress Report Details</h1>
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
                            <form  action="{{ route('progress.update', $progress[0]->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Report 1:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$progress[0]->pro1}}"  name="pro1" placeholder=""  />
                                    </div>
                                        <label  class="col-sm-1 control-label">Report 2:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$progress[0]->pro2}}"  name="pro2" placeholder="pro2"  />
                                    </div>
                                        <label  class="col-sm-1 control-label">Report 3:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$progress[0]->pro3}}"  name="pro3" placeholder=""  />
                                     </div>
                                </div>
                        <div class="form-group">
                            <label  class="col-sm-1 control-label">Report 4:</label>
                            <div class="col-sm-2">
                                <input type="month" class="form-control" value="{{$progress[0]->pro4}}"  name="pro4" placeholder=""  />
                            </div>
                            <label  class="col-sm-1 control-label">Report 5:</label>
                            <div class="col-sm-2">
                                <input type="month" class="form-control" value="{{$progress[0]->pro5}}"  name="pro5" placeholder=""  />
                            </div>
                            <label  class="col-sm-1 control-label">Report 6:</label>
                            <div class="col-sm-2">
                                <input type="month" class="form-control" value="{{$progress[0]->pro6}}"  name="pro6" placeholder=""  />
                            </div>
                            <label  class="col-sm-1 control-label">Report 7:</label>
                            <div class="col-sm-2">
                                <input type="month" class="form-control" value="{{$progress[0]->pro7}}"  name="pro7" placeholder=""  />
                            </div>
                        </div>
                        <h2>Semester Fee</h2>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Semester 1:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->sms1}}"  name="semes1" placeholder=""  />
                                <select class="form-control" value="{{$progress[0]->sms1}}" name="semes1" placeholder=""  >
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                            <label  class="col-sm-2 control-label">Semester 2:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->sms2}}"  name="semes2" placeholder=""  />
                                <select class="form-control" value="{{$progress[0]->sms2}}" name="semes2" placeholder=""  >
                                    <option value=""></option>
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                            <label  class="col-sm-2 control-label">Semester 3:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->sms3}}"  name="semes3" placeholder=""  />
                                <select class="form-control" value="{{$progress[0]->sms3}}" name="semes3" placeholder=""  >
                                    <option value=""></option>
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                        </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Semester 4:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$progress[0]->sms4}}"  name="semes4" placeholder=""  />
                                        <select class="form-control" value="{{$progress[0]->sms4}}" name="semes4" placeholder=""  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                        <h2>Extra Tenure</h2>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Tenure 1:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->tne1}}"  name="tne1" placeholder=""  />
                                <select class="form-control" value="{{$progress[0]->tne1}}" name="tne1" placeholder=""  >
                                    <option value=""></option>
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                            <label  class="col-sm-2 control-label">Tenure 2:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->tne2}}"  name="tne2" placeholder=""  />
                                <select class="form-control" name="tne2" placeholder=""  >
                                    <option value="{{$progress[0]->tne2}}"></option>
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                            <label  class="col-sm-2 control-label">Tenure 3:</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" value="{{$progress[0]->tne3}}"  name="tne3" placeholder=""  />
                                <select class="form-control" value="{{$progress[0]->tne3}}" name="tne3" placeholder="Semester 1"  >
                                    <option value=""></option>
                                    <option value="Submite">Submite</option>
                                </select>
                            </div>
                        </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Tenure 4:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$progress[0]->tne4}}"  name="tne4" placeholder=""  />
                                        <select class="form-control" value="{{$progress[0]->tne4}}" name="tne4" placeholder="Semester 1"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
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