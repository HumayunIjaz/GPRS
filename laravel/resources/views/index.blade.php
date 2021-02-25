

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


 
  
  <div class="row" >
    <img class="col-md-offset-1 col-md-10 index_img" style="" src="{{asset('public/upload/index.jpg')}}" >
    </div>
  </div>
  <div class="row" >
    <img class="col-xs-offset-1 col-xs-10 index_img index_img_mob"  src="{{asset('public/upload/index_mob.jpg')}}" >
    </div>
  </div>
  

<br>
<br>
          
        <div style="text-align: center;">
          <a href="{{asset('gallery')}}" target="_self"  class="eltd-btn eltd-btn-medium eltd-btn-outline eltd-btn-background-animation"  >            <span class="eltd-btn-background">            <span class="eltd-btn-background-inner" ></span>        </span>        <span class="eltd-btn-text">View Gallery</span>    </a>      
                </div>

<div style="margin-top: 100px"></div>
  </div>

  @include('include.footer')
</div>

</body>
</html>