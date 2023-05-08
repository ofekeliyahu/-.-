<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <h2><?php echo "Welcome "?></h2>
    <h3>
    <?php if( $_GET["color"]!="pink" && $_GET["color"]!="black" && $_GET["color"]!="white"){
        echo'<h1> sorry :( </h1> ';
        echo '<h3> The color is out of stock </h3>';
        return ;
    }
   
     else {
        echo"shirt color: ";
        echo $_GET["color"];
    
    }?>
    <br><br>
        shirt size:  <?php echo $_GET["size"]?><br><br>

        <?php if( $_GET["qty"]==""){
        echo "Qty: 1";
    }
   
     else {
        echo"Qty: ";
        echo $_GET["qty"];
    
    }?>
        <br><br>
</h3>
</body>
</html>