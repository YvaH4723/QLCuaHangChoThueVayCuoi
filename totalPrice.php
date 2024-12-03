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
            }
        }
    ?>