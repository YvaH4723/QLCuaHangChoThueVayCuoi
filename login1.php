<?php
// Create connection
$connect = mysqli_connect('localhost','root','','storemanage');

$A_name = $_POST['username'];
$A_password = $_POST['userpassword'];

$result = mysqli_query($connect,"SELECT * FROM `admin` WHERE username ='$A_name' AND userpassword = '$A_password' ");

session_start();

if(mysqli_num_rows($result)){

                $_SESSION['admin'] = $A_name;

    echo"
        <script>
            alert('Login successfully!');
            window.location.href='admin.php';
        </script>

    ";
}
else{
    echo"
        <script>
            alert('Invalid username/userpassword!');
            window.location.href='login.php';
        </script>

    ";
}
?>