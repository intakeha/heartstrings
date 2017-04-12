<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js gt-ie8">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>HeartStrings Music</title>

<!--=================================
Meta tags
=================================-->

<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.png">

<!--=================================
Style Sheets
=================================-->
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<!--Plugins CSS Files-->
<link rel="stylesheet" type="text/css" href="css/bootstrap1.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="css/animations.css">
<link rel="stylesheet" type="text/css" href="css/bigvideo.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
<!--custom styles for theme-->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/color3.css">

<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

<!--Google Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62354475-1', 'auto');
  ga('send', 'pageview');

</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>


<body data-spy="scroll" data-target="#sticktop" data-offset="70">
<!--=====================================
Preloader
========================================-->

<div id="jSplash">
	<img src="images/preload-logo.png" alt=""/>
</div>

<div class="wide_layout box-wide">
    <!--=================================
    Vegas Slider Images 
    =================================-->
    <ul class="vegas-slides hidden" data-speed="80000">
      <li><img data-fade='2000' src="images/bg-10.jpg" alt="" /></li>      
    </ul>
    <!--================
     Banner
    ====================-->
    <section id="home" class="banner banner_slider hero_section banner-right-align">
      <div class="container">
		<div class="row">
			<div class="col-xs-12">
			<!--
			<ul class="vegas-controls">
				<li class="active"><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
			</ul>
			-->
				<div class="hero_content banner-content animatedParent animateLoop" data-sequence="700">
				
					<h1 class="animated bounceInLeft" data-id="1"><img src="images/heartstrings-logo.png" alt="" style="height: 160px; margin-bottom: 10px;" /><br>HeartStrings Music</h1>
					<p class="animated bounceInLeft" data-id="2"> 
					A wonderful and unique listening experience!
					</p>
					<p class="animated bounceInLeft" data-id="3" style="line-height: 20px;"> 
					Al Fabrizio's expressive mandolin with Hugo Wainzinger's heartwarming guitar and arrangements transport listeners to romantic places and favorite memories.
					</p>
					<div class="caption-buttons animated bounceInLeft" data-id="4">
						<a href="#music" class="btn btn-default btn-scroll">Albums</a>
						<a href="#schedule" class="btn btn-default btn-scroll">Performances</a>
						<a href="#booking" class="btn btn-default btn-scroll">Book Us</a>
						<a href="#about" class="btn btn-default btn-scroll">About Us</a>
						<a href="#studio" class="btn btn-default btn-scroll">Recording Studio</a>
					</div>    
				</div>
				
			</div>
			<div class="col-xs-12" style="text-align: center; margin-top: 30px;">
				 scroll  down <img src="images/scroll-down.png" style="height: 20px; margin-top: -5px;"/>
			</div>
		</div>
      </div>  
      
    <!--=================================
    JPlayer (Audio Player)
    =================================-->
      <!--Do not edit this section Unless you have to modify HTML structure of Playlist-->
      <div class="rock_player pre_sticky">
      <div class="sticky_player" data-sticky="true">
        <div class="play_list">
          <div class="list_scroll">
            <div class="container ">
              <ul class="music_widget player_data">
                <li class="music_row_header">
                  <div class="column_one"> # </div>
                  <div class="column_two"> &nbsp;<!--no header for picture column--> 
                  </div>
                  <div class="column_three"> track name </div>
                  <div class="column_four"> genre </div>
                  <div class="column_five">  &nbsp;</div>
                  <div class="column_six"> length </div>
                  <div class="column_seven"> &nbsp;<!--no header for play column--> 
                  </div>
                  <div class="column_eight"> &nbsp;<!--no header for btn column--> 
                  </div>
                </li>
                <li class="music_row">
                  <div class="column_one track_index"></div>
                  <div class="column_two track_thumb"></div>
                  <div class="column_three track_title"></div>
                  <div class="column_four track_genre"></div>
                  <div class="column_five track_composer"></div>
                  <div class="column_six track_length"></div>
                  <div class="column_seven"></div>	
                  <div class="column_eight"> <a class="play_it" href="#"><span class="fa fa-play"></span></a><a class="continue_it" href="#" style="display: none;"><span class="fa fa-play"></span></a><a href="#" class="pause_it" style="display: none;"><span class="fa fa-pause"></span></a><a href="http://en.wikipedia.org/wiki/Volare_%28song%29"><span class="fa fa-info"></span></a> <a class="itunesLink" href="http://www.cdbaby.com/Search/YWwgZmFicml6aW8gaHVnbyB3YWluemluZ2Vy/0"><span class="fa fa-download"></span></a> </div>
                  
                </li>
                <!--music row-->
                
                <li class="music_row">
                  <div class="column_one track_index"></div>
                  <div class="column_two track_thumb"></div>
                  <div class="column_three track_title"></div>
                  <div class="column_four track_genre"></div>
                  <div class="column_five track_composer"></div>
                  <div class="column_six track_length"></div>
                  <div class="column_seven"></div>
                  <div class="column_eight"> <a class="play_it" href="#"><span class="fa fa-play"></span></a><a class="continue_it" href="#" style="display: none;"><span class="fa fa-play"></span></a><a href="#" class="pause_it" style="display: none;"><span class="fa fa-pause"></span></a><a href="http://www.npr.org/2011/08/31/140090247/on-location-a-summertime-romance-in-venice"><span class="fa fa-info"></span></a> <a class="itunesLink" href="http://www.cdbaby.com/Search/YWwgZmFicml6aW8gaHVnbyB3YWluemluZ2Vy/0"><span class="fa fa-download"></span></a> </div>
                </li>
                <!--music row-->
                <li class="music_row">
                  <div class="column_one track_index"></div>
                  <div class="column_two track_thumb"></div>
                  <div class="column_three track_title"></div>
                  <div class="column_four track_genre"></div>
                  <div class="column_five track_composer"></div>
                  <div class="column_six track_length"></div>
                  <div class="column_seven"></div>
                  <div class="column_eight"><a class="play_it" href="#"><span class="fa fa-play"></span></a><a class="continue_it" href="#" style="display: none;"><span class="fa fa-play"></span></a><a href="#" class="pause_it" style="display: none;"><span class="fa fa-pause"></span></a><a href="http://en.wikipedia.org/wiki/%E2%80%99O_sole_mio"><span class="fa fa-info"></span></a> <a class="itunesLink" href="http://www.cdbaby.com/Search/YWwgZmFicml6aW8gaHVnbyB3YWluemluZ2Vy/0"><span class="fa fa-download"></span></a> </div>
                </li>
                <!--music row-->
              </ul>
              <!--music_widget--> 
            </div>
            <!--container--> 
          </div>
        </div>
        
        <!--//=============================================================
        Edit or Modify Playist content in the following Hypertext
        ==============================================================-->
        <div class="jp-playlist hidden"> 
          <!--Add Songs In mp3 formate here-->
          <ul class=" playlist-files">
            <li 
		data-title="Volare"
		data-thumb="images/volare.jpg"
		data-genre="Classics"  
		data-length="2:35"  
		data-mp3="mp3/Volare.mp3"></li>
            <li 
		data-title="Summertime in Venice"
		data-thumb="images/summer-venice.jpg"
		data-genre="Classics"  
		data-length="3:36"  
		data-mp3="mp3/Summertime-in-Venice.mp3"></li>
            <li 
		data-title="'O Sole Mio"
		data-thumb="images/o-sole-mio.jpg"
		data-genre="Classics"  
		data-length="3:52"  
		data-mp3="mp3/O-Sole-Mio.mp3"></li>		   
	</ul>
          <!--Playlist ends--> 
        </div>
        <div class="container player_wrapper">
          <div class="row">
            <div id="player-instance" class="jp-jplayer"></div>
            <div class="jp-title audio-title"></div>
            <div class="rock_controls controls">
              <div  class="fa fa-play jp-play"></div>
              <div  class="fa fa-pause jp-pause"></div>
            </div>
            <!--controls-->
            <div class="audio-progress">
              <div class="jp-seek-bar">
                <div class="audio-play-bar jp-play-bar" style="width:20%;"></div>
              </div>
              <!--jp-seek-bar--> 
            </div>
            <!--audio-progress-->
            <div class="audio-timer"> <span class="jp-current-time"></span> </div>
            <div class="jp-volume">
              <ul>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li class="active"><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
            <a href="#" class="playlist_expander fa fa-bars"></a> </div>
        </div>
      </div></div>
    </section>
    <!--//banner--> 
    <!--=========================
     Header
    ===========================-->
    <header>
      <nav id="sticktop" class="navbar navbar-default" data-sticky="true">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand btn-scroll" href="#home"><img src="images/heartstrings-logo.png" alt="logo""/></a> </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
	    <li><a href="#music">Albums</a></li>
	    <li><a href="#performances">Performances</a></li>
	    <li><a href="#booking">Book Us</a></li>
	    <li><a href="#about">About Us</a></li>
	    <li><a href="#studio">Studio</a></li>
            </ul>
          </div>
          <!--/.nav-collapse --> 
        </div>
      </nav>
    </header>
    
    <div class="sections_wrapper"> 
 
   <!--=============
    Albums
    ===============-->
      <section id="music" class="track_section">
        <div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8">
				<div class="section_head_widget animatedParent ">
					<h2 class="animated fadeInLeft">HeartStrings Music</h2>
					<h5 class="animated bounceInRight">Albums</h5>
				</div>
				<div style="text-transform: none;">Please contact us directly at (650) 625-1222 or INFO@HEARTSTRINGSMUSIC.COM to purchase signed copies of the CDs.</div>
				
				<!--section_head_widget--> 
			</div>
		</div>
		<!--row-->
		<div class="row tracks_widget">

			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/serenata-italiana.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>Serenata Italiana</h4>
							<h6>15 tracks</h6>
						</div>
						<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover">
						<a class="album-details" href="#" data-toggle="modal" data-target="#serenata-italiana">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/alfabrizio2" target="_blank">Buy CD</a>
					</div>
					<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->
            
			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/italian-heartstrings.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>Italian Heartstrings</h4>
							<h6>14 tracks</h6>
						</div>
					<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover"> <a class="album-details" href="#" data-toggle="modal" data-target="#italian-heartstrings">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/alfabrizio1" target="_blank">Buy CD</a></div>
					<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->
            
			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/bella-serenata.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>Bella Serenata</h4>
							<h6>15 tracks</h6>
						</div>
					<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover"> <a href="#" class="album-details" data-toggle="modal" data-target="#bella-serenata">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/alfabrizio3" target="_blank">Buy CD</a></div>
				<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->
            
			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/serenata-amore.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>Serenata D'amore</h4>
							<h6>15 tracks</h6>
						</div>
					<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover"> <a class="album-details" href="#" data-toggle="modal" data-target="#serenata-amore">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/alfabrizio4" target="_blank">Buy CD</a></div>
					<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->

			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/world-heartstrings.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>World Heartstrings</h4>
							<h6>15 tracks</h6>
						</div>
					<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover"> <a class="album-details" href="#" data-toggle="modal" data-target="#world-heartstrings">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/alfabrizio5" target="_blank">Buy CD</a></div>
					<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->
			
			<div class="col-sm-4 col-xs-12 animatedParent">
				<div class="track_box animated fadeInUp">
					<figure><img src="images/mandolin-for-lovers.png" alt="" /></figure>
					<div class="track_info_wrapper hide">
						<div class="track_info">
							<h4>Mandolin for Lovers</h4>
							<h6>15 tracks</h6>
						</div>
					<!--news_info--> 
					</div>
					<!--//news_info_wrapper-->
					<div class="hover"> <a class="album-details"  href="#" data-toggle="modal" data-target="#mandolin-for-lovers">Album Details</a><a class="album-details" href="http://www.cdbaby.com/cd/fabriziowainzinger" target="_blank">Buy CD</a> </div>
				<!--//hover--> 
				</div>
			<!--//news_box--> 
			</div>
			<!--column-->

		</div>
	</div>
    </section>    
 
       <!--======================================
    Parallax/event_promo Section
    ==========================================-->
      <section id="performances" class="parallax parallax_three event_promo" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 animatedParent animateLoop">
					<h1 class="animated fadeInDown">Performing Live!</h1>
					<h3 class="animated bounceInRight">San Francisco Bay Area</h3>
					<a href="#schedule" class="btn btn-scroll animated bounceInUp">2017 Schedule</a>
				</div>
			<!--column--> 
			</div>
		    <!--row--> 
		</div>
          <!--container--> 
        </div>
        <!--parallax_inner--> 
      </section>
      <!--//parallax--> 
 
      <!--======================================
    Performances Section
    ==========================================-->
      <section id="schedule" class="tours_section">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget">
                <h2>Performances</h2>
                <h5>2017 HeartStrings Schedule</h5>
              </div>
            </div>
            <!--section_head_widget--> 
          </div>
          <!--row-->
          
          <div class="tours_widget">
            <div class="tour_row_header">
              <div class="column_one"> Date </div>
              <div class="column_two"> &nbsp;<!--no header for picture column--> 
              </div>
              <div class="column_three"> Event </div>
              <div class="column_four"> Location </div>
              <div class="column_five"> Venue </div>
              <div class="column_six"> Links </div>
            </div>
            
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>May 6-7</span>
                </div>
                <div class="column_two"> <img src="images/wine-country-festival.jpg" alt="" /> </div>
                <div class="column_three"> Wine Country Festival </div>
                <div class="column_four"> Livermore, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.livermoredowntown.com/livermore-wine-country-downtown-street-fest/2017/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
	<!--
	   <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>May 7-8</span>
                </div>
                <div class="column_two"> <img src="images/spring-festival.jpg" alt="" /> </div>
                <div class="column_three"> Park Street Spring Festival </div>
                <div class="column_four"> Alameda, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://downtownalameda.com/Spring-Festival" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->

	  <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>May 27-28</span>
                </div>
                <div class="column_two"> <img src="images/strawberry.jpg" alt="" /> </div>
                <div class="column_three"> Strawberry Festival </div>
                <div class="column_four"> Arroyo Grande, CA</div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://arroyograndevillage.org/strawberryfestival" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
	<!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>June 4-5</span>
                </div>
                <div class="column_two"> <img src="images/art-wine-festival.jpg" alt="" /> </div>
                <div class="column_three">Art and Wine Festival </div>
                <div class="column_four"> Walnut Creek, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.artwinefestivalwc.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
	<!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>June 13-14</span>
                </div>
                <div class="column_two"> <img src="images/north-beach.jpg" alt="" /> </div>
                <div class="column_three"> North Beach Festival </div>
                <div class="column_four"> San Francisco, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.sresproductions.com/north_beach_festival.html" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
	
	<div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>June 10-11</span>
                </div>
                <div class="column_two"> <img src="images/novato.jpg" alt="" /> </div>
                <div class="column_three"> Art and Wine Festival</div>
                <div class="column_four"> Novato, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.novatoartwinemusic.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
          <!--tour row-->

	<!--
	<div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>June 26-27</span>
                </div>
                <div class="column_two"> <img src="images/san-anselmo.jpg" alt="" /> </div>
                <div class="column_three"> Art and Wine Festival</div>
                <div class="column_four"> San Anselmo, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.sresproductions.com/events/san-anselmo-art-wine-festival/" target="_blank">Event Info</a> </div>
              </div>
            </div>
          <!--tour row-->

	<!--
	<div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>July 6</span>
                </div>
                <div class="column_two"> <img src="images/stanford.png" alt="" /> </div>
                <div class="column_three">Stanford Hospital Atrium</div>
                <div class="column_four"> Stanford, CA </div>
                <div class="column_five"> Atrium</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="https://stanfordhealthcare.org/events/bing-concert-series.html" target="_blank">Event Info</a> </div>
              </div>
            </div>
          <!--tour row-->
	
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>July 15-16</span>
                </div>
                <div class="column_two"> <img src="images/summerfest.jpg" alt="" /> </div>
                <div class="column_three"> Menlo Summerfest</div>
                <div class="column_four"> Menlo Park, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://summerfest.miramarevents.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>July 29-30</span>
                </div>
                <div class="column_two"> <img src="images/wine-faire.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Faire </div>
                <div class="column_four"> Alameda, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://downtownalameda.com/Art-Wine-Faire" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>August 5-6</span>
                </div>
                <div class="column_two"> <img src="images/fremont-festival.jpg" alt="" /> </div>
                <div class="column_three"> Festival of the Arts </div>
                <div class="column_four"> Fremont, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://fremontfestival.net/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>August 12</span>
                </div>
                <div class="column_two"> <img src="images/benicia.jpg" alt="" /> </div>
                <div class="column_three"> Benicia Peddler's Fair </div>
                <div class="column_four"> Benicia, CA </div>
                <div class="column_five"> Outdoor Festival </div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.beniciapeddlersfair.org/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row-->
            
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>August 26-27</span>
                </div>
                <div class="column_two"> <img src="images/italian-family-festa.jpg" alt="" /> </div>
                <div class="column_three"> Family Festa Italiana </div>
                <div class="column_four"> San Jose, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="https://www.italianfamilyfestasj.org/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 2-3</span>
                </div>
                <div class="column_two"> <img src="images/millbrae-art-wine-festival.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Festival </div>
                <div class="column_four"> Millbrae, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://millbrae.miramarevents.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 9-10</span>
                </div>
                <div class="column_two"> <img src="images/mountain-view-art-wine.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Festival</div>
                <div class="column_four"> Mountain View, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://mountainview.miramarevents.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

	<!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 19-20</span>
                </div>
                <div class="column_two"> <img src="images/santa-clara-art-wine.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Festival</div>
                <div class="column_four"> Santa Clara, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://santaclaraca.gov/index.aspx?page=2904" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 16-17</span>
                </div>
                <div class="column_two"> <img src="images/lafayette-art-wine.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Festival</div>
                <div class="column_four"> Lafayette, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.lafayettechamber.org/events/art-wine-festival/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

	  <!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 24-25</span>
                </div>
                <div class="column_two"> <img src="images/fogfest.jpg" alt="" /> </div>
                <div class="column_three"> Menlo Park Market Place </div>
                <div class="column_four"> Menlo Park, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://pacificcoastfogfest.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 
	    
	  <!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>September 26-27</span>
                </div>
                <div class="column_two"> <img src="images/fogfest.jpg" alt="" /> </div>
                <div class="column_three"> Pacific Coast Fog Fest </div>
                <div class="column_four"> Pacifica, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://pacificcoastfogfest.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <!--
	    <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>October 2</span>
                </div>
                <div class="column_two"> <img src="images/little_italy_sj.jpg" alt="" /> </div>
                <div class="column_three"> Little Italy Festival</div>
                <div class="column_four"> San Jose, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.littleitalysj.com/index.html" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>October 7-8</span>
                </div>
                <div class="column_two"> <img src="images/san-carlos-art-faire.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Wine Faire</div>
                <div class="column_four"> San Carlos, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="https://sancarlosartandwinefaire.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

            <!--
	    <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>October 15-16</span>
                </div>
                <div class="column_two"> <img src="images/hmb-art-pumpkin.jpg" alt="" /> </div>
                <div class="column_three"> Art &amp; Pumpkin Festival </div>
                <div class="column_four"> Half Moon Bay, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://pumpkinfest.miramarevents.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 

	<!--
            <div class="tour_row animatedParent  ">
              <div class="animated fadeInDownShort">
                <div class="column_one">
                  <span>August 29-30</span>
                </div>
                <div class="column_two"> <img src="images/danville-fall-craft.jpg" alt="" /> </div>
                <div class="column_three"> Fall Crafts Festival </div>
                <div class="column_four"> Danville, CA </div>
                <div class="column_five"> Outdoor Festival</div>
                <div class="column_six"> <a class="btn btn_buy_ticket" href="http://www.danvillefallcraftsfestival.com/" target="_blank">Event Info</a> </div>
              </div>
            </div>
            <!--tour row--> 
	
	<p style="margin-top: 50px;">
	EVERY THURSDAY 5:30 - 8:30 pm<br>
	Al Fabrizio performs at <a href="http://www.ilovegumbas.com/" target="_blank">Gombas' Italian Restaurant</a><br>
	176 S. Murphy, Sunnyvale, CA<br>
	(408) 737-8384
	<!--The 1st, 2nd &amp; 3rd Thursdays of every month Al Performs at <a href="http://www.ilovegumbas.com/" target="_blank">Gumba's Italian restaurant</a> in Sunnyvale, CA. 6PM to 9 PM.</p> -->
	</div>
        </div>
        <!--container--> 
      </section>
      <!--//tours--> 

     <!--======================================
    Contact Form
    ==========================================-->
      <section id="booking" class="parallax parallax_five" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="section_head_widget">
						<h2>Booking</h2>
						<h5 style="color: #ffcc33; margin-top: 10px;">We're available for weddings, corporate functions, and special occasions.</h5>
					</div>
					<div style="margin: 20px 0;">
						For quotes, bookings and studio reservations, please use the form below to contact us.
					</div>
					<div class="contact-loader"></div>
				</div>
			<!--section_head_widget--> 
			</div>
			<!--row-->
		
			
			<div class="row">
				<div class="col-xs-12">
					<div id="contact-form-bx" class="contact-form-bx">
						<form action="contact" id="contact-form" class="contact-form" name="cform" method="post">
							<div class="col-md-6">  
								<label for="name" id="name_label">Name</label>
								<span class="name-missing">Please enter your name</span>  
								<input id="name" type="text" value="" name="name" size="30"> 
							</div>
							
							<div class="col-md-6">  
								<label for="e-mail" id="email_label">Email</label>
								<span class="email-missing">Please enter a valid e-mail</span> 
								<input id="e-mail" type="text" value="" name="email" size="30">
							</div>
							
							<div class="col-md-12">
								<label for="message" id="phone_label">Message</label>
								<span class="message-missing">Let us know how we can help</span>
								<textarea id="message" name="message" rows="7" cols="40"></textarea>
							</div>
							<div class="col-md-12">
								<div align="center" class="g-recaptcha" data-sitekey="6LdljCMTAAAAAAWS_uWqPIjyBnUzWmxSqcb9viJo"></div><br>
							</div>
							
							<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
						</form>
					</div>
				</div>
			
				<!--
				<div class="col-xs-12">
					<div id="contact-form-bx" class="contact-form-bx">
						<div class="contact-loader">
							<form action="contact" id="contact-form" class="contact-form" name="cform" method="post">
								<div class="row">
								    <div class="col-md-6">  
									<label for="name" id="name_label">Name</label>
									<span class="name-missing">Please enter your name</span>  
									<input id="name" type="text" value="" name="name" size="30"> 
								    </div> 
								    <div class="col-md-6 columns"> 
									<label for="e-mail" id="email_label">Email</label>
									<span class="email-missing">Please enter a valid e-mail</span> 
									<input id="e-mail" type="text" value="" name="email" size="30">
								    </div>
								    <div class="col-md-12"> 
									<label for="message" id="phone_label">Message</label>
									<span class="message-missing">Let us know how we can help</span>
									<textarea id="message" name="message" rows="7" cols="40"></textarea>
								    </div>
								    <div class="col-md-12">
									<div class="g-recaptcha" data-sitekey="6LfQMAsUAAAAAA5vFOs6HQrHnEXYppo-j_LLsT0x"></div></br>
								    </div>
								    <div class="col-md-12 text-center"> 
									<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">  
								    </div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!--column-->
				
			</div>
			
			<!--row-->

		</div>
		<!--container--> 
        </div>
        <!--contact_inner--> 
      </section>
      <!--//contact--> 
 
        <!--======================================
    About
    ==========================================-->
      <section id="about" class="about_section sections_wrapper">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="section_head_widget animatedParent ">
	      <div style="margin-top: 5px;">&nbsp;</div>
                <h1 class="animated fadeInDown">Their amazing story</h1>
                <h4>how beautiful music is created</h4>
              </div>
            </div>
            <!--section_head_widget--> 
          </div>
          <!--row-->
          
          <div class="row">
            <div class="col-xs-12">
              <div class="text_widget" style="color: #fff;">
		<!--<p>It all started when Al Fabrizio met Hugo Wainziger in 1992 through a mutual friend, Carlos Lopez, a fellow mendolinist.  They worked together on creating 
		arrangements for many of Al's favorite Italian songs that he grew up with.  Over the years, Al and Hugo became great friends and created
		HeartStrings Music.  The two perform live all over the San Francisco Bay Area and recorded 6 classic albums together.</p> -->
		
		<p>Al (Anselmo) Fabrizio, born in Cortland, New York, grew up with a mother who loved
		harmonizing to songs on the radio, a father, (born in Italy) who played italian mandolin
		and two outstanding musician brothers. Al, the youngest, played clarinet, oboe and
		piano. His home was always filled with music. But he left music behind for a career 
		in graphic arts and as an art instructor at two local colleges in California. 
		When Al was 58 years of age he was shaken by the sudden passing of his brother,
		Raymond after a bout with cancer. That is when Al made a commitment to revive the
		music he loved and grew up with as a child and he begin seriously playing the 
		mandolin. At first he played duets with Dr. Carlos Lopez, an outstanding mandolinist in
		San Jose, California. Later, Carlos introduced him to Hugo Wainzinger, a master 
		guitarist and composer who had recently arrived from Argentina. The three musicians
		occasionally played together until Hugo and Al combined as a duet to record their first
		album of Italian favorites, "Serenata Italiana." The album's overwhelming reception 
		inspired them to continue recording together. </p>
		<p>They became long time friends and established a recording and production studio to
		work at music full time. By the year 2014 they released six successful albums featuring
		Al on mandolin and Hugo on guitar and additional instruments with his arrangements.
		Each album is a delightful package of easy-listening songs we all love from many
		countries, heart-warming, romantic, beautiful and refreshing. When they perform live,
		they receive accolades of thanks and appreciation. Their extensive repertoire and 
		popularity grows and fills their schedules. They perform together and separately all
		over California and beyond.</p>
		<p>At their studio, "Heartstrings Music. L.L.C." Hugo is the producer and sound engineer,
		recording, mixing and mastering musicians' projects and backgrounds and 
		also performing audio editing and restoring for film productions. He composes,
		arranges and often performs in the recordings as well. Two of
		nominations for California "Bammy" awards.</p>
		
                </div>
		
		

            </div>
          </div>
        </div>

          <div class="row  animatedParent animateLoop">
		<div class="col-md-4 col-md-offset-2 col-sm-6 col-xs-12">
			<figure class="profiles animated fadeInLeft" data-id="4">
				<img src="images/al-fabrizio.jpg" alt=""/>
				<a href="#" data-toggle="modal" data-target="#al_bio"><figcaption>Al Fabrizio's Bio</figcaption></a>
			</figure>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<figure class="profiles animated fadeInRight" data-id="5">
				<img src="images/hugo-wainziger.jpg" alt=""/>
				<a href="#" data-toggle="modal" data-target="#hugo_bio"><figcaption>Hugo Wainziger's Bio</figcaption></a>
			</figure>
		</div>		
	</div>
	
        <!--container--> 
      </section>
      <a class="trigger_slider btn_itunes" href="#" data-toggle="modal" data-target="#gal_pop"><span class="fa fa-download"></span>Press / Media Kit</a>
 
 <!--======================================
    Parallax/Studio
    ==========================================-->
      <section id="studio" class="parallax parallax_seven" data-stellar-background-ratio="0.5">
        <div class="parallax_inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 animatedParent animateLoop section_head_widget">
					<h2 class="animated fadeInDown" style="margin: 50px;">Recording Studio</h2>
					<p class="animated bounceInRight">Heartstrings Music Studio offers a full range of services in a creative-focused environment. Our individual approach and hospitality services include music recording and mixing, 5.1 surround mixing, music production services, and audio post production. </p>
					<ul id="studio-services">
						<li>Recording</li>
						<li>Mixing</li>
						<li>Mastering</li>
						<li>Composing</li>
						<li>Accompaniments</li>
						<li>Arranging</li>
						<li>Audio Restoration</li>
						<li>Soundtracks</li>
					</ul>
					
					<a href="#booking" class="btn btn-scroll animated bounceInUp">Studio Booking</a>
				</div>
			<!--column--> 
			</div>
		    <!--row--> 
		</div>
          <!--container--> 
        </div>
        <!--parallax_inner--> 
      </section>
      <!--//parallax--> 
 


      <!--======================================
    Parallax/facebook page promotion Section
    ==========================================-->
      <section id="facebook" class="parallax parallax_one facebook_promo animatedParent " data-stellar-background-ratio="0.5">
        <div class="parallax_inner ">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="animated fadeInUp">HeartStrings Music</h1>
                <h3 class="animated fadeInDown">"Like" If you love them! </h3>
                <a href="https://www.facebook.com/pages/Heartstrings-Music-LLC/143792555667721?ref=br_tf" class="btn btn_fb" target="_blank">like us on facebook</a> </div>
              <!--column--> 
            </div>
            <!--row--> 
          </div>
          <!--container--> 
        </div>
	<a href="http://www.cdbaby.com/Search/YWwgZmFicml6aW8gaHVnbyB3YWluemluZ2Vy/0" class="btn_itunes" target="_blank"><span class="fa fa-music"></span>HeartStrings Music</a>
        <!--parallax_inner--> 
      </section>
      <!--//parallax--> 
    
