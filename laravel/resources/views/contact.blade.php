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



<div class="row" >
      <div class="col-xs-offset-1 col-xs-10">
          <div style="height: 450px" id="map"></div>
      </div>
      <div class="col-xs-1"></div>
</div>



<div class="row">
    <div class="col-xs-offset-1 col-xs-5">
                        <h2 class="eltd-custom-font-holder  eltd-cf-4082" style="font-family: Montserrat;font-size: 100px;line-height: 110px;font-weight: 700" data-item-class="eltd-cf-4082" data-font-size-680="60px" data-line-height-680="70px">
                        Contact
                        </h2>
      </div>
</div>               
<div class="row">
      <div class="col-xs-offset-1 col-md-5 col-xs-10">
          <div class="row" >
                <div class="col-xs-8"> 
                      <div class="eltd-info-item-list">
                            <div class="eltd-info-item-list-inner clearfix">
                                <div class="eltd-info-item-list-title">
                                    <h3 class="eltd-info-item-main-title">Our Office</h3>
                                </div>
                                <h4>RCG STORE, KOHINOOR CITY,<BR></h4>
                            </div>
                      </div>
                      <h5 style="margin-top: 0; text-transform: lowercase;"><a href="mailto:adnanbayg@gmail.com">adnanbayg@gmail.com</a></h5>
                     
                </div>
          </div>
      </div>
  <div class="col-xs-offset-1 col-md-offset-0 col-md-6 col-xs-10">
      <div class="row">
         <div class=" col-xs-10">
              <div style="padding: 24px 0 0 0">
                <div role="form" class="wpcf7" id="wpcf7-f346-p654-o2" lang="en-US" dir="ltr">
                    <form action="{{asset('/insert')}}" method="post" >
                      {{csrf_field()}}
                              <input type="text" name="name" size="40" placeholder="Name" required />
                              <input type="email" name="email" size="40" placeholder="Email" required />
                              <textarea name="massage" cols="40" rows="8" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Text" required></textarea>
                              <p><input  type="submit" value="CONTACT US" class="wpcf7-form-control wpcf7-submit" name="sub" /></p>
                    </form>
                </div> 
            </div>
          </div>
        </div>
     </div>
</div>
<div style="margin-top: 100px"></div>
	</div>

	@include('include.footer')
</div>

</body>
</html>
