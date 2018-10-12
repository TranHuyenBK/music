<!-- main: photo feed display -->
<main id="feed" class="container">
	<div class="row">
		<div id="load_data"></div>
   		<div id="load_data_message"></div>

		<div class="" id="div_feed_right" style="">

			<div id="div_chil_right">
				<div class="row div-avatar-right" style="">
					<div class="col-3" style="">
						<a href="">
							<img
								src= <?php echo $this->webroot.'img/2.jpg'?>
								alt="avatar__image"
								class="img-avatar-feed-right"
							/>
						</a>
					</div>

					<div class="col-9 div-is-name">
						<div class="row is-username"><a class="vllll" href="">Johnny English</a></div>
						<div class="row is-name ">Huyen Tran</div>
					</div>
				</div>
				<div class="row div-text-online">
					Online
					
				</div>

				<div class="row user-follow" id="user-follow">
					<div>

						<div class="row div-avatar-user-follow">
							<div class="col-3" style="">
								<a href="">
									<img
										src= <?php echo $this->webroot.'img/2.jpg'?> 
										alt="avatar__image"
										class="img-avatar-user-follow"
									/>
								</a>
							</div>
							<div class="col-9 div-name-follow">
								<div><a href="" class="vllll">Johnny English</a></div>
							</div>
						</div>


					</div>
				</div>

			</div>

		</div>
	</div>
</main>
	<div class="popUp">
		<i class="fa fa-times fa-2x"></i>
		<div class="popUpContainer">
			<a href="#" class="popUpLink">Report inappropriate</a>
			<a href="#" class="popUpLink">Embed</a>
			<a href="http://google.com" class="popUpLink closePopUpBtn">Cancel</a>
		</div>
	</div>

	<!-- <script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	  crossorigin="anonymous"></script>
	<script src="js/app.js"></script> -->

