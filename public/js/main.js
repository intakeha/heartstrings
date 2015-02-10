jQuery(function($){
    "use strict";
	
	
	/*============
	1-Hero Header
	2-Navigation
	3-Video Banner
	4-Gallery
	5-Fraction Slider
	6-Parallax
	7-Carousel fredsel
	8-Owl Slider
	9-Vegas Slider
	10-Tweet
	11-JPlayer
	==============*/
	
	
	
	var isStickyPlayer=$(".sticky_player").attr('data-sticky'),
		isStickyNav=$("#sticktop").attr('data-sticky'),
		naviheight=$("#sticktop").height(),
		playerHeight=$(".sticky_player").height(),
		navTopSpace=0,NavOffset=0;
		var $winHeight=$(window).height(),
		$winWidth=$(window).width();
	/*=======================================
	1-Hero Header
	=======================================*/
		
	$(window).on('resize', function(){
		$winHeight=$(window).height();
		$winWidth=$(window).width();
		
		$('.hero_section').css('height',$winHeight+'px');
		var $hero_height=$('.hero_section').height(), 
			$hero_content_height=$('.hero_content').height();
		
		if($hero_height<$hero_content_height ){$('.hero_section').css('height',$hero_content_height+70+'px');}
		$('.hero_section').css('padding-top',($hero_height/2)-($hero_content_height/2)+'px');
		
	}).resize();
		
	$(".list_scroll").mCustomScrollbar({advanced: {updateOnContentResize: true},});
		
	/*=======================================
	2-Navigation
	=======================================*/
	
	if(isStickyNav!="false"){NavOffset=naviheight + 10;}
	if(isStickyPlayer!="false"){NavOffset=playerHeight+10;}
	if(isStickyNav!="false" && isStickyPlayer!="false"){NavOffset=naviheight+playerHeight+10;}	
	$('body').attr('data-offset',NavOffset+10);
	
    $(".navbar-nav a[href^='#'],.ScrollTo,.btn-scroll").click(function (e) {
		e.preventDefault();
        $('html, body').stop().animate({scrollTop: $($.attr(this, 'href')).offset().top - NavOffset}, 1000,"swing");
    });
	
	
	if($winWidth>700){
	  if($(".sticky_player").attr('data-sticky')!="false"){navTopSpace=playerHeight;}
	  if(isStickyNav!="false"){
		  $("#sticktop").sticky({topSpacing:navTopSpace});}  
	  if($(".sticky_player").attr('data-sticky')!="false"){
		  $(".sticky_player").sticky({topSpacing: 0});
	  }
	  $('#sticktop').on('sticky-start', function() {
		  if($(".sticky_player").attr('data-sticky')!="false")
		  $('.rock_player').removeClass('pre_sticky');
	  });
	  $('#sticktop').on('sticky-end', function() {
		  if($(".sticky_player").attr('data-sticky')!="false")
		  $('.rock_player').addClass('pre_sticky');
	  });  
	}
	
	/*=======================================
	3-Video Banner
	=======================================*/
	if($('.video-banner').length!=0){
		var BV = new $.BigVideo({useFlashForFirefox:false});
   		BV.init();
		BV.getPlayer().poster('assets/video/video-poster.jpg');
		BV.show('assets/video/demo.mp4',{doLoop:true});
		
		$('.video-load').show();
		BV.getPlayer().on('seeking',function(){
			$('.video-load').hide();
			$('.video-pause').show();
			$('.video-play').hide();
			console.log("seeking");
		});
		
		BV.getPlayer().on('play',function(){
			$('.video-load').hide();
			$('.video-pause').show();
			$('.video-play').hide();
		});
		BV.getPlayer().on('ended',function(){
			$('.video-load').hide();
			$('.video-play').show();
			$('.video-pause').hide();
		});
		BV.getPlayer().on('loadstart',function(){
			$('.video-load').show();
			$('.video-pause').hide();
			$('.video-play').hide();
		}); 
		BV.getPlayer().on('loadeddata',function(){
			$('.video-load').hide();
			$('.video-pause').show();
			$('.video-play').hide();
			console.log("data loaded for curent time");
		});
		$('.video-pause').click(function(){
			BV.getPlayer().pause();
			$('.video-load').hide();
			$('.video-pause').hide();
			$('.video-play').show();
		});
		$('.video-play').click(function(){
			BV.getPlayer().play();
			$('.video-play').hide();
			$('.video-pause').show();
		});
	}
	
	/*=======================================
	4-Gallery
	=======================================*/
	
	$('.galery_widget .trigger_slider').click(function(e){
		e.preventDefault();
		var $this=$(this);
		$('.gal_list li').each(function() {
			$(this).removeClass('trigger_slider').addClass('gallery-item');
        });
		$('.gal_list').addClass('owl-carousel owl-gallery');
		 $(".owl-gallery").owlCarousel({
			slideSpeed : 1000,
			pagination : false,
			singleItem:true,
			navigation : true,
		 });
		 $('.social_share').slideDown();
	});
	
	$('.destroy_owl').on('click', function (e) {
		if($(".owl-gallery").length){
			$(".owl-gallery").data('owlCarousel').destroy();
			$('.gal_list li').each(function() {
				$(this).addClass('trigger_slider').removeClass('gallery-item');
			});
			$('.gal_list').removeClass('owl-carousel owl-gallery');
		}
	});
	
	/*=======================================
	5-Fraction Slider
	=======================================*/
	
	$('.fractionSlide').fractionSlider({
        dimensions: '1970,1000',
        responsive: true,
        backgroundAnimation: true,
        slideTransitionSpeed: 200,
        pager: true,
        startCallback: function () {
            $('.fractionSlide .slide').show();
        }
    });
	
	
	/*=======================================
	6-Parallax
	=======================================*/
	
	  $.stellar({
		horizontalScrolling: false,
		verticalOffset: 0,
		responsive:true,
	  });

	/*=======================================
	7-Carousel fredsel
	=======================================*/

	/*==========================================
	8-Owl Slider
	=======================================*/
	$(".testimonial_quotes").owlCarousel({
		slideSpeed : 1000,
		paginationSpeed : 500,
		singleItem:true,
	  	navigation : false,
		transitionStyle:"backSlide",
		autoPlay: 8000,
		afterAction:function(){$(window).trigger("resize");},
	 });
	 
	 /*============================
	9-Vegas Slider
	============================*/
	
	if($('.vegas-slides').length){
		var vegas_BG_imgs = [],
		$vegas_img = $('.vegas-slides li img'),
		vegas_slide_length= $('.vegas-slides li').length;
		
		for (var i=0; i < vegas_slide_length; i++) {
			var new_vegas_img = {};
			new_vegas_img['src'] = $vegas_img.eq(i).attr('src');
			new_vegas_img['fade'] =$vegas_img.eq(i).attr('data-fade');
			vegas_BG_imgs.push(new_vegas_img);
		}
		
		var slideSpeed= $('.vegas-slides').data("speed");
		$.vegas('slideshow', {
			delay:slideSpeed,
			backgrounds:vegas_BG_imgs,
		});
		$('.vegas-controls a').click(function(e){
			e.preventDefault();
			var $parent=$(this).parent('li');
			if(!$parent.hasClass('active')){
				$('.vegas-controls li').removeClass('active');
				$parent.addClass('active');
				$.vegas('jump', $parent.index());
			}
		});
		$('body').bind('vegaswalk',
		function(e, bg, step) {
			$('.vegas-controls li').removeClass('active');
			$('.vegas-controls li').eq(step).addClass('active');
		});
	}
	
	if($winWidth<760){
		$.vegas('pause');
	}
	
	reanimate();
    function reanimate() {
        $('.ScrollTo > i').animate({top:0}, 1000).animate({top: 20},1000,function(){setTimeout(reanimate, 100);});
    }
	
	/*========================================
	10-Tweet
	===========================================*/

	/*==========================================
	11-JPlayer
	=======================================*/
	
	
	$('.playlist_expander').click(function(e){
		e.preventDefault();
		$('.play_list').slideToggle();
	});
	 $("#player-instance").jPlayer({
        cssSelectorAncestor: "", // Remove the ancestor css selector clause
	});
	if($('.playlist-files').length){
		var playlist_items = [],
		$playlist_audio=$('.playlist-files li'),
		$list_content=$('.player_data li'),
		playlist_items_length= $playlist_audio.length;
		
		for (var i=0; i < playlist_items_length; i++) {
			var  new_playlist_item = {};
			new_playlist_item['title'] = $playlist_audio.eq(i).attr('data-title');
			new_playlist_item['artist'] = $playlist_audio.eq(i).attr('data-artist');
			new_playlist_item['mp3'] = $playlist_audio.eq(i).attr('data-mp3');
			playlist_items.push(new_playlist_item);
			
			$list_content.eq(i+1).children('.track_index').html(i+1);
			$list_content.eq(i+1).children('.track_thumb').html('<img src='+$playlist_audio.eq(i).attr('data-thumb')+' alt="track Thumb" />');
			$list_content.eq(i+1).children('.track_title').html($playlist_audio.eq(i).attr('data-title'));
			$list_content.eq(i+1).children('.track_genre').html($playlist_audio.eq(i).attr('data-genre'));
			$list_content.eq(i+1).children('.track_composer').html($playlist_audio.eq(i).attr('data-artist'));
			$list_content.eq(i+1).children('.track_length').html($playlist_audio.eq(i).attr('data-length'));
			$list_content.eq(i+1).find('.btn_watch_video').attr('href',$playlist_audio.eq(i).attr('data-video'));
			$list_content.eq(i+1).find('.itunesLink').attr('href',$playlist_audio.eq(i).attr('data-itunes'));
		}
		
		var werock = new jPlayerPlaylist({
			jPlayer: "#player-instance",
			cssSelectorAncestor: "",
		},playlist_items ,
			{playlistOptions: {autoPlay: false}},
		{
			swfPath: "assets/jPlayer/Jplayer.swf",
			supplied: "mp3",
		});
		$('.play_it').click(function(e){
			e.preventDefault();
			werock.play($(this).parents('li').index()-1);
			$('.play_it').show();
			$(this).toggle();
			$('.pause_it, .continue_it').hide();
			$(this).parent().find(".pause_it").toggle();
		});
		$('.pause_it').click(function(e){
			e.preventDefault();
			werock.pause();
			$(this).hide();
			$(this).parent().find(".continue_it").toggle();
		});
		$('.continue_it').click(function(e){
			e.preventDefault();
			werock.play();
			$(this).hide();
			$(this).parent().find(".pause_it").toggle();
		});
		$('.audio-title').html(werock.playlist[0].title);
		$("#player-instance").bind($.jPlayer.event.play, function (event) {
			var current = werock.current,
				playlist = werock.playlist;
			jQuery.each(playlist, function (index, obj) {
				if (index == current) {
					$('.audio-title').html(obj.title);
				}
			});
		});
		$("#player-instance").jPlayer("volume", '0.8');
		$('.jp-volume li a').click(function(e){
			e.preventDefault();
			$('.jp-volume li').removeClass('active');
			 $("#player-instance").jPlayer("volume", ($(this).parent().index()+1)/10*2);
			for(var i=0;i<=$(this).parent().index();i++){
				$('.jp-volume li').eq(i).addClass('active');
			}
		});
	}


	// Play List for Serenata Italiana Samples
	$("#jpID").jPlayer({
		cssSelectorAncestor: "#jpContainer", // Remove the ancestor css selector clause
	});	
	var serenataItaliana_playlist = [];
	for (var i=0; i < 15; i++) {
		var  new_serenataItaliana_playlist = {};
		var  serenataItaliana_path = "mp3/samples/serenata-italiana/";
		new_serenataItaliana_playlist['mp3'] = serenataItaliana_path.concat(i+1,".mp3");
		serenataItaliana_playlist.push(new_serenataItaliana_playlist);
	}
	
	var serenataItaliana = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},serenataItaliana_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});
	
	
	$('.album1_play').click(function(e){
		e.preventDefault();
		serenataItaliana.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album1_play').show();
		$(this).toggle();		
		$('.album1_pause, .album1_continue').hide();
		$(this).parent().find(".album1_pause").toggle();
	});
	$('.album1_pause').click(function(e){
		e.preventDefault();
		serenataItaliana.pause();
		$(this).hide();
		$(this).parent().find(".album1_continue").toggle();
	});
	$('.album1_continue').click(function(e){
		e.preventDefault();
		serenataItaliana.play();
		$(this).hide();
		$(this).parent().find(".album1_pause").toggle();
	});
	
	// Play List for Italian Heartstrings Samples
	
	var italianHeartstrings_playlist = [];
	for (var i=0; i < 14; i++) {
		var  new_italianHeartstrings_playlist = {};
		var  italianHeartstrings_path = "mp3/samples/italian-heartstrings/";
		new_italianHeartstrings_playlist['mp3'] = italianHeartstrings_path.concat(i+1,".mp3");
		italianHeartstrings_playlist.push(new_italianHeartstrings_playlist);
	}
	
	var italianHeartstrings = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},italianHeartstrings_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});

	$('.album2_play').click(function(e){
		e.preventDefault();
		italianHeartstrings.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album2_play').show();
		$(this).toggle();		
		$('.album2_pause, .album2_continue').hide();
		$(this).parent().find(".album2_pause").toggle();
	});
	$('.album2_pause').click(function(e){
		e.preventDefault();
		italianHeartstrings.pause();
		$(this).hide();
		$(this).parent().find(".album2_continue").toggle();
	});
	$('.album2_continue').click(function(e){
		e.preventDefault();
		italianHeartstrings.play();
		$(this).hide();
		$(this).parent().find(".album2_pause").toggle();
	});	
	
	
	// Play List for Bella Serenata Samples
	
	var bellaSerenata_playlist = [];
	for (var i=0; i < 15; i++) {
		var  new_bellaSerenata_playlist = {};
		var  bellaSerenata_path = "mp3/samples/bella-serenata/";
		new_bellaSerenata_playlist['mp3'] = bellaSerenata_path.concat(i+1,".mp3");
		bellaSerenata_playlist.push(new_bellaSerenata_playlist);
	}
	
	var bellaSerenata = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},bellaSerenata_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});

	$('.album3_play').click(function(e){
		e.preventDefault();
		bellaSerenata.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album3_play').show();
		$(this).toggle();		
		$('.album3_pause, .album3_continue').hide();
		$(this).parent().find(".album3_pause").toggle();
	});
	$('.album3_pause').click(function(e){
		e.preventDefault();
		bellaSerenata.pause();
		$(this).hide();
		$(this).parent().find(".album3_continue").toggle();
	});
	$('.album3_continue').click(function(e){
		e.preventDefault();
		bellaSerenata.play();
		$(this).hide();
		$(this).parent().find(".album3_pause").toggle();
	});

	// Play List for Serenata D'Amore Samples
	
	var serenataAmore_playlist = [];
	for (var i=0; i < 15; i++) {
		var  new_serenataAmore_playlist = {};
		var  serenataAmore_path = "mp3/samples/serenata-amore/";
		new_serenataAmore_playlist['mp3'] = serenataAmore_path.concat(i+1,".mp3");
		serenataAmore_playlist.push(new_serenataAmore_playlist);
	}
	
	var serenataAmore = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},serenataAmore_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});

	$('.album4_play').click(function(e){
		e.preventDefault();
		serenataAmore.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album4_play').show();
		$(this).toggle();		
		$('.album4_pause, .album4_continue').hide();
		$(this).parent().find(".album4_pause").toggle();
	});
	$('.album4_pause').click(function(e){
		e.preventDefault();
		serenataAmore.pause();
		$(this).hide();
		$(this).parent().find(".album4_continue").toggle();
	});
	$('.album4_continue').click(function(e){
		e.preventDefault();
		serenataAmore.play();
		$(this).hide();
		$(this).parent().find(".album4_pause").toggle();
	});

	// Play List for World Heartstrings Samples
	
	var worldHeartstrings_playlist = [];
	for (var i=0; i < 15; i++) {
		var  new_worldHeartstrings_playlist = {};
		var  worldHeartstrings_path = "mp3/samples/world-heartstrings/";
		new_worldHeartstrings_playlist['mp3'] = worldHeartstrings_path.concat(i+1,".mp3");
		worldHeartstrings_playlist.push(new_worldHeartstrings_playlist);
	}

	var worldHeartstrings = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},worldHeartstrings_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});

	$('.album5_play').click(function(e){
		e.preventDefault();
		worldHeartstrings.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album5_play').show();
		$(this).toggle();		
		$('.album5_pause, .album5_continue').hide();
		$(this).parent().find(".album5_pause").toggle();
	});
	$('.album5_pause').click(function(e){
		e.preventDefault();
		worldHeartstrings.pause();
		$(this).hide();
		$(this).parent().find(".album5_continue").toggle();
	});
	$('.album5_continue').click(function(e){
		e.preventDefault();
		worldHeartstrings.play();
		$(this).hide();
		$(this).parent().find(".album5_pause").toggle();
	});

	// Play List for Mandolin for Lovers Samples
	
	var mandolinLovers_playlist = [];
	for (var i=0; i < 15; i++) {
		var  new_mandolinLovers_playlist = {};
		var  mandolinLovers_path = "mp3/samples/mandolin-for-lovers/";
		new_mandolinLovers_playlist['mp3'] = mandolinLovers_path.concat(i+1,".mp3");
		mandolinLovers_playlist.push(new_mandolinLovers_playlist);
	}

	var mandolinLovers = new jPlayerPlaylist({
		jPlayer: "#jpID",
		cssSelectorAncestor: "#jpContainer",
	},mandolinLovers_playlist ,
		{playlistOptions: {autoPlay: false}},
	{
		swfPath: "assets/jPlayer/Jplayer.swf",
		supplied: "mp3"
	});

	$('.album6_play').click(function(e){
		e.preventDefault();
		mandolinLovers.play($(this).parents(".music_row").find(".column_one").text() - 1);
		$('.album6_play').show();
		$(this).toggle();		
		$('.album6_pause, .album6_continue').hide();
		$(this).parent().find(".album6_pause").toggle();
	});
	$('.album6_pause').click(function(e){
		e.preventDefault();
		mandolinLovers.pause();
		$(this).hide();
		$(this).parent().find(".album6_continue").toggle();
	});
	$('.album6_continue').click(function(e){
		e.preventDefault();
		mandolinLovers.play();
		$(this).hide();
		$(this).parent().find(".album6_pause").toggle();
	});	
	
	$('.modal-content .close').click(function(e){
		$("#jpID").jPlayer("stop");
		werock.select(0);
		$('.play_it, .album1_play, .album2_play, .album3_play, .album4_play, .album4_play, .album5_play, .album6_play').show();
		$('.pause_it, .continue_it, .album1_pause, .album1_continue, .album2_pause, .album2_continue, .album3_pause, .album3_continue, .album4_pause, .album4_continue, .album5_pause, .album5_continue, .album6_pause, .album6_continue').hide();
	});
	
});

