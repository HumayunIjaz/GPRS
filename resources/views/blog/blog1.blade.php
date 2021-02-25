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
  <div class="col-xs-offset-1 col-md-7">
    
     <div class="row" style="margin-bottom: 50px;">
      <img class=" col-xs-12" src="{{asset('public/upload/blog/blog1.png')}}">
     </div>
    <div class="row">

    <div class="  col-xs-11 col-md-12 font18  " align="justify">
      <strong>Adnanbaigart.com</strong>, a platform for the moths, in love with the flame of art, is provided with the subtle twirls of ancient calligraphy created through the symphony of texts, colors, textures and moments that will seize the thoughts but will surely escort imaginations to perpetuity.<br> 
      Mr. Adnan Baig, the esthetician, a discoverer who reveals the sensations with the strokes of his brushes and takes the viewer towards a mystical journey of art. Mr. Adnan is more than a trendsetter, presenting a staggering compilation of thoughts and reality through colors.<br>
      You can find eccentric pieces of Arabic calligraphy and Urdu calligraphy created with numerous calligraphy fonts e.g. Kufic, Diwani,nastaliq and many others. He is motivated to present Islamic calligraphy and take the people back in the era of early Islam, where Islamic calligraphy evolved.<br>
      A not on the evolution of earliest Islamic calligraphy:<br> 
      During the era of Prophet Muhammad SAWW, the work for Arabic calligraphy was started but remained unnoticed until the caliphate of Othman, (the third Muslim caliph). As calligraphy transcripts remained overlooked for the era of Prophet Muhammad so we cannot completely tell which calligraphy fonts and penning techniques were used, and the scripts had been developed.  But as aforesaid, Islamic calligraphy art started to came in notice during the regime of third Muslim caliph, we have shreds of evidence that which calligraphy font was introduced by the third Caliph.<br> 
      One noticeable point is that the Shi’a and Sunnis have contradictory views on the writing of the Quran and Arabic calligraphy earliest fonts. Shias believe that first ever was written and compiled by Ali, the fourth caliph, and the First Imam, in the very life of the Prophet. A manuscript of the aforesaid Quran has been preserved at the museum in Iraq and it is written in the calligraphy art of Kufic font.<br> 
      Contrary to this, Sunnis have manuscripts of the earliest Quran, developed by the third caliph; it is the time when work for preserving and writing the Quran had conducted at a vast level. During this era, the script similar to Kufic calligraphy font was used but named as the calligraphy Samarkand font. This script of Quran can also be found in different art galleries and museums of Muslim countries.<br>
      Regardless of the contradictions between Muslims Fiqh about the earliest composition of Quran still we can have a view that epoch of Islamic calligraphy art is as antique as the Islam itself. Moreover, when Islam evolved and reached in the new regions, it gave birth to the different calligraphy fonts for various languages. 
      From the earliest time to till now, calligraphy developed a lot and instead of being limited to just Arabic, we can find the masterpieces in almost every language such as; Urdu calligraphy, Persian calligraphy. <br>
      Also, with the passage of time, the calligraphy art proved itself supple to soak the abstract art in itself.<br> 
      The modern art we found is a subtle blend of abstract art and calligraphy.<br>


    </div>
    </div>

  </div>
  <div class="col-md-3" >
    <div class=" col-xs-offset-1 col-xs-11 col-md-offset-0 col-md-12" style=" padding: 10px; " >
         <div class="col-xs-12 font18 pop-title"> Populer Posts</div>
         <div class="row" style="padding: 10px 0px;">
          
  @foreach($blog as $row)
    
      <div class="col-xs-5 col-md-12 mar-bottom20" style="padding: 0px;">
        <div class="col-xs-8">
          <a href="{{asset($row->link)}}">
            <img src="{{asset('public/upload/blog/'.($row->image).'.png')}}" style="width: 100%">
          </a>
        </div>

        <div class="col-xs-4 pop-blog-title" >
          <a href="{{asset($row->link)}}" style="width: 100%"> {{$row->title}} ...</a>
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