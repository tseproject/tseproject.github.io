<?php
    require 'database.php';

    function get_supplier()
    {
        global $db;
        $ret = array();
        $query = "SELECT * FROM SUPPLIER";
        $sql = mysqli_query($db, $query);
        while ($ar = mysqli_fetch_assoc($sql))
        {
            $ret[] = $ar;
        }
        return $ret;
    }
?>
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
        <?php include 'header.php'?>
 
        <div class="container mt-1">
            <div class="jumbotron">
                <h1 class="display-8">Supplier List</h1>
            </div>
            <?php
                if (isset($_SESSION['addsup']) && $_SESSION['addsup'] == 1) //item added
                {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Supplier Added!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }  
                elseif (isset($_SESSION['addsup']) && $_SESSION['addsup'] == 0) //item added
                {
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Supplier add failed!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
                elseif (isset($_SESSION['delsup']) && $_SESSION['delsup'] == 1)
                {
            ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Supplier Deleted!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
                elseif (isset($_SESSION['delsup']) && $_SESSION['delsup'] == 0)
                {
            ?>
                    <div class="alert alert-failed alert-dismissible fade show" role="alert">
                        <strong>Supplier Deletion Failed!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
            ?>

            <a class="btn btn-primary" role="button" href="addsupplier.php">Add Supplier Information</a>
            <div class="row mt-2">
                <div class="col-md-5">
                    <?php
                        $supplier = get_supplier();
                        foreach($supplier as $supplierdetails)
                        {
                            $Name = $supplierdetails['Name'];
                            $Contact = $supplierdetails['Contact'];
                            $Address = $supplierdetails['Address'];
                    ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $Name; ?></h5>
                                <p class="card-text">Contact: <?php echo $Contact; ?></p>
                                <p class="card-text">Address: <?php echo $Address; ?></p>
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <form action="delsup.php" method="POST">
                                    <input type="hidden" name="del_supplier_id" value="<?php echo ($supplierdetails['Supplierid'])?>">
                                    <input type="submit" name="delete" class="btn btn-danger btn-sm" value="Delete"></input>
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                </div>
                <!-- <div class="col-md-5">
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
                </div> -->
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    unset($_SESSION['addsup']);
    unset($_SESSION['delsup']);
?>