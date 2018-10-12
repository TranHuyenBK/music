<?php $profilePic = $this->Session->read('profilePic'); ?>
<?php $username = $this->Session->read('username'); ?>
<?php $firstName = $this->Session->read('firstName'); ?>
<?php $lastName = $this->Session->read('lastName'); ?>

<!-- main: edit_Profile -->
<div class="container" style="margin-top:80px;">
	<main class="edit-profile">
		<section class="profile-form">
			<div class="row div-edit-profile">
				<div class="col-md-3 selection_profile">
					<ul class="nav nav-pills nav-stacked " style="">
						<li class="active"><a href="#tab_a" data-toggle="pill">Edit Profile</a></li>
						<li><a href="#tab_b" data-toggle="pill">Change Password</a></li>
					</ul>
				</div>
				<div class="tab-content col-md-9">
					<div class="tab-pane active" id="tab_a">
						<header class="profile-form__header">
							<div class="profile-form__avatar-container">
								<img 
									id="avatar-pic" 
									src="../app/webroot/img/avatarUsers/<?php echo $this->Session->read('profilePic'); ?>"
									class="profile-form__avatar"
								/>
							</div>

							<div class="custom-file-upload">
								<label for="file-upload" class="custom-file-upload">
    								<i class="fa fa-cloud-upload"></i> Change Avatar Profile
								</label>
								<input id="file-upload" type="file"/>
							</div>
						</header>

						<div class="edit-profile__form-row">
							<label for="name" class="edit-profile__label">First Name</label>
							<input 
								id="first_name"
								type="text"
								value="<?php echo $firstName;?>"
								class="edit-profile__input"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="name" class="edit-profile__label">Last Name</label>
							<input 
								id="last_name"
								type="text"
								value="<?php echo $lastName;?>"
								class="edit-profile__input"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="username" class="edit-profile__label">Address</label>
							<input 
								type="text"
								id="adress"
								class="edit-profile__input"
								value="<?php echo $this->Session->read('address')?>"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="bio" class="edit-profile__label">Bio</label>
							<textarea id="intro" class="edit-profile__textarea"><?php echo $this->Session->read('intro'); ?></textarea>
						</div>

						<div class="edit-profile__form-row">
							<label for="phone-number" class="edit-profile__label">Phone Number</label>
							<input
								value="<?php echo $this->Session->read('phone_number'); ?>"
								type="text"
								class="edit-profile__input"
								id="phone-number"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="gender" class="edit-profile__label">Gender</label>
							<select id="gender">
								<option value="1">Male</option>
								<option value="0">Female</option>
								<option value="">Whatever</option>
							</select>
						</div>

						<div class="edit-profile__form-row">
							<label class="edit-profile__label"></label>
							<input type="submit" onclick="send_edit_profile();" id="update_profile" value="Save">
						</div>
					</div>

					<div class="tab-pane" id="tab_b">
						<div class="edit-profile__form-row">
							<label for="name" class="edit-profile__label">Old Password</label>
							<input
								id="old_password"
								type="password"
								class="edit-profile__input"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="name" class="edit-profile__label">New Password</label>
							<input
								id="new_password"
								type="password"
								class="edit-profile__input"
							/>
						</div>

						<div class="edit-profile__form-row">
							<label for="username" class="edit-profile__label">Comfirm Pass</label>
							<input 
								id="comfirm_new_pass"
								type="password"
								class="edit-profile__input" 
							/>
						</div>

						<div class="edit-profile__form-row">
							<label class="edit-profile__label"></label>
							<input type="submit" id="change_pass" onclick="send_change_pass()" value="Change">
						</div>
					</div>
				</div><!-- tab content -->			
			</div>
		</section>
	</main>
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
</div>