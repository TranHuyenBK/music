<!-- gallery -->
	<div class="latest-albums">
		<div class="container">
			<h3 class="agileits_w3layouts_head">Our Latest <span>Gallery</span></h3>
			<p class="w3_agileits_para">Quisque faucibus vel leo a luctus.</p>
			<div class="wthree_latest_albums_grids gallery">
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="images/15.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/8.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/9.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/2.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="images/13.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/3.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 agile_gallery_grid">
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/10.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid">
						<a href="images/9.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_gallery_grid w3_agileits_gallery_grid">
						<a href="images/14.jpg">
							<img src="<?php echo $this->webroot.'web/images/11.jpg'; ?>" alt=" " class="img-responsive" />
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3>Symphony</h3>
									<p>Quisque faucibus vel luctus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //gallery -->	
<!-- gallery-pop-up -->
	<?php echo $this->Html->script('/web/js/simple-lightbox.js');  ?>
	
	<script>
		$(function(){
			var $gallery = $('.gallery a').simpleLightbox();

			$gallery.on('show.simplelightbox', function(){
				console.log('Requested for showing');
			})
			.on('shown.simplelightbox', function(){
				console.log('Shown');
			})
			.on('close.simplelightbox', function(){
				console.log('Requested for closing');
			})
			.on('closed.simplelightbox', function(){
				console.log('Closed');
			})
			.on('change.simplelightbox', function(){
				console.log('Requested for change');
			})
			.on('next.simplelightbox', function(){
				console.log('Requested for next');
			})
			.on('prev.simplelightbox', function(){
				console.log('Requested for prev');
			})
			.on('nextImageLoaded.simplelightbox', function(){
				console.log('Next image loaded');
			})
			.on('prevImageLoaded.simplelightbox', function(){
				console.log('Prev image loaded');
			})
			.on('changed.simplelightbox', function(){
				console.log('Image changed');
			})
			.on('nextDone.simplelightbox', function(){
				console.log('Image changed to next');
			})
			.on('prevDone.simplelightbox', function(){
				console.log('Image changed to prev');
			})
			.on('error.simplelightbox', function(e){
				console.log('No image found, go to the next/prev');
				console.log(e);
			});
		});
	</script>
<?php 
	echo $this->Html->script('/web/js/move-top.js');
	echo $this->Html->script('/web/js/easing.js');
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>