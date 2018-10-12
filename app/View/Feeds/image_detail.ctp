
<main id="image_detail" style="margin-top:80px;">
	<div class="container">

		<div id="image-detail" class="image-detail row">
			<div class="col-sm-8" id="image_detail_show">
				<img src="../../app/webroot/img/upload/<?php echo $feed[0]['Feed']['image'];?>"  sizes="(min-width: 1024px) 1024px, 100vw">
			</div>

			<div class="col-sm-4" id="image_detail_bin">
				<div class="row" style="height: 60px; width: 100%;">
					<div class="col-4">
						<a href="../../profiles/profile/<?php echo $feed[0]['userr']['id']?>">
							<div class="image__file-container">
							<img id="image_detail-img"
								src="../../app/webroot/img/avatarUsers/<?php echo $feed[0]['userr']['profilePic']?>"
								class="image__file"
							/>
							</div>
						</a>
						<a href="../../profiles/profile/<?php echo $feed[0]['userr']['id']?>">
							<div class="col-8" id="image_detail_username"><?php echo $feed[0]['userr']['username']?></div>
						</a>
					</div>
				</div>

				<div class="row" id="div-cmdepi" style="border-bottom: 1px solid #BABBBE; border-top:  1px solid #BABBBE;height: 240px; width: 100%; margin-left:-3% ;padding-right: 0px;">
					<div style="overflow: auto;width: 100% ;padding-right: -6px; height: auto; background-color: #FFFFFF; margin: -1% 0 0 -5%;">
					
						<span class="photo__comment--author"><?php echo $feed[0]['userr']['username']?></span><?php echo $feed[0]['Feed']['description'] ?>
						
						<ul class="list-group">
							<?php
								for($i=0;$i<count($comments);$i++){?>
									<li>
										<span class="photo__comment--author"><?php echo $comments[$i]['userrr']['username'].'  ';?></span><?php echo $comments[$i]['Comment']['content'] ?>
									</li>
								<?php }
							?>
						</ul>
					</div>
				</div>

				<div class="row" style="height: 140px;">
					<div class="photo__actions row" style=" width: 100%;" >
						<ion-icon id='<?php echo $feed[0]['Feed']['id']?>' class="likeBtn <?php
							if($isLike){
								echo 'liked';
							}
						?>" name="heart"></ion-icon>
						<i class="fa fa-comment-o fa-2x"></i>
						<a style="margin-left: 55%;" ><i style="" class="fa fa-bookmark fa-2x" id="<?php echo $feed[0]['Feed']['id'];?>"></i>
</a>
					</div>
					<div class="row" id="div-comment-detail">
						<span id="countLike" class="<?php echo $countLiked; ?>"><?php echo $countLiked; ?></span> <span>Likes</span> <span class="photo__date"><?php echo $feed[0]['Feed']['create_at'];?></span>
					</div>

					<div class="photoadd-comment-container">
						<textarea placeholder="Add a comment..." class="photoadd-comment" rows="1" id="<?php echo $feed[0]['Feed']['id'];?>"></textarea>
						<i class="fa fa-ellipsis-h" id="<?php echo $feed[0]['Feed']['id'];?>"></i>
					</div>
				</div>
			</div>

		</div>

	</div>
</main>
<div class="popUp">
		<i class="fa fa-times fa-2x" id="closePopUp"></i>
		<div class="popUp__container">
			<div class="popUp__buttons">
				<p class="popUp__button report" onclick="report()" >Report</p>
			</div>
		</div>
	</div>	
<footer>
	<nav class="footer__nav">
		<ul class="footer__list">
			<li class="footer__item"><a href="#" class="footer_link">about us</a></li>
			<li class="footer__item"><a href="#" class="footer_link">support</a></li>
			<li class="footer__item"><a href="#" class="footer_link">blog</a></li>
			<li class="footer__item"><a href="#" class="footer_link">press</a></li>
			<li class="footer__item"><a href="#" class="footer_link">api</a></li>
			<li class="footer__item"><a href="#" class="footer_link">jobs</a></li>
			<li class="footer__item"><a href="#" class="footer_link">privacy</a></li>
			<li class="footer__item"><a href="#" class="footer_link">terms</a></li>
			<li class="footer__item"><a href="#" class="footer_link">directory</a></li>
			<li class="footer__item"><a href="#" class="footer_link">langage</a></li>
		</ul>
	</nav>
	<span class="footer__copyright">© 2018 Instagram</span>
</footer>