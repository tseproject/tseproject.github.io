<?php
    require 'database.php';
    if (isset($_POST['supplier-name']) && isset($_POST['supplier-contact']) && isset($_POST['supplier-address']))
    {
        $Name = $_POST['supplier-name'];
        $Contact = $_POST['supplier-contact'];
        $Address = $_POST['supplier-address'];
        

        $insert = mysqli_query($db, "INSERT INTO SUPPLIER (`NAME`, `CONTACT`, `ADDRESS`)VALUES('$Name','$Contact','$Address')");
        
        if($insert)
        {
            $_SESSION['addsup'] = 1;
        }
        else
        {
            $_SESSION['addsup'] = 0;
        }
        echo '<script>window.location.href="supplier.php";</script>';
    }
?>