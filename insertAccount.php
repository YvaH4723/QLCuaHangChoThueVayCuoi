<?php 

    $connect = mysqli_connect('localhost','root','','storemanage');

    if(isset($_POST['submit'])){
        $Name = $_POST['createName'];
        $Email = $_POST['createEmail'];
        $Number = $_POST['createPN'];
        $Password = $_POST['createPassword'];

        $Dup_email = mysqli_query($connect, "SELECT * FROM `user` WHERE email = '$Email'");
        $Dup_username = mysqli_query($connect, "SELECT * FROM `user` WHERE username = '$Name'");

        if(mysqli_num_rows($Dup_email)){
            echo"
                <script>
                alert('This Email is already taken');
                window.location.href = 'signup.php';
                </script>
            ";
        }
        if(mysqli_num_rows($Dup_username)){
            echo"
                <script>
                alert('This username is already taken');
                window.location.href = 'signup.php';
                </script>
            ";
        }
        else{
            mysqli_query($connect, "INSERT INTO `user`(`username`, `email`, `number`, `userpassword`) 
                                VALUES ('$Name','$Email','$Number','$Password')");
            echo"
                <script>
                    alert('Signup successful');
                    window.location.href = 'userLogin.php';
                </script>
            ";
        }
    }
?>