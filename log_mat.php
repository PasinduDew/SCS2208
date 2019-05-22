<!DOCTYPE html>
<html lang="en">
<head>
	<title>VOrchid Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

<div class="heading">
	<h2><b>VOrchid</b></h2>
</div>
<!--Login start-->		
<div id="user-login" class="row">
	<div id="login-box" class="col s12  z-depth-6 card-panel">
		
		<form class="login-form" action="login_action.php" method="POST">
			<h4>Sign in</h4>
			<div class="row margin">
				<div class="input-field col s12 ">
					<!--email-->
					<i id="icon" class="mdi-social-person-outline prefix"></i>
					<input class="validate" id="user_email" type="email" placeholder="Email" name="email" required>
				</div>
			</div>

			<div class="row margin">
				<div class="input-field col s12 ">
					<!--password-->
					<i  id="icon" class="mdi-action-lock-outline prefix"></i>
					<input id="user_pass" type="password" placeholder="Password" name="password" required>
				</div>
			</div>

			<div class="row">          
				<div class="input-field col s12 m12 l12  login-text">
					<input type="checkbox" id="remember-me" />
					<label for="remember-me">Remember me</label>
				</div>
			</div>

			<div class="row">
				<div id="login-btn"   class="input-field col s12">
					<button type="submit" class="btn waves-effect waves-light col s12" name="login"><b>Login</b></button>
				</div>
			</div>
			
	<!--directs to the Register page-->
			<div class="row  ">
				<div class="input-field col s6 m6 l6 ">
					<p><a class="register" href="###">Register Now!</a></p>
				</div>               
			</div> 
		</form>
	</div>
</div>
<!--Login ends-->
</body>
</html>