<?php

        //Linux connection
        //require_once("/opt/lampp/htdocs/Femcoders_Library/controller/BookController.php");

        //Mac connection
        //require_once("/Applications/MAMP/htdocs/Femcoders_Library/controller/BookController.php");

        //Windows connection
        require_once("C:/xampp/htdocs/Femcoders_Library/controller/BookController.php");

$controller = new BookController();
$result = $controller->getBooks();
//var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FemCoders Library</title>
</head>
<body>
<div id="header">
        <i class="fa-solid fa-3x fa-book"></i>
        <h1>FemCoders Library</h1>
    </div>
    <div class="mobile-container">
        <input type="checkbox">
        <i class="fa fa-bars"></i>
        <i class="fa fa-times"></i>
        <div class="myLinks">
          <a href="./main.php">Home</a>
          <a href="./addbook.php">Add Books</a>
        </div>
            
    </div>
    <div class="search-container">
  <form action="search.php" method="GET">
    <input type="text" name="query" placeholder="Search by author or title..." class="search-input"/>
    <button type="submit" value="Search" class="search-button" > <img class = "search-icon" src="./images/searchicon.svg" alt= "search"/></button>
  </form>
</div>

<?php if($result) :?>
        <?php foreach($result as $book) :?>
            <ul>
                <li>Title:<?= $book['title']?></li>
                <li>Author:<?= $book['author']?></li>
                </ul>
                <div> <?php echo '<a href="./view/bookdetails.php?isbn='.$book["isbn"].'"> <img class="img" src="data:image/jpeg;base64,'.base64_encode( $book["img"]) .'" /></a></br>'?>
                </div>

            
        <?php endforeach; ?>
        <?php else :?>
            <h3>No hay libro</h3>
    <?php endif; ?>


<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>



