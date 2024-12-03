<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin-User</title>
   <link rel="stylesheet" href="./styleMainMenu.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <?php 
        
        include 'connect.php';
        $Record = mysqli_query($connect,"SELECT * FROM `user`");
        $row_count = mysqli_num_rows($Record);
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
                   <a href="settingUser.php">User</a>
                </li>
                <li>
                   <a class="btn-login" href = "logout.php">Logout</a>
                </li>
            </ul>
        </header>  
        <!--Body-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-10">
                    <table class="table table-secondary table-bordered ">
                        <thead class="text-center ">
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Number</th>
                            <th>Delete</th>
                        </thead>
                        <tbody class="text-center">
                            <?php 
                                $i = 0;
                                while ($row = mysqli_fetch_array($Record)){
                                    echo"
                                    <tr>
                                        <td> ";?> <?php echo ++$i;?> <?php echo"</td>
                                        <td>$row[username]</td>
                                        <td>$row[email]</td>
                                        <td>$row[number]</td>
                                        <td><a href='deleteUser.php? ID=$row[id]' class = 'btn1 btn-outline-danger'>Delete</a></td>
                                    </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div  class="col-md-2 pr-5 text-center">
                    <h3>Total</h3>
                    <h1><?php echo $row_count ?></h1>
                </div>
            </div>
        </div>
        <!--FETCH DATA-->
    </section>
</body>
</html>