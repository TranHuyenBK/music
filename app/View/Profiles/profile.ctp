<!-- <nav class="navigation">
	<div class="navigation__column" style="padding-left: 100px;">
		<a href="feed.html">
			<img
			src="../app/webroot/img/feed_logo.png"
			alt="feed_logo"
			title="feed_logo"
			/>
		</a>
	</div>



	<div class="navigation__column" style="text-align: center;">
		<i class="fa fa-search"></i>
		<input type="text" placeholder="Search">
	</div>


	<div class="navigation__column" style="padding-right: 100px;">
		<a class="navigation__link">
			<i class="fa fa-upload"></i>
		</a>

		<a href="#" class="navigation__link">
			<i class="fa fa-heart-o"></i>
		</a>

		<a href="profile.html" class="navigation__link">
			<i class="fa fa-user-o"></i>
		</a>

	</div>
</nav> -->
<!-- main: Profile -->

<div class="container" style="margin-top: 80px">
	<div class="row head-profile">
		<div class="col-sm-3" style="text-align: center; border-style: solid dotted groove double;">
		<img
			class="avatar-profile"
			src="../../app/webroot/img/avatarUsers/<?php echo $avatar; ?>" 
			alt="avatar__image"
		/>
		</div>
		<div class="col-sm-8 content-profile" style="">
			<div class="row profile__name" style="margin-bottom: 10px;">
				<h1 class="profile__title" id="<?php echo $id_user; ?>" ><?php echo $userName; ?></h1>
				<?php
					if(!$isMe){ ?>
						<button type="button" class="follow btn btn-danger <?php if(!$isFollow){ echo 'chedi';} ?>">UnFollow</button>
						<button type="button" class="follow btn btn-primary <?php if($isFollow){ echo 'chedi';} ?>">Follow</button>
					
					<?php }if($isMe){?>
						<i class="fa fa-cog fa-2x" id="cog" ></i>
						<a href="../edit_profile" class="profile__button u-fat-text">Edit profile</a>
					<?php }
				?>
				
			</div>

			<div class="row" style="">
				<ul class="profile__numbers">
					<li class="profile__posts">
						<span class="profile__number u-fat-text"><?php 
						echo $countFeed;?>						
						</span> posts
					</li>
					<li class="profile__followers">
						<span class="profile__number u-fat-text"><?php echo $countFollower;?></span> followers
					</li>
					<li class="profile__following">
						<span class="profile__number u-fat-text"><?php echo $countFollowing;?></span> following
					</li>
				</ul>
			</div>
			<div class="row" style="line-height: 25px; font-size: 21px;">
				<?php echo '<strong>'.$fullName.'</strong>'; ?>
				<br>
			</div>
			<div  class="row" style="line-height: 25px; font-size: 18px;"><?php echo $bio;?></div>
		</div>
	</div>
	<div class="row picture-profile">
		<div class="col-md-12">
			<div class="tabbable-panel">

				<div class="tabbable-line">
					<div style="margin-left: 32%; margin-right: 30%;">
						<ul class="nav nav-tabs ">
							<li class="active">
								<a href="#tab_default_1" data-toggle="tab">
								POSTS</a>
							</li>
							<?php if($isMe) { ?>
								<li>
								<a href="#tab_default_2" data-toggle="tab">
								SAVED </a>
							</li>
							<?php } ?>
							<li>
								<a href="#tab_default_3" data-toggle="tab">
								TAGGED </a>
							</li>
						</ul>
					</div>

					<div class="tab-content">
						<div class="tab-pane tab-picture active" id="tab_default_1" style="margin-top: -1px">
							
							<div class="profile__pictures">
								<?php
									for($i=$countFeed-1;$i>=0;$i--) { ?>
										<a href="../../feeds/image_detail/<?php echo $feeds[$i]['Feed']['id']?>" class="profile-picture">
									<img
										src="../../app/webroot/img/upload/<?php echo $feeds[$i]['Feed']['image']?>"
										class="profile-picture__picture"
									/>
									<div class="profile-picture__overlay">
										<span class="profile-picture__number">
											<i class="fa fa-heart"></i><?php echo count($feeds[$i]['likee']);?>
										</span>
										<span class="profile-picture__number">
											<i class="fa fa-comment"></i><?php if(isset($feeds[$i][0])){echo $feeds[$i][0];}else{echo '0';}?>
										</span>
									</div>
								</a>
									<?php }
								?>
								
							</div>

				
						</div>
						<?php if($isMe){?> 
						<div class="tab-pane" id="tab_default_2">							
							<div class="profile__pictures">
								<?php for ($i=count($pinFeeds)-1; $i >=0 ; $i--){ ?>
									<a href="../../feeds/image_detail/<?php echo $pinFeeds[$i]['feedd']['id']?>"  class="profile-picture">
										<img
											src="../../app/webroot/img/upload/<?php echo $pinFeeds[$i]['feedd']['image']?>"
											class="profile-picture__picture"
										/>
										<div class="profile-picture__overlay">
											<span class="profile-picture__number">
												<i class="fa fa-heart"></i> <?php echo count($pinFeeds[$i]['feedd']['likee']);?>
											</span>
											<span class="profile-picture__number">
												<i class="fa fa-comment"></i><?php if(isset($pinFeeds[$i][0])){
													echo $pinFeeds[$i][0];
													}else{echo '0';}?>
											</span>
										</div>
									</a>
								<?php } ?>
							</div>	

						</div>
						<?php }?>
						<div class="tab-pane" id="tab_default_3">
							<?php if(isset($tagedFeeds)){?>
								<div class="profile__pictures">
									<?php for($i=0;$i<count($tagedFeeds);$i++){ ?>
										<a href="../../feeds/image_detail/<?php echo $tagedFeeds[$i]['Hashtag']['id_feed']?>" class="profile-picture">
											<img
												src="../../app/webroot/img/upload/<?php echo $tagedFeeds[$i]['tagfeed']['image']?>"
												class="profile-picture__picture"
											/>
											<div class="profile-picture__overlay">
												<span class="profile-picture__number">
													<i class="fa fa-heart"></i> <?php echo count($tagedFeeds[$i]['tagfeed']['likee']);?>
												</span>
												<span class="profile-picture__number">
													<i class="fa fa-comment"></i> <?php if(isset($tagedFeeds[$i][0])){
														echo $tagedFeeds[$i][0];}else{echo '0';}
														?>
												</span>
											</div>
										</a>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="popUp">
	<i class="fa fa-times fa-2x" id="closePopUp"></i>
	<div class="popUp__container">
		<div class="popUp__buttons">
			<a href="../../profiles/logout" class="popUp__button" id="logoutPop">Log Out</a>
			<a href="#" class="popUp__button" id="cancelPopUp">Cancel</a>
		</div>
	</div>
</div>