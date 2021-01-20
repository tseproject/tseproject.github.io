<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
<a href="index.php" class="navbar-brand">Restaurant Name</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            
            
            
            <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true)
                {
                    echo '<li class="nav-item">
                        <a href="adminpage.php" class="nav-link">Admin Page</a>
                    </li><li class="nav-item">
                    <a href="signout.php" class="nav-link">Sign Out</a>
                    </li>';
                }
                else
                {
                    echo '<li class="nav-item"><a href="signin.php" class="nav-link">Sign In</a></li> <li class="nav-item"><a href="signup.php" class="nav-link">Sign Up</a></li>';
                }
            ?>
        </ul> 
</div>
</nav>