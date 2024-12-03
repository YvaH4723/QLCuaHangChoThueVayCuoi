<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

</head>
<?php 
   session_start();
   if(!$_SESSION['admin']){
      header("Location:login.php");
   }
?>

<body>
    <!--Header-->
   <section>
      <header>
         <div class="circle"></div>
         <div class="circles"></div>
         <a href="index.php" class="logo">
            Meo <span>Store</span>
         </a>
         <ul>
            <li>
               <a href="product.php">Product</a>
            <li>
               <a href="settingUser.php">User</a>
            </li>
            <li>
               <a class="btn-login" href = "logout.php">Logout</a>
            </li>
         </ul>
      </header>  
   </section>
</body>
</html>