
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Mosaic a Entertainment Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mosaic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<?php 
	echo $this->Html->css('/web/css/bootstrap.min.css');
	echo $this->Html->css('/web/css/style.css');
	echo $this->Html->css('/web/css/font-awesome.css');
	echo $this->Html->css('/web/css/icon-font.css');
	echo $this->Html->script('/web/js/jquery-2.1.4.js');
?>




</head> 
    	 <!-- /w3layouts-agile -->
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.html">Mosai<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.html">M </a>
			</div>
 	 <!-- /w3l-agile -->
			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="index.html"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						<li><a href="radio.html"><i class="camera"></i> <span>Radio</span></a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-th"></i><span>Apps</span></a></li>
						<li><a href="radio.html"><i class="lnr lnr-users"></i> <span>Artists</span></a></li> 
						<li><a href="browse.html"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>						
						<li class="menu-list"><a href="browse.html"><i class="lnr lnr-indent-increase"></i> <span>Browser</span></a>  
							<ul class="sub-menu-list">
								<li><a href="browse.html">Artists</a> </li>
								<li><a href="404.html">Services</a> </li>
							</ul>
						</li>
						<li><a href="blog.html"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
						<li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a> 
							<ul class="sub-menu-list">
								<li><a href="radio.html">All Songs</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.html">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		 	 <!-- /w3layouts-agile -->
 	 
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form action="#" method="post">

										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src=<?php echo $this->webroot.'/web/media/Georgia.ogg'; ?> type="audio/mpeg"></source>
																<source src=<?php echo $this->webroot.'/web/media/Georgia.ogg'; ?> type="audio/ogg"></source>
																<source src=<?php echo $this->webroot.'/web/media/Georgia.ogg'; ?> type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
												<?php 
													echo $this->Html->css('/web/css/audio.css');
													echo $this->Html->script('/web/js/mediaelement-and-player.min.js');
												?>
											
													<!---->


												<!--//-->
												<ul class="next-top">

													<li><a class="ar" href="#"> <img src="<?php echo $this->webroot.'web/images/arrow.png'; ?>" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="<?php echo $this->webroot.'web/images/arrow2.png'; ?>" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											
										
								</div>
							
						</div>
					<div class="clearfix"></div>
				</div>
			<!--notification menu end -->
			<!-- //header-ends -->
 	 <!-- /w3l-agileits -->
		<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="inner-content">
				
				      <div class="music-left">
					      <!--banner-section-->
							<div class="banner-section">
								<div class="banner">
									 <div class="callbacks_container">
										<ul class="rslides callbacks callbacks1" id="slider4">
											   	<li>
														<div class="banner-img">
															
															
															 <img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
														              <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												</li>
												<li>
													<div class="banner-img">
															 <img src="<?php echo $this->webroot.'web/images/22.jpg'; ?>" class="img-responsive" alt="">
														 </div>
														<div class="banner-info">
																	  <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Charis Brown feet</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>


												</li>
												<li>
												 <div class="banner-img">
															 <img src="<?php echo $this->webroot.'web/images/33.jpg'; ?>" class="img-responsive" alt="">
														 </div>
														<div class="banner-info"> 
														             <a class="trend" href="single.html">TRENDING</a>
																	  <h3>Let Your Home</h3>
																	  <p>Album by <span>Rock star</span></p>
														 </div>

												 	 <!-- /w3layouts-agileits -->
												</li>
											</ul>
										</div>
										<!--banner-->
										<?php echo $this->Html->script('/web/js/responsiveslides.min.js'); ?>
									
								 <script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								  </script>
								<div class="clearfix"> </div>
							</div>
						</div>	
				<!--//End-banner-->
					<!--albums-->
					<!-- pop-up-box --> 
					<?php 
						echo $this->Html->css('/web/css/popuo-box.css');
						echo $this->Html->script('/web/js/jquery.magnific-popup.js');
					?>
							 <script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
									});
							</script>		
					<!--//pop-up-box -->
						<div class="albums">
								<div class="tittle-head">
									<h3 class="tittle">New Releases <span class="new">New</span></h3>
									<a href="index.html"><h4 class="tittle">See all</h4></a>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-3 content-grid">

								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>
	
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>
		
								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>

								<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
							</div>
							<div class="col-md-3 content-grid last-grid">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>"lnr lnr-music-note title="allbum-name"></a>
												<a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
											</div>
											<div class="clearfix"> </div>
										</div>
					<!--//End-albums-->
						<!--//discover-view-->
						
						<div class="albums second">
										<div class="tittle-head">
											<h3 class="tittle">Discover <span class="new">View</span></h3>
											<a href="index.html"><h4 class="tittle two">See all</h4></a>
											<div class="clearfix"> </div>
										</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>
												

											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/22.jpg'; ?>" title="allbum-name"></a>
													

												</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/33.jpg'; ?>" title="allbum-name"></a>
													

												</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/44.jpg'; ?>" title="allbum-name"></a>
													
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/55.jpg'; ?>" title="allbum-name"></a>
													
											</div>
											<div class="col-md-3 content-grid">
												<a href="single.html"><img src="<?php echo $this->webroot.'web/images/66.jpg'; ?>" title="allbum-name"></a>
												
											</div>
											<div class="col-md-3 content-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" title="allbum-name"></a>
													
											</div>
											<div class="col-md-3 content-grid last-grid">
													<a href="single.html"><img src="<?php echo $this->webroot.'web/images/22.jpg'; ?>" title="allbum-name"></a>
													
											</div>
											<div class="clearfix"> </div>
									</div>
								<!--//discover-view-->
							</div>
							<!--//music-left-->
						    <!--/music-right-->
						   <div class="music-right">
								<!--/video-main-->
								 <div class="video-main">
									<div class="video-record-list">
										<div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
											<div class="jp-type-playlist">
												<div id="jquery_jplayer_1" class="jp-jplayer" style="width: 480px; height: 270px;"><img id="jp_poster_0" src="video/play1.png" style="width: 480px; height: 270px; display: inline;"><video id="jp_video_0" preload="metadata" src="http://192.168.30.9/vijayaa/2015/Dec/mosaic/web/video/Ellie-Goulding.webm" title="1. Ellie-Goulding" style="width: 0px; height: 0px;"></video></div>
												<div class="jp-gui">
													<div class="jp-video-play" style="display: block;">
														<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
													</div>
													<div class="jp-interface">
														<div class="jp-progress">
															<div class="jp-seek-bar" style="width: 100%;">
																<div class="jp-play-bar" style="width: 0%;"></div>
															</div>
														</div>
														<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
														<div class="jp-duration" role="timer" aria-label="duration">00:18</div>
														<div class="jp-controls-holder">
															<div class="jp-controls">
																<button class="jp-previous" role="button" tabindex="0">previous</button>
																<button class="jp-play" role="button" tabindex="0">play</button>
															</div>
															<div class="jp-volume-controls">
																<button class="jp-mute" role="button" tabindex="0">mute</button>
																<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
																<div class="jp-volume-bar">
																	<div class="jp-volume-bar-value" style="width: 100%;"></div>
																</div>
															</div>
															<div class="jp-toggles">
															
																<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
															</div>
														</div>
														<div class="jp-details" style="display: none;">
															<div class="jp-title" aria-label="title">1. Ellie-Goulding</div>
														</div>
													</div>
												</div>
												<div class="jp-playlist">
													<ul style="display: block;"><li class="jp-playlist-current"><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item jp-playlist-current" tabindex="0">1. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">2. Mark-Ronson-Uptown <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">3. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">4. Maroon-Sugar <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">5. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">6. Ellie-Goulding <span class="jp-artist">by Pixar</span></a></div></li><li><div><a href="javascript:;" class="jp-playlist-item-remove" style="display: none;">×</a><a href="javascript:;" class="jp-playlist-item" tabindex="0">7. Pharrell-Williams <span class="jp-artist">by Pixar</span></a></div></li></ul>
												</div>
												<div class="jp-no-solution" style="display: none;">
													<span>Update Required</span>
													To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- script for play-list -->
				<?php 
					echo $this->Html->css('/web/css/jplayer.blue.monday.min.css');
					echo $this->Html->script('/web/js/jquery.jplayer.min.js');
					echo $this->Html->script('/web/js/jplayer.playlist.min.js')


				?>
				 <script type="text/javascript">
				//<![CDATA[
				$(document).ready(function(){

					new jPlayerPlaylist({
						jPlayer: "#jquery_jplayer_1",
						cssSelectorAncestor: "#jp_container_1"
					}, [
						
						{
							title:"1. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"2. Mark-Ronson-Uptown",
							artist:"",
							mp4: "video/Mark-Ronson-Uptown.mp4",
							ogv: "video/Mark-Ronson-Uptown.ogv",
							webmv: "video/Mark-Ronson-Uptown.webm",
							poster:"video/play2.png"
						},
						{
							title:"3. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"4. Maroon-Sugar",
							artist:"",
							mp4: "video/Maroon-Sugar.mp4",
							ogv: "video/Maroon-Sugar.ogv",
							webmv: "video/Maroon-Sugar.webm",
							poster:"video/play4.png"
						},
						{
							title:"5. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						},
						{
							title:"6. Ellie-Goulding",
							artist:"",
							mp4: "video/Ellie-Goulding.mp4",
							ogv: "video/Ellie-Goulding.ogv",
							webmv: "video/Ellie-Goulding.webm",
							poster:"video/play1.png"
						},
						{
							title:"7. Pharrell-Williams",
							artist:"",
							mp4: "video/Pharrell-Williams.mp4",
							ogv: "video/Pharrell-Williams.ogv",
							webmv: "video/Pharrell-Williams.webm",
							poster:"video/play5.png"
						}
					], {
						swfPath: "../../dist/jplayer",
						supplied: "webmv,ogv,mp4",
						useStateClassSkin: true,
						autoBlur: false,
						smoothPlayBar: true,
						keyEnabled: true
					});

				});
				//]]>
					</script>
			<!-- //script for play-list -->

								<!--//video-main-->
								
						         <!--/start-paricing-tables-->
									
			 	 <!-- /w3l-agile-its -->
										</div>
						<!--body wrapper start-->
						
				
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
 	 <!-- /w3l-agile -->
					</div>
			  <!--body wrapper end-->
			     <div class="footer">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="index.html">Home</a></li>
					  <li><a href="radio.html">All Songs</a></li>
					  <li><a href="browse.html">Albums</a></li>
					  <li><a href="radio.html">New Collections</a></li>
					  <li><a href="blog.html">Blog</a></li>
					  <li><a href="contact.html">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.html">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.html">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					  <div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">Nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat</p>
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat enim ad minim veniam,.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp;00-250-2131</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:mail@example.com">info(at)mailing.com</a></span></p>	
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
        <!--footer section start-->
			<footer>
			   <p>&copy 2016 Mosaic. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
 	 <!-- /w3l-agile -->
      <!-- main content end-->
   </section>
  <?php echo $this->Html->script('/web/s/jquery.nicescroll.js');
	  echo $this->Html->script('/web/js/scripts.js');
	  echo $this->Html->script('/web/js/bootstrap.js');
  ?>

</body>
</html>