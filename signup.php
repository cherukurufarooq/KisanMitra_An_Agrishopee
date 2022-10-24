<?php
require 'databaseconnect.php';
if (isset($_POST['submit'])) {
  if (isset($_POST['firstName']) && isset($_POST['lastName']) &&
      isset($_POST['email']) && isset($_POST['password']) &&
      isset($_POST['conPassword'])) {
  $firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$conPassword = $_POST['conPassword'];
	$query="insert into `data` (`firstName`,`lastName`,`email`,`password`,`conPassword`) values('$firstName','$lastName','$email','$password','$conPassword')";
	$qr=mysqli_query($mysqlc,$query);

}
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login- KisanMitra</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<link rel="stylesheet" href="css/style1.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.jpg" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
					</li>
					<li class="menu">
						<a href="login.html">login</a>
						<ul id="selected" class="secondary">
							<li>
								<a href="signup.html">signup</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>login</h1>
				</div>
			</div>
			<div class="login-box">
          <form action="login.php" method="post">
          <label><h2>Email</h2></label>
          <input type="email" name="email" placeholder=""  required /><br>
          <label><h2>Password</h2></label>
          <input type="password" name="password" placeholder=""  required /><br><br>
          <input type="submit" value="Submit" />
          </form>
          </div>
          <p class="para-2">
           Not have an account? <a href="signup.html">Sign Up Here</a>
          </p>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://www.facebook.com" class="facebook">facebook</a>
					<a href="http://www.twitter.com" class="twitter">twitter</a>
					<a href="http://www.googleplus.com" class="googleplus">googleplus</a>
					<a href="http://www.pinterest.com" class="pinterest">pinterest</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
  


