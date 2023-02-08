<?php

        //Linux connection
        require_once("/opt/lampp/htdocs/Femcoders_Library/controller/BookController.php");

        //Mac connection
        //require_once("/Applications/MAMP/htdocs/Femcoders_Library/controller/BookController.php");

        //Windows connection
        //require_once("C:/xampp/htdocs/Femcoders_Library/controller/BookController.php");

$controller = new BookController();
$result = $controller->getAbook($_GET['isbn']);
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
        <a href="../index.php">Home</a>
        <a href="./addbook.php">Add Books</a>
</div>
    </div>
<?= $result['title']?>
<?= $result['author']?>
<?= $result['isbn']?>
<?= $result['description']?>
<?= '<img src="data:image/jpeg;base64,'.base64_encode( $result['img']) .'" />'?>

<div class="delete">
    <a href="updatebook.php?isbn=<?php echo $result['isbn'] ?> ">
        <img class = "icon" src="../images/pen-to-square-solid.svg" alt= "edit"/>
    </a>

    <a href="delete.php?isbn=<?php echo $result['isbn'] ?> ">
    <img class = "icon" src="../images/trash-can-solid.svg" alt= "delete"/></a>
</div>
    <script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>