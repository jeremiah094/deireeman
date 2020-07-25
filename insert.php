<?php
include_once 'db.php';
if(isset($_POST['order_btn']))
{
     $name = 'oneday';
     $email = $_POST['email'];
     $address1 = $_POST['address1'];
     $address2 = $_POST['address2'];
     $address3 = $_POST['address3'];
     $county = 'cork';
     $price = '2';

     $sql = "INSERT INTO product (productName,email,address1,address2,address3,county,price)
     VALUES ('$name','$email','$address1' , '$address2' , '$address3' , '$county' , '$price' )";

     if (mysqli_query($conn, $sql)) {

        header('location: order.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
