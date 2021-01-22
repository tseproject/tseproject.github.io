<?php
    require('database.php');
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $search = mysqli_query($db, "SELECT * FROM USER WHERE `EMAIL`='".$email."' AND  `PASSWORD`='".$pass."'");
        $result = mysqli_fetch_row($search);
        if($result != NULL)
        {
            $_SESSION['loggedin'] = true;
            $_SESSION['user'] = $result[3];
            $_SESSION['username'] = $result[2];
            $_SESSION['err'] = 0;
            header('Location: adminpage.php');
        }
        else
        {
            $_SESSION['err'] = 1;
            echo '<script>window.location.href = "signin.php";</script>';
        }
    }
?>