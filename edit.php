<?php
    require 'database.php';

    $itemid = $_POST['id-to-modify'];

    if (isset($_POST['item-name']))
    {
        if ($_POST['item-name']!=null)
        {
            $ItemName = $_POST['item-name'];        

            $modify = mysqli_query($db, "UPDATE ITEM SET Itemname='$ItemName' WHERE itemid=$itemid");
            
        }
    }

    if (isset($_POST['item-quantity']))
    {
        if ($_POST['item-quantity']!=null && $_POST['item-quantity'] >= 0)
        {
            $ItemQuantity = $_POST['item-quantity'];

            $modify = mysqli_query($db, "UPDATE ITEM SET itemqty='$ItemQuantity' WHERE itemid=$itemid");
        }
    }

    if (isset($_POST['ex-date']))
    {
        if ($_POST['ex-date']!=null)
        {
            $ExpiryDate = $_POST['ex-date'];
            
            $modify = mysqli_query($db, "UPDATE ITEM SET itemdate='$ExpiryDate' WHERE itemid=$itemid");
            
        }
    }

    echo '<script>window.location.href="item.php";</script>';


?>