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
                </li>
                <li>
                   <a href="settingUser.php">User</a>
                </li>
                <li>
                   <a class="btn-login" href = "logout.php">Logout</a>
                </li>
            </ul>
        </header>  
        <!--Body-->
        <div class="container">
            <div class="row">
                <div class ="col-md-6 m-auto border">

                    <form action="insertProduct.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <p class="text-center fw-bold fs-3">Chi tiết sản phẩm</p>
                            <label for="formGroupExampleInput" class="form-label">Nhập tên sản phẩm:</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Tên sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nhập giá sản phẩm:</label>
                            <input type="number" name="price" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nhập ảnh sản phẩm:</label>
                            <input type="file" name="image" class="form-control" id="formGroupExampleInput" placeholder="Giá sản phẩm">
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
                        <input class="fs-4 fw-bold my-3 form-control" name="submit" type="submit" value="Upload">
                    </form>
                </div>
            </div>
        </div>

            <!--FETCH DATA-->
        <div class="container">
            <div class="row">
                <div class ="col-md-8 m-auto">
                    <table class="table table-hover border">
                        <thead class="bg-dark text-white fs-5 font-monospace text-center">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </thead>

                        <tbody class="text-center">
                            <?php
                                include 'connect.php';
                                $Record = mysqli_query($connect, "SELECT * FROM `product`");
                                    while($row = mysqli_fetch_array($Record))

                                    echo"
                                    <tr>
                                        <td>$row[id]</td>
                                        <td>$row[name]</td>
                                        <td>$row[price]</td>
                                        <td><img src='$row[image]' height='100px'></td>
                                        <td>$row[productType]</td>
                                        <td><a href='delete.php? ID= $row[id]' class = 'btn-danger btn1'>Delete</a></td>
                                        <td><a href='update.php? ID= $row[id]' class = 'btn-warning btn1'>Update</a></td>
                                    </tr>
                                    ";
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>