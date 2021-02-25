
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


<!-- Load local jQuery -->




  
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
@include ('include.left-bar')<!-- /.nav-list -->
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
	<?php $no=1; ?>
	@foreach($paintings as $row)

<td>{{$no++}}</td>
<td>{{$row->name}}</td>
<td>{{$row->collection}}</td>
<td>

<a class="btn btn-xs btn-info" href="{{route('paintings.edit',$row->id)}}" >
<i class="ace-icon fa fa-pencil bigger-120">&nbsp;&nbsp;Edit</i></a>
</td>

<td>
	
<form action="{{route('paintings.destroy',$row->id)}}" method="POST">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="delete">
<button type="submit" class="btn btn-xs btn-danger">
<i class="ace-icon fa fa-trash bigger-120">&nbsp;&nbsp;Delete</i></button>
</form>
</div>
</td>
</tr>
@endforeach

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