<!--======================================
    Parallax/Testimonial Section
    ==========================================-->
<div id="quotes" class="parallax parallax_two testimonial" data-stellar-background-ratio="0.5">
	<div class="parallax_inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="testimonial_quotes owl-carousel owl-theme ">
						<blockquote> <b class="fa fa-quote-left"></b>We were so lucky to have Al and Hugo play live at our wedding! They really set the mood for a fun and romantic atmosphere.
						<b class="fa fa-quote-right"></b> <div class="author_name">Rachel</div></blockquote>
						<blockquote> <b class="fa fa-quote-left"></b>I close my eyes and the music takes me away to Italy. The music is so exquisite, so authentic and so beautiful. 
						<b class="fa fa-quote-right"></b> <div class="author_name">Bonnie</div></blockquote>
						<blockquote> <b class="fa fa-quote-left"></b>This is music for your heart and soul . I've shared with my family and they love it just as much. Bravo!
						<b class="fa fa-quote-right"></b> <div class="author_name">Sylvia</div></blockquote>
						<blockquote> <b class="fa fa-quote-left"></b>Italian Heartstrings is a relaxing composition of romantic music. Its mood sweeps me away to a favorite cafe in Tuscany.
						<b class="fa fa-quote-right"></b><div class="author_name">A. Pelletier</div></blockquote>
						<blockquote> <b class="fa fa-quote-left"></b> I can see my grandparents from Sicily dancing to these tunes when I listen to your music. 
						<b class="fa fa-quote-right"></b><div class="author_name"> Bonnie</div></blockquote>
					</div>
				<!--testimonial_quotes carousel end here--> 
				</div>
			<!--column--> 
			</div>
		<!--row--> 
		</div>
		<!--container--> 
	</div>
	<!--parallax_inner--> 
