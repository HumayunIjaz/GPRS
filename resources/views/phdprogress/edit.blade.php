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
                            <form  action="{{ route('phdprogress.update',$pHDProgress[0]->id ) }}" method="POST" class="form-horizontal" role="form"  autocomplete="off" >

                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                {{--                                <input name="_token" type="hidden" value="{{ method_field('PATCH') }}"/>--}}
                                {{--                                --}}
                                <meta name="csrf_token" content="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Report 1:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro1}}"  name="phdpro1" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 2:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro2}}"  name="phdpro2" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 3:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro3}}"  name="phdpro3" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 4:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro4}}"  name="phdpro4" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Report 5:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro5}}"  name="phdpro5" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 6:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro6}}"  name="phdpro6" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 7:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro7}}"  name="phdpro7" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 8:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro8}}"  name="phdpro8" placeholder=""  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-1 control-label">Report 9:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro9}}"  name="phdpro9" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 10:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro10}}"  name="phdpro10" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 11:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro11}}"  name="phdpro11" placeholder=""  />
                                    </div>
                                    <label  class="col-sm-1 control-label">Report 12:</label>
                                    <div class="col-sm-2">
                                        <input type="month" class="form-control" value="{{$pHDProgress[0]->phdpro12}}"  name="phdpro12" placeholder=""  />
                                    </div>
                                </div>
                                <h2>Semester Fee</h2>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Semester 1:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms1}}"  name="phdsms1" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms1}}" name="phdsms1" placeholder="Semester 1"  >
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 2:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms2}}"  name="phdsms2" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms2}}" name="phdsms2" placeholder="Semester 2"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 3:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms3}}"  name="phdsms3" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms3}}" name="phdsms3" placeholder="Semester 3"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Semester 4:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms4}}"  name="phdsms4" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms4}}" name="phdsms4" placeholder="Semester 4"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 5:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms5}}"  name="phdsms5" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms5}}" name="phdsms4" placeholder="Semester 5"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 6:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms6}}"  name="phdsms6" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms6}}" name="phdsms6" placeholder="Semester 6"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Semester 7:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms7}}"  name="phdsms7" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms7}}" name="phdsms7" placeholder="Semester 7"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 8:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms8}}"  name="phdsms8" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms8}}" name="phdsms8" placeholder="Semester 8"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Semester 9:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms9}}"  name="phdsms9" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms9}}" name="phdsms9" placeholder="Semester 9"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Semester 10:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdsms10}}"  name="phdsms10" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdsms10}}" name="phdsms10" placeholder="Semester 10"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                                <h2>Extra Tenure</h2>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Tenure 1:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdtne1}}"  name="phdtne1" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdtne1}}" name="phdtne1" placeholder="Tenure 1"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Tenure 2:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdtne2}}"  name="phdtne2" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdtne2}}" name="phdtne2" placeholder="Tenure 2"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                    <label  class="col-sm-2 control-label">Tenure 3:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdtne3}}"  name="phdtne3" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdtne3}}" name="phdtne3" placeholder="Tenure 3"  >
                                            <option value=""></option>
                                            <option value="Submite">Submite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label  class="col-sm-2 control-label">Tenure 4:</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" value="{{$pHDProgress[0]->phdtne4}}"  name="phdtne4" placeholder=""  />
                                        <select class="form-control" value="{{$pHDProgress[0]->phdtne4}}" name="phdtne4" placeholder="Tenure 4"  >
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