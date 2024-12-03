
<?php 
    session_start();

    

    $connect = mysqli_connect('localhost','root','','storemanage');

    $Name = $_POST['username'];
    $Password = $_POST['userpassword'];

    $result = mysqli_query($connect, "SELECT * FROM `user` WHERE (username ='$Name' OR email ='$Name') AND userpassword = '$Password'" );

    if(mysqli_num_rows($result)){
        $_SESSION['user'] = $Name;

        echo"
                <script>
                alert('Login successful');
                window.location.href = 'index2.php';
                </script>
            ";
    }
    else{
        echo"
            <script>
                alert('Incorrect username/email or password');
                window.location.href = 'userLogin.php';
            </script>
        ";
    }
?>