<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?phP 
        include 'connect.php';
        $id = $_GET['ID'];
        $Record = mysqli_query($connect, "SELECT * FROM `product` WHERE id = '$id'");
        $data = mysqli_fetch_array($Record);

    ?>
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
                </li>
                <li>
                   <a href="">User</a>
                </li>
                <li>
                   <a class="btn-login" href = "logout.php">Logout</a>
                </li>
                <li>
                   <a class="btn-login" href = "">Userpanel</a>
                </li>
            </ul>
        </header>  
        <!--Body-->
        <div class="container">
            <div class="row">
                <div class ="col-md-6 m-auto border">

                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3">Cập nhật sản phẩm</p>

                            <label for="formGroupExampleInput" class="form-label">Nhập tên sản phẩm:</label>
                            <input type="text" value="<?php echo $data['name'] ?>"  name="name" class="form-control" id="formGroupExampleInput" placeholder="Tên sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nhập giá sản phẩm:</label>
                            <input type="number" value="<?php echo $data['price'] ?>" name="price" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nhập ảnh sản phẩm:</label>
                            <input type="file" name="image" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm"><br>
                            <img src="<?php echo $data['image'] ?>" alt="" style = "height: 300px;">
                        </div> 
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Loại sản phẩm</label>
                            <select class="form-select" name="productType">
                                <option value="home">Home</option>
                                <option value="damNgan">Đầm ngắn</option>
                                <option value="damDai">Đầm dài</option>
                                <option value="damRen">Đầm ren</option>
                                <option value="aoDai">Áo dài</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input class="fs-4 fw-bold my-3 form-control" name="update" type="submit" value="Update">
                    </form>
                </div>
            </div>
        </div>

        <!-- php update code -->
        <?php 
            if(isset($_POST['update'])){
                    $id = $_POST['id'];
                $product_name = $_POST['name'];
                $product_price = $_POST['price'];
                $product_image = $_FILES['image'];
                $image_loc = $_FILES['image'] ['tmp_name'];
                $image_name = $_FILES['image'] ['name'];
                $img_des = "UploadImg/".$image_name;
                move_uploaded_file($image_loc,"UploadImg/".$image_name);

                $product_category = $_POST['productType'];

                include 'connect.php';
                mysqli_query($connect,"UPDATE `product` SET `name`='$product_name',
                `price`='$product_price',`image`='$img_des',
                `productType`='$product_category' WHERE id = $id");
            }
        ?>
    </section>
</body>
</html>
