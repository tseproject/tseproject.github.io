<?php
    require 'database.php';

    $Supplierid = $_POST['id-to-modify'];

    if (isset($_POST['supplier-name']))
    {
        if ($_POST['supplier-name']!=null)
        {
            $Name = $_POST['supplier-name'];        
            $modify = mysqli_query($db, "UPDATE SUPPLIER SET Name='$Name' WHERE Supplierid=$Supplierid");
        }
    }

    if (isset($_POST['supplier-contact']))
    {
        if ($_POST['supplier-contact']!=null)
        {
            $Contact = $_POST['supplier-contact'];
            
            $modify = mysqli_query($db, "UPDATE SUPPLIER SET Contact='$Contact' WHERE Supplierid=$Supplierid");
        }
    }

    if (isset($_POST['supplier-address']))
    {
        if ($_POST['supplier-address']!=null)
        {
            $Address = $_POST['supplier-address'];
            
            $modify = mysqli_query($db, "UPDATE SUPPLIER SET Address='$Address' WHERE Supplierid=$Supplierid");
        }
    }

    echo '<script>window.location.href="supplier.php";</script>';
?>