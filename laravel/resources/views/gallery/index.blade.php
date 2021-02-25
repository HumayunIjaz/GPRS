<!DOCTYPE html>
<html lang="en-US">
<head>
		<title> &#8211; ADNAN BAYG</title>

  @include('include.links') 
  @include('include.map')  
  <link href="{{asset('public/css/style.css')}}" rel="stylessheet">

</head>




<body style="font-family: 'Open Sans Condensed', sans-serif;" class="eltd-side-menu-slide-from-right" >
	<div class="container-fluid">

	@include('include.header')
	
	@include('include.social_links')


<div class="row">
    <div class="eltd-portfolio-list-holder eltd-pl-gallery eltd-large-space eltd-pl-gallery-slide-from-image-bottom  eltd-pl-has-animation eltd-appear-bottom-slow " >
    <div class="col-xs-offset-1 col-md-10">
      <div class="row">

     @foreach($paintings as $row)
  
        <div class="col-md-4 col-xs-11 padding00" >
            <div class="eltd-outer-space  ">
              <article class="eltd-pl-item eltd-item-space  post-527 portfolio-item type-portfolio-item status-publish has-post-thumbnail hentry portfolio-category-design portfolio-tag-colorful portfolio-tag-design portfolio-tag-ideas">
                <a href="{{asset('public/upload/'.($row->name).'/painting.jpg')}}">  
                  <img class="col-xs-12" src="{{asset('public/upload/'.($row->name).'/painting.jpg')}}" alt="{{$row->name}}">
                
                  <div class="eltd-pli-text-holder" style="margin-left: 15px">
                    <div class="eltd-pli-text-wrapper">
                        <div class="media-list  td-pli-text">
                          <h4  class="eltd-pli-title entry-title" >
                          {{$row->name}}
                          </h4>
                          <br>
                          <a class="" href="">Painting</a>
                        </div>
                    </div>
                  </div>
                      
                  </a>
              </article>
            </div>  
        </div>
        @endforeach
</div>
</div>
</div>


          <div class="row">
            <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">
              <div class="eltd-img-over-title-holder eltd-dark-skin">
                <div class="" >
                  <img src="{{asset('public/upload/adnan-shb.jpg')}}" alt="Image Overlapping Title Alt">
                </div>
              <div class="eltd-img-over-title-section right" >
                <div class="eltd-img-title-holder">
                          <h2 class="eltd-img-title">Studio Painting</h2>
                </div>
                <div class="">
                  <p class="eltd-img-subtitle">An exploration of non-objective abstractions is my work. I believe it should have close similarity to a musical symphony which is the most abstract form of art</p>
                </div>
                <div class="">
                  <a href="{{asset('bio')}}" target="_self"  class="eltd-btn eltd-btn-medium eltd-btn-outline eltd-btn-background-animation"  >            <span class="eltd-btn-background">            <span class="eltd-btn-background-inner" ></span>        </span>        <span class="eltd-btn-text">Read More</span>    </a>     
                </div>
              </div>
                </div>
            </div>
          </div>
        


   
</div> 
  </div> 
<br>
<br>
	@include('include.footer')
</div>

</body>
</html>