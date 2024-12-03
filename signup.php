<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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
        <h1>Signup</h1>
        <form method="post" action="insertAccount.php">
            <div class="txt_field">
                <input type="text" required name="createName">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="createEmail">
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="number" required name="createPN">
                <span></span>
                <label>Phone number</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="createPassword">
                <span></span>
                <label>Password</label>
            </div>
            <input name="submit" type="submit" value="Signup">
            <div class="signup_link" >
                Already have account? <a href="login.php">Login</a>
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
</body>
</html>
