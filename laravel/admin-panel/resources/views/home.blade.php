@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard-Admin</title>
    </head>
    <body class="no-skin">
        @include('include.header')

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar responsive ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

                <!-- /.sidebar-shortcuts -->

                @include('include.left-bar') <!-- /.nav-list -->

                
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="index.php">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->

                        
                    </div>

                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                Dashboard
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="alert alert-block alert-success">
                                    
                                    <i class="ace-icon fa fa-check green"></i>

                                    Welcome to
                                    <strong class="green">
                                    Admin
                                    </strong>
                                </div>


                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

             

            
        </div><!-- /.main-container -->

    </body>
    </html>
@endsection