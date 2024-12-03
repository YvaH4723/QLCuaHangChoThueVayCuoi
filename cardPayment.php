<?php
    include 'totalPrice.php';
    $connect = mysqli_connect('localhost','root','','storemanage');

    // Check connection
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }

    // Retrieve payment data from the form
    $card_number = $_POST['cardNumber'];
    $expiry_date = $_POST['expiryDate'];
    $cvv = $_POST['cvv'];
    $total = $_POST['totalPrice'];

    // Insert payment data into the database
    mysqli_query($connect,"INSERT INTO `payments`(`cardNumber`, `expiryDate`, `cvv`, `totalPrice`) VALUES ('$card_number','$expiry_date','$cvv','$total')");
    header("Location:index2.php");

    $connect->close();

?>
