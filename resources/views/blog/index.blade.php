<!DOCTYPE html>
<html lang="en-US">
<head>
		<title> &#8211; ADNAN BAYG</title>

  @include('include.links')  
  <link href="{{asset('public/css/style.css')}}" rel="stylessheet">

</head>




<body style="font-family: 'Open Sans Condensed', sans-serif;" class="eltd-side-menu-slide-from-right" >
	<div class="container-fluid">

	@include('include.header')
	
	@include('include.social_links')


	
	<div class="row">
	<div class="col-xs-offset-1 col-md-7 col-xs-10">
		

  @foreach($blog as $row)
		 			
		<div class="row mar-bottom20">
			<div class="col-md-5 col-xs-8 padding00" >
				<a href="{{asset($row->link)}}" >
					<img src="{{asset('public/upload/blog/'.($row->image).'.png')}}" style="width: 100%">
				</a>
			</div>
			<div class="col-md-7 col-xs-4">
				<a href="{{asset($row->link)}}" >
					<div class="blog-title">
						{{$row->title}}
					</div>
				</a>
				<div class="blog-date">
					{{$row->date}}
				</div>
				<div class="font12">
					{{$row->meta}}
				</div>
			</div>
       </div>
@endforeach

	</div>
	<div class="col-md-3" style="padding: 0px;" >
		<div class=" col-xs-offset-1 col-xs-11 col-md-offset-0 col-md-12" style=" padding: 10px; " >
		     <div class="col-xs-12 font18 pop-title"> Populer Posts</div>
		     <div class="row" style="padding: 10px 0px;">
		     	
@foreach($pop as $row)
		
			<div class="col-xs-5 col-md-12 mar-bottom20" style="padding: 0px;">
				<div class="col-xs-8">
					<a href="{{route('blog.show',$row->id)}}">
						<img src="{{asset('public/upload/blog/'.($row->image).'.png')}}" style="width: 100%">
					</a>
				</div>

				<div class="col-xs-4 pop-blog-title" >
					<a href="{{route('blog.show',$row->id)}}" style="width: 100%">{{$row->title}} ...</a>
				</div>
			</div>
		
		
@endforeach
	
	</div>
		</div>
		
	</div>

	<div class="col-xs-1"></div>

</div>

<div style="margin-top: 100px"></div>
	</div>

	@include('include.footer')
</div>

</body>
</html>