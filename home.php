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

</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-large">
  <a href="home.php" class="w3-bar-item w3-button w3-green w3-mobile"><i class=" w3-margin-right"></i>Home</a>
  <a href="#products" class="w3-bar-item w3-button w3-mobile">Products</a>
  <a href="#about" class="w3-bar-item w3-button w3-mobile">About</a>
  <a href="#contact" class="w3-bar-item w3-button w3-mobile">Contact</a>
  <a href="index.php?logout='1'" style="color: red;" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">logout</a>
</div>
<!-- Header -->

<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
				    Hi, <?php echo $_SESSION['username']; ?><br>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>



<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="products">
    <h3>Products</h3>
    <p>Dairy products that are 100% Green</p>
  </div>



  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">

      <div class="w3-container w3-white">
        <h3>One Day</h3>
        <h6 class="w3-opacity">$2</h6>
        <p>Daily</p>
        <p>1 ltr.<sup></sup></p>
        <p class="w3-large"><i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <form action="oneday.php">
            <input type="submit" class="w3-button w3-block w3-black w3-margin-bottom" value="Buy Now" />
        </form>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">

      <div class="w3-container w3-white">
        <h3>7 Days</h3>
        <h6 class="w3-opacity">From $14</h6>
        <p>Weekly</p>
        <p>1 ltr.<sup>per day</sup></p>
        <p class="w3-large"><i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <form action="oneweek.php">
            <input type="submit" class="w3-button w3-block w3-black w3-margin-bottom" value="Buy Now" />
        </form>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">

      <div class="w3-container w3-white">
        <h3>28 Days</h3>
        <h6 class="w3-opacity">From $56</h6>
        <p>Monthly</p>
        <p>1 ltr.<sup>per day</sup></p>
        <p class="w3-large"><i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <form action="onemonth.php">
            <input type="submit" class="w3-button w3-block w3-black w3-margin-bottom" value="Buy Now" />
        </form>
      </div>
    </div>
  </div>

  <div class="w3-row-padding" id="about">
    <div class="w3-col l4 12">
      <h3>About</h3>
      <p>Our process is really clean and we like to keep it that way. Enjoy the best of products at assured quality and affordable price.<br>We also serve large distribution. Use your Corporate Login to check our services.</p>
    <p>We accept: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    <hr
    <h4><strong>Why are we better?</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fas fa-seedling"></i> Fresh From Farm</p>
        <p><i class="fas fa-fire"></i> High quality</p>
        <p><i class="fas fa-euro-sign"></i> Afforable Prices</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fas fa-truck"></i> Feasible Delivery</p>
        <p><i class="fas fa-map-marked-alt"></i> Online Tracking</p>
        <p><i class="far fa-handshake"></i> Hassle-free Payment</p>
      </div>
    </div>
    <hr>
    </div>
    <div class="w3-col l8 12">
      <!-- Image of location/map -->
      <img src="dairyman/images/freshMilk.jpg" class="w3-image w3-greyscale" style="width:100%;">
    </div>
  </div>

  <div class="w3-row-padding w3-large w3-center" style="margin:32px 0">
    <div class="w3-third"><i class="fa fa-map-marker w3-text-red"></i> Cork, Ireland</div>
    <div class="w3-third"><i class="fa fa-phone w3-text-red"></i> Phone: +(089) 966 2489</div>
    <div class="w3-third"><i class="fa fa-envelope w3-text-red"></i> Email: seller@deireeman.com</div>
  </div>

  <div class="w3-panel w3-green w3-leftbar w3-padding-32">
    <h6><i class="fa fa-info w3-white w3-padding w3-margin-right"></i> On demand, we can offer other dairy products such as butter, cheese and yogurt</h6>
  </div>


  <div class="w3-container" id="contact">
    <h2>Contact</h2>
    <p>If you have any questions, do not hesitate to ask them.</p>
    <i class="fa fa-map-marker w3-text-red" style="width:30px"></i> Cork, Ireland<br>
    <i class="fa fa-phone w3-text-red" style="width:30px"></i> Phone: +(089) 966 2489<br>
    <i class="fa fa-envelope w3-text-red" style="width:30px"> </i> Email: seller@deireeman.com<br>

  </div>

<!-- End page content -->
</div>
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
  <p>Powered by <a href="https://ucc.ie/en" target="_blank" class="w3-hover-text-green">UCC DDDB</a></p>
</footer>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-c97cab42-dab0-4b42-908b-1c90c69097a2"></div>

</body>
</html>
