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
	   <div class="col-xs-offset-1 col-xs-10 " >
                     
          <img id="img" class="col-md-offset-0 col-md-12" src="{{asset('public/upload/'.($row->name).'/painting.jpg')}}" />
                      
      </div>
	</div>
   <script type="text/javascript">
      $(document).ready(function(){
        $("#img").elevateZoom({zoomType : "lens" , lensShape : "square" , lensSize : 200 });

      //$("#img").elevateZoom({});
      });
    </script>
    <div style="margin-top: 100px"></div>
	@include('include.footer')
</div>

</body>
</html>