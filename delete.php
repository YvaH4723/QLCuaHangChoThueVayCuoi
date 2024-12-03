<?php 
    include 'connect.php';
    echo $Id = $_GET['ID'];

    mysqli_query($connect,"DELETE FROM `product` WHERE id = $Id");
    header("Location:product.php");
?>