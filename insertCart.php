
<?php 

    session_start();
    //session_destroy();
if(isset($_SESSION['user'])){
    
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];   
    $product_quantity = $_POST['quantity'];

    if(isset($_POST['addCart'])){
        // $check_product = array_column($_SESSION['cart'],'productName');
        // if(in_array($product_name,$check_product)){
        //     echo"
        //          <script>
        //          alert('Product already added');
        //          window.location.href = 'user.php';
        //          </script>
        //     ";
        // ;}

        // else{
        $_SESSION['cart'][] = array('productName' => $product_name, 
                        'productPrice' => $product_price, 
                        'productQuantity' => $product_quantity);
                        header("location:cart.php");
        }
    // }

    //remove products from cart
    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                header("location:cart.php");
            }
        }
    }

    //update product 
    if(isset($_POST['update'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['productName'] === $_POST['item']){
                $_SESSION['cart'][$key] = array('productName' => $product_name, 
                                        'productPrice' => $product_price, 
                                        'productQuantity' => $product_quantity);
                                        header("location:cart.php");
            }
        }
    }
}else{
    header("location:userLogin.php");
}

    
?>