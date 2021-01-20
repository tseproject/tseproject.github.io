<?php
    require('database.php');
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $search = mysqli_query($db, "SELECT * FROM `admin` WHERE ANAME='".$email."' AND  APASS='".$pass."'");
        $sess = mysqli_query($db, "SELECT ANAME FROM `admin` WHERE ANAME='".$email."' AND  APASS='".$pass."'");
        $match = mysqli_num_rows($search);

        if($match > 0)
        {
            $_SESSION['loggedin'] = true;
            header('Location: adminpage.php');
        }
        else
        {
            echo "Error";
        }
    }
?>

