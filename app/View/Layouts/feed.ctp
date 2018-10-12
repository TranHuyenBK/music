<!DOCTYPE html>
<html>
<head>
<!-- Compiled and minified CSS -->

	<?php echo $this->Html->charset(); ?>
	<title>Music</title>
	<link href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- 	<link rel="stylesheet" href="/resources/demos/style.css"> -->
	<script
  src="http://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://unpkg.com/ionicons@4.4.4/dist/ionicons.js"></script>
	<?php
		//echo $this->Html->script('feed');
		//echo $this->Html->script('all');	
		//echo $this->Html->css('all');
		echo $this->Html->script('feed');
		echo $this->Html->css('style');
		echo $this->Html->css('profile');
		echo $this->Html->css('image_detail');
		echo $this->Html->css('edit_profile');
		echo $this->Html->meta('icon');
		//echo $this->Html->script('jquery');
		echo $this->Html->script('app');
		echo $this->fetch('meta');
		echo $this->Html->css('toast_jquery');
		echo $this->Html->script('toast_jquery');
		echo $this->fetch('script');
		echo $this->Html->css('item_tag');
	?>

</head>
<body>		
			<?php echo $this->Flash->render(); ?>
			<nav class="navigation">
			<div class="trang"></div>
		<div class="navigation__column">
			<a id="way-back-home">
				<img id ='img-logo-picceo'
				alt="feed_logo"
				title="feed_logo"
				/>
			</a>
		</div>
	<!-- search -->
		<div class="navigation__column">
			<i class="fa fa-search"></i>
			<input type="hidden" name="search_param" value="name" id="search_param">
			<input id="searchText" type="text" class="form-control" name="q" placeholder="Search" id="search_key" value="" style="width: 400px; height: 50px;">	

			<div class="div-nav-search">
				<div id="autocompleteTest" style="border-radius: 5px;">

				</div>
			</div>
		</div>
	<!-- the right three columns -->

		<div class="navigation__column" >
			
				<a class="navigation__link 1">
					<i class="fa fa-upload"></i>
				</a>
				<!-- <div class="notifications"> -->
    			<i class="fa fa-heart-o" id="icon-notificetions" onclick="show_nitifications()"><span id="noti" ></span></i>

    			<div id="div-notificetions" class="div-notificetions">
				<!-- <div class="row row-notifications">
						<div class="col-2 div-avartar-notifi">
							<img
								class="avatar-profile-tt"
								alt="avatar__image"
							/>
						</div>

						<div class="col-10 div-tttt">
							<div class="row">
								<div class="col-9">Your Facebook friend Phương Thảoo Nguyễn is on Instagram as jerry.tihon5w
								</div>
								<div class="col-3 div-bottom-fl">
									<button type="button" class="btn btn-primary">Fllow</button>
								</div>
							</div>
						</div>
					</div> -->

    			</div>

				<a id="way-go-profile" id_session="<?php echo $this->Session->read('id_user');?>" class="	navigation__link">
					<i class="fa fa-user-o"></i>
				</a>
		</div>
	</nav>
			<div class="uploadfile">
		<input type="file" class="file-img-uploader" data-preview="#preview" style="display:none" name="image">
		<img id="preview">
		<textarea id="description" placeholder="What's on your mind?"></textarea>
		<button class="btn btn-info">POST</button>
		</div>
		<div class="den"></div>
			<?php echo $this->fetch('content'); ?>

		<!-- footer: under sidebar-->

			
</body>
</html>
