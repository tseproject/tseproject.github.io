<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Restaurant Inventory Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a href="index.php" class="navbar-brand">Restaurant Name</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="item.php" class="nav-link">Item</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="signin.php" class="nav-link">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.php" class="nav-link">Sign Up</a>
                    </li>
                </ul> 
            </div>
        </nav>
 
        <div class="container mt-1">
            <div class="jumbotron">
                <h1 class="display-8">Item List</h1>
            </div>
            <button type="button" class="btn btn-primary">Add Item</button>

            <div class="row mt-2">
                <div class="col-md-5">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 1</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>        
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 2</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>        
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 3</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>       
                </div>
                <div class="col-md-5">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 4</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>        
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 5</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>        
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">Item 6</h5>
                            <p class="card-text">Expire Date: </p>
                            <p class="card-text">Quantity: </p>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>