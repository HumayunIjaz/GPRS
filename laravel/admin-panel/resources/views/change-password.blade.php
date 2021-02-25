
@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<title>Change Password </title>

	</head>

	<body class="no-skin">
		@include('include.header')

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->

				<!-- /.nav-list -->

				@include('include.left-bar')
			</div>

			<div class="main-content">
            
				<div class="main-content-inner">
                
					<div class="panel-body">
                    <h3>Change Password</h3>
			  					<form class="form-horizontal" role="form" method="post" autocomplete="off">
								  <div class="form-group">
								    <label for="inputEmail3" class="col-sm-3 control-label">Current Password</label>
								    <div class="col-sm-6">
									<input type="password" class="form-control" id="inputEmail3" name="pass" placeholder="Enter Current Password" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">New Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" name="new_pass" placeholder="New Password" required>
								    </div>
								  </div>
                                  <div class="form-group">
								    <label for="inputPassword3" class="col-sm-3 control-label">Repeat Password</label>
								    <div class="col-sm-6">
								      <input type="password" class="form-control" id="inputPassword3" name="re_pass" placeholder="Repeat Password" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-3 col-sm-6">
								      <button type="submit" class="btn btn-success btn-block" name="changpss">Change Password</button>
								    </div>
								  </div>
								</form>

			  				</div>
                            

					<!-- /.page-content -->
				</div>

			</div><!-- /.main-content -->
			
		</div><!-- /.main-container -->

		<!-- basic scripts -->
	</body>
</html>
@endsection