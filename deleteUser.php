<?php 
    include 'connect.php';
    echo $Id = $_GET['ID'];

    mysqli_query($connect,"DELETE FROM `user` WHERE id = $Id");
    header("Location:settingUser.php");
?>