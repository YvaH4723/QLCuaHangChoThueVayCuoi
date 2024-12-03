<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Meo Store - Bridal Wedding Dress</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
               <a href="damNgan.php">Đầm ngắn</a>
            </li>
            <li>
               <a href="damDai.php">Đầm dài</a>
            </li>
            <li>
               <a href="damRen.php">Đầm ren</a>
            </li>
            <li>
              <a href="aoDai.php">Áo dài</a>
            </li>
            <li>
               <a href="cart.php">Giỏ hàng</a>
            </li>
            <li>
               <a class="btn-login" href = "logout.php">Logout</a>
            </li>
            <li>
               <a class="btn-login" href = "admin.php">Admin</a>
            </li>
         </ul>
      </header>
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
   <hr>

   <div class="dress-type">
      <div class="popular">
         <h1>Hàng nổi bật</h1>
      </div>
   </div>

   <div class="container-fluid">
      <div class="colmd-12">
         <div class="row">
            <?php 
               include 'connect.php';
               $Record = mysqli_query($connect,'select * from product');
                  while ($row = mysqli_fetch_array($Record)){
                     $check_page = $row['productType'];
                     if ($check_page ==='home'){

                     

               echo "
                  <div class ='col-md-6 col-lg-4 m-auto mb-3'>
                  <form action='insertCart.php' method='POST'>
                     <div class='card m-auto' style ='width: 18rem;'>
                        <img src='$row[image]' class='card-img-top'>
                        <div class='card-body text-center'>
                           <h5 class='card-title fs-4 fw-bold'>$row[name]</h5>
                           <p class='card-text card-title fs-4 fw-bold'>Price: $row[price] Đồng</p>
                           <input type='hidden' name = 'name' value ='$row[name]'>
                           <input type='hidden' name = 'price' value = '$row[price]'>
                           <input type='number' name = 'quantity' value='min='1' max = '20' ' placeholder='Số lượng'><br><br>
                           <input type='submit' name='addCart' class='btn1 btn-danger text-white w-100' value='Thêm vào giỏ hàng'>
                        </div>
                     </div>
                     </form>
                  </div>
                  ";   
               }
            }
            ?>
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