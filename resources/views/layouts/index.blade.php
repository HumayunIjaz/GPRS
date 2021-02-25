@extends('layouts.app')
@section('content')
  <div class="main-container ace-save-state" id="main-container">

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">

      @include('layouts.sideBar')

      </div>
      <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="#">Home</a>
            </li>
            <li class="active">Graduate Recored Management System at PUCIT</li>
          </ul><!-- /.breadcrumb -->

        </div>

        <div class="page-content">


          <div class="page-header">
            <h1>
              Graduate Recored Management System

            </h1>
          </div><!-- /.page-header -->

          <div class="row">
            <div class="col-xs-12">
              <!-- PAGE CONTENT BEGINS -->
              <div class="alert alert-block alert-success">

                <i class="ace-icon fa fa-check blue"></i>

                Welcome to
                <strong class="green">
                  {{ Auth::user()->name }}
                </strong>
              </div>
              <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.page-content -->
      </div>
    </div><!-- /.main-content-->
  </div>
@endsection