<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMainMenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Giỏ hàng</title>
</head>
<body>
   <section>
      <header>
         <div class="circle"></div>
         <div class="circles"></div>
         <a href="index2.php" class="logo">
            Meo
            <span>Store</span>
         </a>
         <ul>
            <li>
               <a href="damNgan2.php">Đầm ngắn</a>
            </li>
            <li>
               <a href="damDai2.php">Đầm dài</a>
            </li>
            <li>
               <a href="damRen2.php">Đầm ren</a>
            </li>
            <li>
               <a href="aoDai2.php">Áo dài</a>
            </li>
            <li>
              <a href="cart.php" style="color: pink;">Giỏ hàng</a>
            </li>
            <li>
               <a class="btn-login" href = "userLogout.php">Logout</a>
            </li>
            <li>
               <a class="btn-login" href = "adminLogin.php">Admin</a>
            </li>
         </ul>
         </header>
      <div class="texts">
         <h1>Meo
            <span>Store</span></h1>
         <p></p>
      </div>
      <div class="background_img">
         <img src=".//IMG/DressEX.png" alt="Image not found">
      </div>
    </section>

   <!--Middle-->

   
   <div class="container-fluid">
      <div class="row justify-content-around">
         <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered text-center">
               <thead class="">
                  <th>No.</th>
                  <th>Product Name</th>
                  <th>Product Prize</th>
                  <th>Product Quantity</th>
                  <th>Total Price</th>
                  <th>Update</th>
                  <th>Delete</th>
                  <th></th>
               </thead>
               <tbody>
               <?php 
                  
                  session_start();
                  $ptotal = 0;
                  $total = 0;
                  $i = 0;
                  if(isset($_SESSION ['cart'])){
                     foreach($_SESSION['cart'] as $key => $value){
                        $ptotal =  $value['productPrice'] *  $value['productQuantity'];
                        $total  += $value['productPrice'] * $value['productQuantity'];$ptotal = $value['productPrice'] * $value['productQuantity'];
                        $i  = $key +1;
                        echo "
                        <form action='insertCart.php' method='post'>
                        <tr>
                        <td>$i</td>
                        <td><input type ='hidden' name = 'name' value ='$value[productName]'>$value[productName]</td>
                        <td><input type ='hidden' name = 'price' value ='$value[productPrice]'>$value[productPrice]</td>
                        <td><input type ='' name = 'quantity' value ='$value[productQuantity]'></td>
                        <td>$ptotal</td>
                        <td><button name = 'update'class = 'btn1 btn-warning'>Update</button></td>
                        <td><button name ='remove' class = 'btn1 btn-danger'>Delete</button></td>
                        <td><input type = 'hidden' name = 'item' value = '$value[productName]'></td>
                     </tr>
                     </form>
                     ";
                     }
                  }
               ?>
               </tbody>
            </table>
         </div>
         <div class="col-lg-3 text-center">
            <form action="bill.php" method="post">
               <h3>Total</h3>
               <h1><?php echo number_format($total) ?></h1>
               <td><button name ="checkOut" class = "btn1 btn-danger">Check out</button></td>
            </form>
         </div>
         
      </div>
   </div>


   <!--Bottom-->
   <footer class="footer">
      <div  class="main">
         <div  class="row">
            <div class="footer_col">
               <h4>Follow us</h4>
               <div  class="socials">
                  <a href="https://www.facebook.com/nguyenhoanganh.yva/"><img src=".//IMG/Facebook_Logo_(2019).png" alt="Image not found"></a>
                  <a href="https://www.instagram.com/yvah47/"><img src=".//IMG/Instagram_logo_2022.png" alt="Image not found"></a>
                  <a href="https://mail.google.com/mail/u/0/#inbox"><img src=".//IMG/Gmail_icon_(2020).svg.png" alt="Image not found"></a>
                  <a href="https://twitter.com/YvaH_JustY"><img src=".//IMG/X-Logo.png" alt="Image not found"></a>
               </div>
            </div>
         </div>
      </div>
   </footer>
</body>
</html>