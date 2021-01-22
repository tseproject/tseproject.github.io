<?php
    require 'database.php';
    if (isset($_POST['item-name']) && isset($_POST['item-quantity']) && isset($_POST['ex-date']))
    {
        $itemname = $_POST['item-name'];
        $itemquantity = $_POST['item-quantity'];
        $expiredate = $_POST['ex-date'];
        

        $insert = mysqli_query($db, "INSERT INTO ITEM (`ITEMNAME`, `ITEMQTY`, `ITEMDATE`) VALUES ('$itemname','$itemquantity','$expiredate')");
        
        if($insert)
        {
            $_SESSION['add'] = 1;
        }
        else
        {
            $_SESSION['add'] = 0;
        }
        echo '<script>window.location.href="item.php";</script>';
    }
?>