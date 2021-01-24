<?php
    require 'database.php';
    if (isset($_POST['deleteitem']))
    {
        $del_item_id = mysqli_escape_string($db, $_POST['del_item_id']);

        $delete = mysqli_query($db, "DELETE from ITEM WHERE itemid=$del_item_id");

        if($delete)
        {
            $_SESSION['delitem'] = 1;
        }
        else
        {
            $_SESSION['delitem'] = 0;
        }
        echo '<script>window.location.href="item.php";</script>';
    }   
?>