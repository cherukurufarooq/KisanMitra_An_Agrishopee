<?php //Start the Session
session_start();
 require('databaseconnect.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['email']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$email = $_POST['email'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `data` WHERE email='$email' and password='$password'";
$result = mysqli_query($mysqlc, $query) or die(mysqli_error($mysqlc));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['email'] = $email;
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
 echo'
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KisanMitra</title>
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
						<a href="localglobal.html">Home</a>
					</li>
					<li class="menu">
						<a href="about1.html">About</a>
						<ul class="primary">
							<li class="">
								<a href="contact1.html">contact</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="login.html">logout</a>
					</li>
				</ul>
			</div>
		</div>
		<div><br><br>
		<h1><a href="add.html" name="add">Add products</a></h1><br><br><br>
	
		<h1><a href="localglobal.html" name="add">Buy products</a></h1></div><br><br><br>
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
</body>';
}
}
else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
echo '<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KisanMitra</title>
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
		<div>
		<h1>Invalid credentials</h1><br><br><br>
		<h1>login again</h1><br><br><br>
	
		<h1><a href="login.html" name="login">login</a></h1></div></div>
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
</body>';
}
}

?>
