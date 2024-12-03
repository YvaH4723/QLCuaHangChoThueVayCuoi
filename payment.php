<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="styleLogin.css">
   <link rel="stylesheet" href="styleMainMenu.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

</head>
<body>
    <?php 
                    
        include 'totalPrice.php';
    ?>

    <!--Header-->
    <section>
        <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <a href="index2.php" class="logo">
            Meo <span>Store</span>
            </a>
            <ul>
                <li>
                <a class="btn-login" href = "logout.php">Logout</a>
                </li>
            </ul>
        </header>  
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
   </section>
   
</body>
</html>