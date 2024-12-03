


<?php 

    if(isset($_POST['submit'])){
            include 'connect.php';
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $product_image = $_FILES['image'];
        $image_loc = $_FILES['image'] ['tmp_name'];
        $image_name = $_FILES['image'] ['name'];
        $img_des = "UploadImg/".$image_name;
        move_uploaded_file($image_loc,"UploadImg/".$image_name);

        $product_category = $_POST['productType'];
    }

    //thêm sản phẩm

    mysqli_query($connect,"INSERT INTO `product`( `name`, `price`, `image`, `productType`) 
        VALUES ('$product_name','$product_price','$img_des','$product_category')");
        header("Location:product.php");

?>
