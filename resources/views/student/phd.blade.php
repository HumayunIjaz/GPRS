
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
                        <h1>PHD Student</h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <!-- PAGE CONTENT BEGINS -->
                        <form action="{{ route('student.store') }}" class="form-horizontal" role="form" method="post"  autocomplete="off" >

                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 19
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 18
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 17
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 16
                                        <i class="ace-icon "></i></button>
                                </div>
                            </div><!-- /.row -->
                            <div class="form-group">
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 15
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 14
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 13
                                        <i class="ace-icon "></i></button>
                                </div>
                                <div class="col-sm-offset-1 col-sm-2">
                                    <button type="submit" name="sub" class="btn btn-info btn-block">FALL 12
                                        <i class="ace-icon "></i></button>
                                </div>
                        </form>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.page-content -->
            </div><!-- /.main-content inner-->
        </div><!-- /.main-content -->
    </div>
@endsection