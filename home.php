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
<link rel="stylesheet" href="../style.css">
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
  <a href="insert.php" class="w3-bar-item w3-button w3-white w3-mobile"><i class="w3-margin-right"></i>Report Status</a>
  <a href="../index.php?logout='1'" style="color: red;" class="w3-bar-item w3-button w3-right w3-light-grey w3-mobile">logout</a>
</div>
<!-- Header -->
<div>
<?php
$username = "u984442499_multi_login";
$password = "Jeremiah";
$database = "u984442499_multi_login";
$mysqli = new mysqli("localhost", $username, $password, $database);
$query = "SELECT * FROM product";


echo '<table border="0" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">productName</font> </td>
          <td> <font face="Arial">email</font> </td>
          <td> <font face="Arial">Address 1</font> </td>
          <td> <font face="Arial">Address 2</font> </td>
          <td> <font face="Arial">Address 3</font> </td>
          <td> <font face="Arial">County</font> </td>
          <td> <font face="Arial">Price</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["productName"];
        $field2name = $row["email"];
        $field3name = $row["address1"];
        $field4name = $row["address2"];
        $field5name = $row["address3"];
        $field6name = $row["county"];
        $field7name = $row["price"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
              </tr>';
    }
    $result->free();
}
?>
</div>
<br><br>

</body>
</html>
