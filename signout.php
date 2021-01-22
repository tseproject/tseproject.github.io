<?php
    unset($_SESSION['loggedin']);
    unset($_SESSION['username']);
    unset($_SESSION['user']);
    unset($_SESSION['reg']);
    unset($_SESSION['err']);
    unset($_SESSION['add']);
    header('Location: index.php');
?>

