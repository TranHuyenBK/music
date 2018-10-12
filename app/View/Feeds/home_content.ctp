
<article class="photo__container">
	<header class="photo__header">
		<img
		class="photo__avatar"
		src=<?php echo $this->webroot.'img/2.jpg'?> 
		alt="avatar__image"
		/>
		<div class="photo__info">
			<span class="photo__author">Jihyo</span>
			<span class="photo__location">Jeju-do</span>
		</div>
	</header>

	<img
		src = <?php echo $this->webroot.'img/2.jpg'?>
		alt="main__feedphoto"
		title="main__feedphoto"
		class="photo__image"
	/>

	<div class="photo__main">
		<div class="photo__actions">
			<ion-icon name="heart"></ion-icon>
			<i class="fa fa-comment-o fa-2x"></i>
		</div>

		<span class="photo__likes"><span class="photo__likes-number">2989</span> Likes</span>
		
		<div class="comment more" style=""> <span>username</span>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet, nunc <b>eget laoreet sagittis, quam ligula sodales orci, congue imperdiet eros tortor ac lectus. Duis eget nisl orci. Aliquam mattis purus non mauris blandit id luctus felis conv</b>allis. Integer varius egestas vestibulum. Nullam a dolor arcu, ac tempor elit. Donec.
		</div>
					
		<ul class="list-group ul-comment-feed" style="">
			<li class="photo__comment">
				<span class="photo__comment--author">Serranoarevalo</span> omg this is great
			</li>

			<li class="photo__comment">
				<span class="photo__comment--author">Jihyo_twice</span> TT
			</li>
		</ul>

		<span class="photo__date">13 hours ago</span>

		<div class="photo__addcomment-container">
			<textarea class="photo__addcomment-area" name="comment" placeholder="Add a comment..."></textarea>
			<i class="fa fa-ellipsis-h"></i>
		</div>
</article>
