<?php
    require 'database.php';
    if (isset($_POST['delete']))
    {
        $del_supplier_id = mysqli_escape_string($db, $_POST['del_supplier_id']);

        $delete = mysqli_query($db, "DELETE from SUPPLIER WHERE supplierid=$del_supplier_id");

        if($delete)
        {
            $_SESSION['delsup'] = 1;
        }
        else
        {
            $_SESSION['delsup'] = 0;
        }
        echo '<script>window.location.href="supplier.php";</script>';
    }   
?>