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
            echo '<script>alert("Supplier info added successfully!");
            </script>';
            echo '<script>window.location.href="supplier.php";</script>';
        }
        else
        {
            echo '<script>alert("Failed to add supplier info! Please try again!!");
            </script>';
        }
    }
?>