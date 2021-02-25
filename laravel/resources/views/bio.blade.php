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


	
	<div  class="row">
		<div class="col-xs-offset-1 col-xs-10">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('public/upload/pic.JPG')}}" alt="PIC 1" style="width:100%;">
      </div>

      <div class="item">
        <img src="{{asset('public/upload/pic2.JPG')}}" alt="PIC 1" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="{{asset('public/upload/pic5.JPG')}}" alt="PIC 1" style="width:100%;">
      </div> 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
		</div>
		<div class=col-xs-1""></div>
	</div>
	
	<div class="row">
		<div class="col-xs-offset-1 col-md-7 col-xs-10" >
			<div class="eltd-custom-font-holder eltd-cf-1915" style="font-size: 42px; line-height: 110px;font-weight: 700" >
					About Adnan Bayg
			</div>

			<p align="justify" class="font18" >
				An exploration of non-objective abstractions is my work. I believe it should have close similarity to a musical symphony which is the most abstract form of art.  I also believe that a painting must needs be rhythmical, harmonious, and life-like with a streak of spell-binding magic. It must communicate.<br>


				I create something out of nothing through a combination of colours, texts & textures, materials, and torn or cut up bits of a collage et al. Sometimes I draw on paper before painting on canvas whereas at others, I work intuitively. I set my inner self, as it were, at liberty to express what it wants me to. Geometric shapes, figurative balances, and calligraphic strokes haunt me.<br>

				I grew up with a passion for colours. I did my post-graduation in Psychology from the Govt College Lahore. <br>

				My recent work is a poetic expression of my exploration, my frantic but earnest endeavour to 'know' myself as also to know the Creator, to converse with Him.
			</p>
		</div>
<div class=" col-xs-offset-1 col-md-offset-0 col-md-3 col-xs-10" >
 <img src="{{asset('public/upload/adnan_baig.jpg')}}" style="width: 100%;margin-top: 20%" >
</div>
	
		</div>
<div style="margin-top: 100px"></div>
	</div>

	@include('include.footer')
</div>

</body>
</html>