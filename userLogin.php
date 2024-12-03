<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <section>
        <header>
        <div class="circle"></div>
        <div class="circles"></div>
        <a href="index.php" class="logo">
            Meo
            <span>Store</span>
        </a>
    </section>
    <div class="center">
        <h1>User Login</h1>
        <form action="login2.php" method="post" >
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="userpassword">
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link" >
                Not a member? <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>

    <footer class="footer">
      <div  class="main">
         <div  class="row">
            <div class="footer_col">
               <h4>Follow us</h4>
               <div  class="socials">
                  <a href="#"><img src="../IMG/Facebook_Logo_(2019).png" alt="Image not found"></a>
                  <a href="#"><img src="../IMG/Instagram_logo_2022.png" alt="Image not found"></a>
                  <a href="#"><img src="../IMG/Gmail_icon_(2020).svg.png" alt="Image not found"></a>
                  <a href="#"><img src="../IMG/X-Logo.png" alt="Image not found"></a>
               </div>
            </div>
         </div>
      </div>
   </footer>

   <?php
        include 'connect.php';
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);
        
            if ($result->num_rows == 1) {
                // Login successful
                echo "Login successful!";
                // You can redirect the user or perform other actions here
            } else {
                // Login failed
                echo "Invalid email or password";
            }
        }
        $conn->close();
   ?>
</body>
</html>
