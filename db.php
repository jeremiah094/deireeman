<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u984442499_multi_login');
define('DB_PASSWORD', 'Jeremiah');
define('DB_NAME', 'u984442499_multi_login');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if(!$conn){
    die('Could not Connect MySql Server:' .mysql_error());
}
?>
