@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<title>add-blogs</title>
</head>


<body class="no-skin">

@include('include.header')

<div class="main-container ace-save-state" id="main-container">


<div id="sidebar" class="sidebar responsive ace-save-state">

 @include('include.left-bar') <!-- /.nav-list -->
</div>

<div class="main-content">
<div class="main-content-inner">


<div class="page-content">
<!-- /.ace-settings-container -->
<div class="page-header">
<h1>Add Painting</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" action="{{route('blogs.store')}}" role="form" method="post"   autocomplete="off" >
{{csrf_field()}}

<div class="form-group">
<label  class="col-sm-3 control-label">Blog title:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="title" placeholder="Painting Name" required />
</div>
</div>

<div class="form-group">
<label  class="col-sm-3 control-label">Blog meta:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="meta" placeholder="Blog Meta" required />
</div>
</div>

<div class="form-group">
<label  class="col-sm-3 control-label">Blog keyword:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="keyword" placeholder="Blog Keyword" required />
</div>
</div>

<div class="form-group">
<label  class="col-sm-3 control-label">Blog link:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="link" placeholder="Blog Link" required />
</div>
</div>


<div class="form-group">
<label  class="col-sm-3 control-label">Blog image:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="image" placeholder="Blog Image" required />
</div>
</div>

<div class="form-group">
<label  class="col-sm-3 control-label">Blog date:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="date" placeholder="Blog Date" required />
</div>
</div>

<div class="form-group">
<label  class="col-sm-3 control-label">Blog status:</label>
<div class="col-sm-4">
<input type="text" class="form-control"  name="status" placeholder="Blog Status" required />
</div>
</div>



<div class="form-group">
<div class="col-sm-offset-3 col-sm-4">
<button type="submit" name="sub" class="btn btn-info btn-block">Submit
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
	
</div><!-- /.main-container -->
</body>
</html>

@endsection