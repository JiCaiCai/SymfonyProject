<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
  <?php include_title()?>
  <?php include_http_metas()?>
  <?php include_metas()?>
  <?php include_stylesheets()?>
</head>
<body>
	<div class="container">
		<header>
			<h1>
				Online Study System <span> Created by Roy</span>
			</h1>
<!-- 			<nav class="codrops-demos"> -->
<!-- 				<span>Click <strong>"Join us"</strong> to see the form switch -->
<!-- 				</span> <a href="demo.html" class="current-demo">Demo 1</a> <a -->
<!-- 					href="demo2.html">Demo 2</a> <a href="demo3.html">Demo 3</a> -->
<!-- 			</nav> -->
		</header>
		<section>
			<div id="container_demo">
				<!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
				<a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor"
					id="tologin"></a>
				<div id="wrapper">
					<div id="login" class="animate form">
						<form action="homeGuest/Login" autocomplete="on" method="post">
							<h1>Log in</h1>
							<p>
								<label for="username" class="uname" data-icon="u"> Your email or
									username </label> <input id="username" name="username"
									required="required" type="text"
									placeholder="mymail@mail.com" />
							</p>
							<p>
								<label for="password" class="youpasswd" data-icon="p"> Your
									password </label> <input id="password" name="password"
									required="required" type="password" placeholder="eg. X8df!90EO" />
							</p>
							<p class="keeplogin">
								<input type="checkbox" name="loginkeeping" id="loginkeeping"
									value="loginkeeping" /> <label for="loginkeeping">Keep me
									logged in</label>
							</p>
							<p class="login button">
								<input type="submit" value="Login" />
							</p>
							<p class="change_link">
								Not a member yet ? <a href="#toregister" class="to_register">Join
									us</a>
							</p>
						</form>
					</div>

					<div id="register" class="animate form">
						<form action="homeGuest/Register" autocomplete="on" method="post">
							<h1>Sign up</h1>
							<p>
								<label for="usernamesignup" class="uname" data-icon="u">Your
									username</label> <input id="usernamesignup"
									name="usernamesignup" required="required" type="text"
									placeholder="mysuperusername690" />
							</p>
							<p>
								<label for="emailsignup" class="youmail" data-icon="e"> Your
									email</label> <input id="emailsignup" name="emailsignup"
									required="required" type="email"
									placeholder="mysupermail@mail.com" />
							</p>
							<p>
								<label for="passwordsignup" class="youpasswd" data-icon="p">Your
									password </label> <input id="passwordsignup"
									name="passwordsignup" required="required" type="password"
									placeholder="eg. X8df!90EO" />
							</p>
							<p>
								<label for="passwordsignup_confirm" class="youpasswd"
									data-icon="p">Please confirm your password </label> <input
									id="passwordsignup_confirm" name="passwordsignup_confirm"
									required="required" type="password" placeholder="eg. X8df!90EO" />
							</p>
							<p class="signin button">
								<input type="submit" value="Sign up" />
							</p>
							<p class="change_link">
								Already a member ? <a href="#tologin" class="to_register"> Go
									and log in </a>
							</p>
						</form>
					</div>

				</div>
			</div>
		</section>
	</div>
</body>
</html>