<div id="background">
	<div id="loginContainer">
		<div id="inputContainer">
			<form id="loginForm" onsubmit="return false">
				<img src="../app/webroot/img/logoLogin.png" id="logoLogin">
				<p>
					<label for="loginUsername">Email</label>
					<input type="email" id="loginEmail" required>
				</p>
				<p>
					<label for="loginPassword">Password</label>
					<input type="password" id="loginPassword" required>
				</p>
				<button type="submit" id="loginBtn">Login</button>
				<div class="hasAccount">
					<span id="hideLogin">Don't have an account yet? Sign up here</span>
				</div>
			</form>
	 		
			<form id="registerForm" onsubmit="return false">
				<h1>Create your account</h1>
				<p>
					<label for="registerUsername">Username</label>
					<input type="text" id="registerUsername" required>
				</p>
				<p>
					<label for="firstName">First name</label>
					<input type="text" id="firstName" required>
				</p>
				<p>
					<label for="lastName">Last name</label>
					<input type="text" id="lastName" required>
				</p>
				<p>
					<label for="email">Email</label>
					<input type="email" id="email" required>
				</p>
				<p>
					<label for="email2">Confirm email</label>
					<input type="email" id="email2" required>
				</p>
				<p>
					<label for="registerPassword">Password</label>
					<input type="password" id="registerPassword" required>
				</p>
				<p>
					<label for="registerPassword2">Confirm password</label>
					<input type="password" id="registerPassword2" required>
				</p>
				<button type="submit" id="registerBtn">Register</button>
				<div class="hasAccount">
					<span id="hideRegister">Already have an account? Log in here</span>
				</div>
			</form>
		</div>
		<div id="loginText">
			<h1>Get great pictures, right now</h1>
			<h2>Capture and share the world's moments</h2>
			<ul>
				<li><i class="fas fa-check"></i>Discover images you'll fall in love with</li>
				<li><i class="fas fa-check"></i>Create your own album</li>
				<li><i class="fas fa-check"></i>Follow friends to keep up to date</li>
			</ul>
		</div>
	</div>
</div>