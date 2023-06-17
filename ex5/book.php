<?php
include "config.php";
include "db.php";

      $query = "SELECT * FROM tbl_76_books WHERE bookid=".$_GET["bookId"];
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
  <?php
    echo '<div class="row">';
    $row = mysqli_fetch_assoc($result);
      $img = $row["imageURL"];
      $img2 = $row["imageURL2"];
      if(!$img) $img = "";
      echo '<div class="col-sm-8">';
      echo    '<div class="card">';
      echo   		'<h4 class="card-title">' . $row["bookname"] . '</h4>';
      echo 		'<img src="' . $img .'" class="rounded mx-auto d-block">';
      echo 		'<div class="card-body">';
      echo   		'<h6> Author: '. $row["author"] . '</h6>';
      echo 		'<img src="' . $img2 . '" class="rounded mx-auto d-block">';
      echo   		'<h6> Category: '. $row["category"] . '</h6>';
      echo   		'<h6> Price: '. $row["price"] . '</h6>';
      echo    	'<a href="book_store.php' . '" class="btn btn-primary">back</a>';
      echo '</div></div></div>';
    
    echo '</div>';
    ?> 
    <script src="js/script.js"></script>
  </body>
  </html>
  <?php
      mysqli_close($connection);
  ?>
  
