<?php
    require 'database.php';

    if (isset($_GET['itemid']))
    {
        $itemid = mysqli_escape_string($db, $_GET['itemid']);   
        $query = mysqli_query($db, "SELECT * from ITEM WHERE Itemid=$itemid");
        $item = mysqli_fetch_assoc($query);
        
        $ItemName = $item['itemname'];
        $Quantity = $item['itemqty'];
        $ItemDate = $item['itemdate'];
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
        <link rel="stylesheet" href="AI-style.css">

    </head>
    <body>  
        <?php include 'header.php' ?>
		<div class="additem">
			<h1 class="heading">Edit Item</h1>
			<div class="log">			
                <div class="add-form">
                    <form method="post" action="edit.php">
                        <input type="hidden" name="id-to-modify" value="<?php echo $itemid?>">
                        <label class="f-label">Current Item Name: <?php echo $ItemName?></label><br>
                        <input type="text" id="item-name" name="item-name" size="67">
                        <br><br>
                        <label class="f-label">Current Quantity: <?php echo $Quantity?></label><br>
                        <input type="number" id="item-quantity" name="item-quantity">
                        <br><br>
                        <label class="f-label">Current Expired Date: <?php echo $ItemDate?> </label><br>
                        <input type="date" id="ex-date" name="ex-date">
                        <br><br>
                        <button type="submit" class="btn" name="btn-submit">Change</button>
                    </form>
                </div>
			</div>
		</div>
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>