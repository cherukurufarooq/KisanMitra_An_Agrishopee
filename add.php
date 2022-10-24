<?php
require 'databaseconnect.php';
if (isset($_POST['submit'])) {
  if (isset($_POST['fullname']) && isset($_POST['phone']) &&
      isset($_POST['address']) && isset($_POST['postal']) && 
      isset($_POST['email']) && isset($_POST['productname']) && isset($_POST['proqua'])
      && isset($_POST['price'])) {
    $fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$postal= $_POST['postal'];
	$email = $_POST['email'];
    $productname = $_POST['productname'];
    $proqua = $_POST['proqua'];
    $price =$_POST['price'];
	$query="insert into `addprods` (`fullname`,`phone`,`address`,`postal`,`email`,`productname`,`proqua`,`price`) values('$fullname','$phone','$address','$postal','$email','$productname','$proqua','$price')";
	$qr=mysqli_query($mysqlc,$query);
}
}
?>
<!doctype html>
<html>
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
						<a href="addbuy.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
						<ul class="primary">
							<li class="">
								<a href="contact.html">contact</a>
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
	
		<h1><a href="buy.html" name="add">Buy products</a></h1>
        <br><br><br><br><br><br></div>
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