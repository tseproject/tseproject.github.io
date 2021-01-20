<?php
    require 'database.php';
    if (isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['position']))
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $uname = $_POST['uname'];
        $pos = $_POST['position'];

        $insert = mysqli_query($db, "INSERT INTO USER (`EMAIL`, `PASSWORD`, `UNAME`, `UPOSITION`) VALUES ('$email','$pass','$uname','$pos')");
        
        if($insert)
        {
            $_SESSION['loggedin'] = true;
            if ($pos == 1)
            {
                $_SESSION['user'] = 1; //admin
            }
            elseif ($pos == 0)
            {
                $_SESSION['user'] = 0; //staff
            }
            header('Location: adminpage.php');
            echo '<script>alert("User registered successfully! Please sign in with your new account.");</script>';
        }
        else
        {
            echo "Error";
        }
    }
?>