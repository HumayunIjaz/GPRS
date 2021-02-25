@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Massages</title>
	</head>
	

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

				<!-- /.sidebar-shortcuts -->

				@include('include.left-bar') <!-- /.nav-list -->

				
		</div>

		<div class="main-content">
			<div class="main-content-inner">
				<div class="row">
					<div class="col-xs-12">
						<div class="page-content">
							<div class="page-header">
								<h1>Massages</h1>
							</div>

							<div class="table-responsive">
								<table class="table table-bordered table-striped" >
									<thead>
										<tr>
										<th>#</th>
										<th>Name</th>
										<th>Email</th>
										<th colspan="5">Massage</th>
										<th>Reply </th>
										<th>Status </th>
										<th>Date </th>
										</tr>
									</thead>
									<tbody>
										{{$no=1}}
	@foreach($massage as $row)
	<tr>
		<td>{{$no++}}</td>
		<td>{{ $row->name}}</td>
		<td>{{$row->email }}</td>
		<td colspan="5">{{$row->massage}}</td>
		<td><center><a href="mailto:adnanbayg@gmail.com"><button name="update_status" type="submit" class="btn btn-xs btn-info">
			<i class="ace-icon fa fa-pencil bigger-120"> Reply  </i></button></a></center></td>
		<td style="font-size: 22px; "><center>
			@if($row->reply == "NO")
			<div style='color: red' class='glyphicon glyphicon-remove'></div>
		@endif
		@if($row-> reply == "YES")
			<div style='color: green' class='glyphicon glyphicon-ok'></div>
		@endif


			
		</center></td>
		<td>{{ $row->created_at }}</td>
	</tr>
@endforeach

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

	
		</div>	
	</body>
</html>
@endsection