</div>
<!--//parallax--> 

    <!--=====================================
    Pop Ups
    ==========================================-->
    
    <div id="jpID">
	<div id="jpContainer"></div>
    </div>

<!-- Modal Bios-->
<div class="modal fade" id="al_bio" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<div class="modal-body">
				<div class="container" style="text-transform: none; padding: 50px;">
					<img src="images/al-bio-header.jpg" alt="" />
					<p style="margin: 20px 0;">Al (Anselmo) Fabrizio's father emigrated to the United States from Abruzzi, Italy. Although his father worked hard
					as a carpenter, he played beautiful old Italian melodies on the mandolin at home. Since his early childhood Al was 
					enraptured by the plaintive sounds his dad produced and he never forgot those beautiful Italian songs. His family 
					were all gifted musicians. His mother would harmonize, his brother Raymond was a flute virtuoso, his brother Carl
					played trumpet and Al played clarinet. They would spend many happy hours playing music together.</p>

					<p style="margin-bottom: 20px;">However, for much of his adult life Al left music behind for a career as a graphic artist. He owned a graphics and 
					publishing company in Palo Alto, and also taught art at San Jose State University and Foothill College in California. 
					Al's career as a mandolinist did not begin until adulthood shortly after the sudden loss of his brother Raymond. It was
					then that he made a commitment to keep music alive in his family. He picked up his father's mandolin and started 
					playing beautiful Italian happy and romantic melodies that he remembered hearing his father play.</p>

					<p style="margin-bottom: 20px;">Al's life changed when he met Hugo Wainzinger, a virtuoso guitarist and composer. Al and Hugo played so well together
					that in 1997 they decided to record an album with Al playing the mandolin in the expressive Neapolitan "tremolo" style. 
					The album, "Serenata Italiana," stirred the hearts of listeners and took them through the canals of Venice, the vineyards
					of Tuscany and the hills of Sicily. This album was so widely received that they built a state of the art production and
					recording studio and they now have six albums with Italian, Latin and world favorite melodies, each album receiving five-
					star reviews. The CDs are: "Serenata Italiana," "Italian Heartstrings," "Bella Serenata," "Serenata D'Amore," "World
					Heartstrings" and "Mandolin for Lovers." </p>

					<p style="margin-bottom: 20px;">Al Fabrizio and Hugo Wainzinger are co-owners of Heartstrings Music, L.L.C. producing and recording for other musi-
					cians and various audio applications in Mountain View, California. They perform together and separately throughout the
					country for parties, weddings, corporate and private events and gatherings of all sorts.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="hugo_bio" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<div class="modal-body">
				<div class="container" style="text-transform: none; padding: 50px;">
					<img src="images/hugo-bio-header.jpg" alt="" />
					<p style="margin: 20px 0;">Hugo was born in Buenos Aires, Argentina and raised in Tucuman, Argentina. Since his childhood Hugo was exposed 
					to a wide variety of music largely through the influence of his mother, a passionate bolero singer known throughout 
					Argentina and many other countries in South and Central America. He also absorbed many styles and rhythms 
					from Argentina's wide cultural diversity and proximity to Brazil and Uruguay. When he was sixteen Hugo picked up 
					the guitar and started playing "by ear" all the music that he was exposed to. In his thirties he had the opportunity of
					orchestrating and conducting the musical, "Showboat" in Buenos Aires. </p>
					<p style="margin-bottom: 20px;">Hugo's skills span the entire music spectrum, folk to classical to jazz to the most recent musical trends.Hugo is fluent
					in Spanish, Portuguese and English. Shortly after Hugo arrived in the United States with his family in 1991, he met
					Carlos Lopez, a Peruvian mandolinist, who introduced him to Al Fabrizio, an Italian mandolinist. The three musicians
					performed at local venues for awhile, however Carlos left the trio shorty afterward and Hugo continued with Al and
					formed a partnership called "Heartstrings Music". Together they build a state of the art production and recording 
					studio and currently the two recorded their first album in 1997 called "Serenata Italiana." The album was an instant
					success and so well received that they went on to produce five more albums which continue to be very popular. Hugo
					also produced an album called "Lost In Your Eyes" featuring vocalist Shana Carlson with Hugo's own compositions
					with lyrics by Ken McKenzie. Hugo also produced "Quien Soy" featuring vocalist Lichi Fuentes from Chile. "Quien
					Soy" was reviewed by "Critic's Choice" calling it "the best Latin album of the year." Hugo also mixed the salsa album
					"Jardinero" by the great Cuban percussionist, Jesus Diaz. Hugo performed, mixed and mastered the album "Cuerdas
					de Fuego" for the renowned Paraguayan harpist, Ramon Romero. Hugo's latest work is an album of beautiful romantic
					favorite boleros called "Sombras" sung by Argentine vocalist Claudio Ortega. This album includes three of Hugo's
					original compositions. All the background arrangements, guitars and samplers are composed, performed and 
					orchestrated by Hugo.</p>

					<p style="margin-bottom: 20px;">Hugo has performed as a soloist and with other musicians at the San Francisco Jazz Festival, the San Jose Jazz 
					Festival, tango performances as well as leading jazz workshops. Hugo has appeared several times on Bay Area 
					television and radio.</p>
				</div>
			</div>
		</div>
	</div>
