<?php
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION['user']);
    header('Location: index.php');
?>

