<?php
include('functions.php');

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

.header {
	width: 40%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}
.login, .content {
	width: 40%;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
.input-group {
	margin: 10px 0px 10px 0px;
}
.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 93%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
#user_type {
	height: 40px;
	width: 98%;
	padding: 5px 10px;
	background: white;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
}
.error {
	width: 92%;
	margin: 0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color: #a94442;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
}
.success {
	color: #3c763d;
	background: #dff0d8;
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}
.profile_info img {
	display: inline-block;
	width: 50px;
	height: 50px;
	margin: 5px;
	float: left;
}
.profile_info div {
	display: inline-block;
	margin: 5px;
}
.profile_info:after {
	content: "";
	display: block;
	clear: both;
}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-green w3-mobile"><i class="w3-margin-right"></i>Home</a>
  <a href="#products" class="w3-bar-item w3-button w3-mobile">Products</a>
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
  <a href="index.php?logout='1'" style="color: red;" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">logout</a>
</div>
<!-- Header -->

		<div class="header w3-green">
		<h2>Confirm Order</h2>
	</div>

	<form method="post" action="insert.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Product Name</label>
			<input type="text" name="productName" value="oneweek" disabled>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="input-group">
			<label>Address Line 1</label>
			<input type="text" name="address1">
		</div>
		<div class="input-group">
			<label>Address Line 2</label>
			<input type="text" name="address2">
		</div>

		<div class="input-group">
			<label>Address Line 3</label>
			<input type="text" name="address3">
		</div>

		<div class="input-group">
			<label>County</label>
			<input type="text" name="county" value="Cork" disabled>
		</div>

		<div class="input-group">
			<label>County</label>
			<input type="number" name="price" value="14" disabled>
		</div>

		<div class="input-group">
			<button type="submit" class="btn w3-green" name="order_btn"> Place Order</button>
		</div>
	</form>


<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Find Us On</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="home.php" target="_blank" class="w3-hover-text-green">UCC DDDB</a></p>
</footer>

</body>
</html>