</div>



 	<!--=======================trackpopup - Serenata Italiana=============================-->
    <div class="modal fade" id="serenata-italiana" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>Serenata Italiana</h2>
                        <h6>15 tracks</h6>
		    <img src="images/serenata-italiana.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/alfabrizio2" target="_blank">Buy CD</a>
                    
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Tra Veglia e Sonno
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:40
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Speak Softly Love
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:16
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La Romanina
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:50
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Summertime in Venice
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:36
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Reginella Campagnola
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:15
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                           </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Maria, Mari!
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:43
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Non Ti Scordar di Me
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:24
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                           </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Sicilianedda
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:27
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Innamorata
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:21
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                               'O Paese d' 'O Sole
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:06
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                        <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                'O Sole Mio
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:53
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                          </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Torna a Surriento
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:00
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Volare
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:36
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Santa Lucia
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:29
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                15
                            </div>
                            <div class="column_two">
                            </div>
                            <div class="column_three">
                                Funiculi Funicula
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:38
                            </div>
                            <div class="column_seven">
				<a href="#" class="album1_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album1_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a>
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->               
            </div>
          </div>
        </div>
      </div>
	<!--=======================trackpopup - Italian Heartstrings=============================-->
    <div class="modal fade" id="italian-heartstrings" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>Italian Heartstrings</h2>
                        <h6>14 tracks</h6>
                        <img src="images/italian-heartstrings.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/alfabrizio1" target="_blank">Buy CD</a>
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Comme facetta mommetta
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:43
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Mattinata
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:12
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Guaglione
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                               3:11
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Cuore Napolitano
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:18
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La donna e`mobile
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                1:59
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Ritorna a me
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:10
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Drigo's Serenade
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:57
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Fiorin Fiorello
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:02
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Mamma mia, che vo' sape'?!
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:02
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Marina
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:47
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                O Marinariello
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:06
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Farfalla
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:38
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Tempo Colombiano
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:24
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La Playa
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:32
                            </div>
                            <div class="column_seven">
				<a href="#" class="album2_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album2_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->            
            </div>
          </div>
        </div>
      </div>

 	<!--=======================trackpopup - Bella Serenata=============================-->
    <div class="modal fade" id="bella-serenata" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>Bella Serenata</h2>
                        <h6>15 tracks</h6>
                        <img src="images/bella-serenata.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/alfabrizio3" target="_blank">Buy CD</a>
			
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Bambina Mia
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:12
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Mamma
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:11
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Perfidia
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                              3:14
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Che La La
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:56
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Al Di La
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:35
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Maria Bonita
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:58
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Dicitencello Vuie
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:26
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Come Le Rose
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:49
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Besame Mucho
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:13
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Maria Elena
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:41
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Arrivederci Roma
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:52
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                I'te Vurria Vasa
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:16
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Spanish Eyes
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:38
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Non Dimenticar
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:14
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	

                       <div class="music_row">
                            <div class="column_one">
                                15
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Tarantella Popolare
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:27
                            </div>
                            <div class="column_seven">
				<a href="#" class="album3_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album3_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->            
            </div>
          </div>
        </div>
      </div>
 
	<!--=======================trackpopup - Serenata D'Amore=============================-->
    <div class="modal fade" id="serenata-amore" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>Serenata D'Amore</h2>
                        <h6>15 tracks</h6>
                        <img src="images/serenata-amore.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/alfabrizio4" target="_blank">Buy CD</a>
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Vieni Sul Mar
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:27
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Antonietta
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:39
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Cancion Mixteca
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                              3:48
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                More
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                               5:22
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                O' Mio Babbino Caro
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:57
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Que Sera' Sera'
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:03
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Con Te Partiro'
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:12
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Cielito Lindo
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:44
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Anema e Core
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:02
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Quando, Quando, Quando
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:57
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La Golondrina
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:12
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Tu Ca Nun Chiagne
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:34
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Y Nos Dieron Las Diez
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:33
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Core 'NGrato
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:17
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	

                       <div class="music_row">
                            <div class="column_one">
                                15
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Chitarra Romana
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:21
                            </div>
                            <div class="column_seven">
				<a href="#" class="album4_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album4_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->            
            </div>
          </div>
        </div>
      </div>

	<!--=======================trackpopup - World Heartstrings=============================-->
    <div class="modal fade" id="world-heartstrings" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>World Heartstrings</h2>
                        <h6>15 tracks</h6>
                        <img src="images/world-heartstrings.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/alfabrizio5" target="_blank">Buy CD</a>
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Luna De Xelaju
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:52
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Amapola
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:20
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Over The Rainbow
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                              4:34
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Never On Sunday
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                               2:48
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Recuerdos De La Alhambra
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:44
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La Paloma
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:07
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Oh Danny Boy
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:03
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Cancao Do Mar
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:17
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Lara's Theme
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:05
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Mexican Medley
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:54
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Summertime
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:39
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Third Man Theme
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:25
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Manha De Carnaval
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:41
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Piscatore 'E Pusilleco
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:59
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	

                       <div class="music_row">
                            <div class="column_one">
                                15
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Edelweiss
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:10
                            </div>
                            <div class="column_seven">
				<a href="#" class="album5_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album5_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->            
            </div>
          </div>
        </div>
      </div>
      
      	<!--=======================trackpopup - Mandolin for Lovers=============================-->
    <div class="modal fade" id="mandolin-for-lovers" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
               
            	<div class="music_popup container">
                
                    <div class="music_widget">
                        <h2>Mandolin for Lovers</h2>
                        <h6>15 tracks</h6>
                        <img src="images/mandolin-for-lovers.jpg" alt="" /><a class="btn buy" href="http://www.cdbaby.com/cd/fabriziowainzinger" target="_blank">Buy CD</a>
                        <div class="music_row_header">
                            <div class="column_one">
                                #
                            </div>
                            <div class="column_two">
                                &nbsp;<!--no header for picture column-->
                            </div>
                            <div class="column_three">
                                track name
                            </div>
                            <div class="column_four">
                                genre
                            </div>
                            <div class="column_five">
			  &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_six">
                                length
                            </div>
                            <div class="column_seven">
                                &nbsp;<!--no header for play column-->
                            </div>
                            <div class="column_eight">
                                &nbsp;<!--no header for btn column-->
                            </div>
                        </div>
                        
                        <div class="music_row">
                            <div class="column_one">
                                1
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Barcarolle
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:57
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                2
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 On an Evening in Roma
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                2:27
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                3
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                La Llorona 
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                              4:08
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                4
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Crazy
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                               3:35
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                5
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Sway 
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:51
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                6
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Three Coins in the Fountain
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:31
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                7
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Love Me Tender
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:51
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                8
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Ti Regalo Gli Occhi Miei 
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:37
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                9
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                 Sabor a Mi 
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:31
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
                        
                        <div class="music_row">
                            <div class="column_one">
                                10
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                  Quando M'innamoro
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:39
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                11
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Hi-Lilli Hi-Lo
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:26
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                12
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Unchained Melody
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:24
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->
			
                       <div class="music_row">
                            <div class="column_one">
                                13
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Sunrise, Sunset
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                5:07
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->

                       <div class="music_row">
                            <div class="column_one">
                                14
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Softly as in a Morning Sunrise
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                3:04
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	

                       <div class="music_row">
                            <div class="column_one">
                                15
                            </div>
                            <div class="column_two">
                                
                            </div>
                            <div class="column_three">
                                Volver, Volver
                            </div>
                            <div class="column_four">
                                Classics
                            </div>
                            <div class="column_five">
                            </div>
                            <div class="column_six">
                                4:08
                            </div>
                            <div class="column_seven">
				<a href="#" class="album6_play"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_continue" style="display: none;"><span class="fa fa-play"></span>&nbsp; &nbsp; Play Sample</a>
				<a href="#" class="album6_pause" style="display: none;"><span class="fa fa-pause"></span>&nbsp; &nbsp; Pause</a> 
                            </div>
                            <div class="column_eight">
                            </div>
                        </div><!--music row-->	
			
                        <div class="clearfix"></div>
                    </div><!--music_widget-->
            	</div>
            <!--//music popup-->            
            </div>
          </div>
        </div>
      </div>

      <!--============Gallery=================-->
      <div class="modal fade" id="gal_pop" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close destroy_owl" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <div class="modal-body">
            
                  <div class="gallery_popup container">
                    <h2>Heartstrings Media Pack</h2>
		<div><a class="btn" href="files/press-kit.zip"><span class="fa fa-download"></span> Press / Media Kit Download</a></div>
                    <div class="galery_widget" style="margin-top: 50px;">
                        <ul class="gal_list">
			<li class="trigger_slider"><img src="images/photo-01.png" alt="" /></li>
			<li class="trigger_slider"><img src="images/photo-02.png" alt="" /></li>
			<li class="trigger_slider"><img src="images/photo-03.png" alt="" /></li>
                        </ul>
                    </div>
                </div><!--gallery-popup-->
              </div>
          </div>
        </div>
      </div> 

      <!--======================================
    Footer
    ==========================================-->
	<footer id="footer" class="parallax parallax_six footer" data-stellar-background-ratio="0.5">
		<div class="row">
			<div class="col-sm-4  col-md-4 copyrights hidden-xs">
				HeartStrings Music, LLC.<br>
				2273 Old Middlefield Way<br>
				Mountain View, CA 94043<br>
			</div>
			<div class="col-sm-4 col-md-4 copyrights">
				<div>&copy; 2017 HeartStrings Music LLC.</div>
				<div>Website by <a href="http://woorus.com" target="_blank">Woorus</a></div>
			</div>
			<div class="col-sm-4 col-md-4 copyrights">
				(650) 625-1222<br>
				Fax: (650) 625-1322<br>
				info@heartstringsmusic.com
			</div>
		</div>
	</footer>
    </div>
</div>
<!--===================================================================
Scripts
====================================================================--> 
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
<script type="text/javascript" src="js/jpreloader.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing-1.3.pack.js"></script> 
<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script type="text/javascript" src="js/tweetie.min.js"></script> 
<script type="text/javascript" src="js/jquery.sticky.js"></script> 
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script> 
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script> 
<script type="text/javascript" src="js/jquery.vegas.min.js"></script> 
<script type="text/javascript" src="js/css3-animate-it.js"></script> 
<script type="text/javascript" src="js/jquery.fractionslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.mCustomScrollbar.min.js"></script> 
<script type="text/javascript" src="js/jquery.waitforimages.js"></script>
<script type="text/javascript" src="js/video.js"></script>
<script type="text/javascript" src="js/bigvideo.js"></script>
<script type="text/javascript" src="js/main.js"></script>  
<script type="text/javascript" src="js/contact-form.js"></script>
<script>

$('body').jpreLoader({
		splashID: "#jSplash",
		splashVPos: '30%',
		loaderVPos: '70%',
		autoClose: true,
		showSplash: true,
		showPercentage: false
});
/*====================================================================
Put Your Google Tracker Code here
===================================================================*/
</script>
<script>
	var color;
	function changeLayout(x){
		$('.colorlayout a').removeClass('active');
		
		if(x=="boxed_in")
		{
			$(".box-wide").removeClass('wide_layout').addClass('boxed_in');
			$('.box-btn').addClass('active');
		}else{
			$(".box-wide").addClass('wide_layout').removeClass('boxed_in');
			$('.wide-btn').addClass('active');
		}
		return false;
	}
	function changeNav(iswhite){
		if(!iswhite){
			$("header").addClass('dark');
		}
		else{
			$("header").removeClass('dark');
		}
		return false;
	}
	function playerStick(x){
		if(!x){
			$('.sticky_player').addClass('nosticky');
			$(".sticky_player").attr('data-sticky','false');
			$(".sticky_player").unstick();
			$("#sticktop").addClass('noPlayer');
			$("#sticktop").unstick();
			$("#sticktop").sticky({
				topSpacing:0
			});
			if(!$(".rock_player").hasClass('pre_sticky'))
			$(".rock_player").addClass("pre_sticky");
			
		}else{
			$(".sticky_player").attr('data-sticky','true');
			$('.sticky_player').removeClass('nosticky');
			$("#sticktop").removeClass('noPlayer');
			$(".sticky_player").sticky({topSpacing: 0});
			$("#sticktop").unstick();
			$("#sticktop").sticky({
				topSpacing:$(".sticky_player").height()
			});
			if(!$(".rock_player").hasClass('pre_sticky'))
			$(".rock_player").addClass("pre_sticky");
		}
	}
	function naviStick(x){
		if(x){
			$("#sticktop").removeClass('nav-stop');
		}else{
			$("#sticktop").addClass('nav-stop');
		}
	}
</script>
</body>
</html>
