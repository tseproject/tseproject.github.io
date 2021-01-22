<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'?>
        <br>
        <br>
        <br>
        
        <div class="container" id="signin">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <?php 
                  if(isset($_SESSION['reg']) && $_SESSION['reg'] == 0)
                  {
                ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Account registration failed!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php
                  }
                ?>
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5>
                    <form action="register.php" method="post">
                        <div class="form-label-group">
                            <label for="inputName">Name</label>
                            <input type="name" id="inputName" class="form-control" placeholder="Name" name="uname" required>
                        </div>
                        <div class="form-label-group">
                            <label for="inputEmail">Email address</label>
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
                        </div>
        
                        <div class="form-label-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required>
                        </div>
                        <div class="form-label-group mt-2">
                            <label for="inputPosition">Position</label>
                            <select name="position" id="inputPosition" class="form-control custom-select">
                                <option>Choose your position</option>
                                <option value="1">Admin</option>
                                <option value="0">Staff</option>
                            </select>
                        </div>
                        <hr class="my-4">
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"    crossorigin="anonymous"></script>
    </body>
</html>