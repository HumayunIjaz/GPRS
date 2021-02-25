
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<title>manage painting</title>
<meta name="description
" content="Common form elements and layouts" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
</head>
<link rel="stylesheet" type="text/css" href="ckeditor_live_demo-master/styleck.css">
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>

<!-- Load local jQuery -->
<script src="{{asset('public/assets/libs/jquery-loader.js')}}"></script>



<!-- Load local lib and tests -->
<link rel="stylesheet" href="{{asset('public/assets/src/remodal.css')}}">
<link rel="stylesheet" href="{{asset('public/assets/src/remodal-default-theme.css')}}">
<script src="{{asset('public/assets/src/remodal.js')}}"></script>
<script src="{{asset('public/assets/src/remodal_test.js')}}"></script>

  
<body class="no-skin">
@include ('include.header')

<div class="main-container ace-save-state" id="main-container">
<script type="text/javascript">
try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar responsive ace-save-state">
<script type="text/javascript">
try{ace.settings.loadState('sidebar')}catch(e){}
</script>
@include ('include.left-bar') <!-- /.nav-list -->
</div>

<div class="main-content">
<div class="main-content-inner">



<div class="page-content">
<!-- /.ace-settings-container -->
<div class="page-header">
<h1>Manage--Painting</h1>
</div><!-- /.page-header -->
<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<div class="table-responsive">
<table class="table table-bordered" >
<thead>
<tr>
<th>#</th>
<th>-Name</th>


<th>Collection</th>


<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<td>1 </td>
<td>ahmad</td>
<td>the diloge</td>
<td>
<div class="remodal-bg">
<div id="qunit"></div>
<a href="#" data-remodal-target=""><button class="btn btn-xs btn-info">
<i class="ace-icon fa fa-pencil bigger-120">&nbsp;&nbsp;Edit</i></button></a>
</div>
</td>

<td>
<div class="remodal-bg">
<div id="qunit"></div>
<a href="#" data-remodal-target=""><button class="btn btn-xs btn-danger">
<i class="ace-icon fa fa-trash bigger-120">&nbsp;&nbsp;Delete</i></button></a>
</div>
</td>
</tr>


</tbody>
</table>
</div>	

						

<!-- PAGE CONTENT ENDS -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div>
</div>
  <!-- /.main-content -->

<!-- /.main-container -->
</body>
</html>
@endsection