<?php
include "db.php";



if(isset($_GET["category"])){
  $categ=$_GET["category"];
  if($categ==='"All"'){
    $query 	= "SELECT * FROM tbl_76_books";
  }else{
    $query 	= "SELECT * FROM tbl_76_books WHERE category=".$categ;
  }
  }else{
  
  $query 	= "SELECT * FROM tbl_76_books";
}
$result = mysqli_query($connection, $query);
    if(!$result) {
        die("DB query failed.");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        
    <title>Book store</title>
</head>
<body>
  <h1>Books</h1>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown
    </button>
   <ul class="dropdown-menu" id="cat">
    </ul>
    </div>
<?php
  echo '<div class="row">';
  while($row = mysqli_fetch_assoc($result)) {
    $img = $row["imageURL"];
    if(!$img) $img = "";
    echo '<div class="col-sm-6">';
    echo    '<div class="card">';
    echo   		'<h4 class="card-title">' . $row["bookname"] . '</h4>';
    echo 		'<img src="' . $img . '" class="rounded mx-auto d-block">';
    echo 		'<div class="card-body">';
    echo   		'<h6> Author: '. $row["author"] . '</h6>';
    echo   		'<h6> Price: '. $row["price"] . '</h6>';
    echo    	'<a href="book.php?bookId=' . $row["bookid"] . '" class="btn btn-primary">See book page</a>';
    echo '</div></div></div>';
  }
  echo '</div>';
  ?> 
  <script src="js/script.js"></script>
</body>
</html>
<?php
    mysqli_close($connection);
?>
