<?php
    require 'database.php';

    function get_item()
    {
        global $db;
        $ret = array();
        $query = "SELECT * FROM ITEM";
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
                <h1 class="display-8">Item List</h1>
            </div>
            <?php
                if (isset($_SESSION['add']) && $_SESSION['add'] == 1) //item added
                {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Item Added!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
                }  
                elseif (isset($_SESSION['add']) && $_SESSION['add'] == 0) //item add fail
                {
            ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Item add failed!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
                else if (isset($_SESSION['delitem']) && $_SESSION['delitem'] == 1) // item deleted
                {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Item Deleted!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php        
                }
                else if (isset($_SESSION['delitem']) && $_SESSION['delitem'] == 1) //item delete failed
                {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Item deletion failed!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php
                }
            ?>
            <a class="btn btn-primary" role="button" href="additem.php">Add Item</a>
            <div class="row mt-2">
                <div class="col-md-5">
                    <?php
                        $currdate = date("Y-m-d");
                        $item = get_item();
                        foreach($item as $itemdetails)
                        {
                            date_default_timezone_set("Asia/Singapore");
                            $count = $itemdetails['itemid'];
                            $itemname = $itemdetails['itemname'];
                            $itemqty = $itemdetails['itemqty'];
                            $itemdate = $itemdetails['itemdate'];
                    ?>
                            <div class="card-body items" style="<?php
                            if(strtotime($itemdetails['itemdate']) < strtotime(date("Y-m-d")))
                            {
                                echo"border-color:red;";
                            }
                            ?>">
                                <h5 class="card-title"><?php echo $itemname; ?></h5>
                                <p class="card-text">Expire Date: <?php echo $itemdate; ?></p>
                                <p class="card-text">Quantity: <?php echo $itemqty; ?></p>
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <form action="delitem.php" method="POST">
                                    <input type="hidden" name="del_item_id" value="<?php echo ($count)?>">
                                    <input type="submit" name="deleteitem" class="btn btn-danger btn-sm" value="Delete"></input>
                                </form>
                            </div>
                            <br>
                        <?php
                        }
                        ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
<?php
    unset($_SESSION['delitem']);
    unset($_SESSION['add']);
?>
