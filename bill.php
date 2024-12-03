<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMainMenu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Giỏ hàng</title>
</head>
<style>
    table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
</style>
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
               <a class="btn-login" href = "userProfile.php">User Profile</a>
            </li>
         </ul>
         </header>


   <!--Middle-->
   <h2>Bill Details</h2>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'totalPrice.php';

            // Database connection
            $connect = mysqli_connect('localhost', 'root', '', 'storemanage');

            // Check connection
            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            }

            

            // Retrieve order details from the database
            $sql = "SELECT * FROM orders"; // Change 'orders' to your actual table name
            $result = mysqli_query($connect, "SELECT * FROM `payments`");

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['quantity'] . "</td>";
                    echo "<td>$" . $row['price'] . "</td>";
                    echo "<td>$" . $row['totalPrice'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No orders found</td></tr>";
            }

            ?>
        </tbody>
        <div class="center">
        <h1>Nhập thẻ ATM</h1>
        <form action="cardPayment.php" method="post" >
            <div class="txt_field">
                <input type="text" required name="cardNumber" required id="cardNumber">
                <span></span>
                <label>Card Number</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="expiryDate" id="expiryDate">
                <span></span>
                <label>Expiry Date</label>
            </div>
            <div class="txt_field">
                <input type="text" required name="cvv" required id="cvv">
                <span></span>
                <label>CVV</label>
            </div>

            <div class="txt_field">
                <h6>Tên sản phẩm</h6>
                <?php echo $value['productName'] ?>
                <span></span>
            </div>
            <div class="txt_field">
                <h6>Total</h6>
                <?php echo number_format($total) ?>
                <span></span>
            </div>
            
            <input type="submit" value="Thanh toán">
        </form>
        </div>
    </table>

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