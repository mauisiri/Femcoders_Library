<?php

        //Linux connection
       // require_once("/opt/lampp/htdocs/Femcoders_Library/controller/BookController.php");

        //Mac connection
        //require_once("/Applications/MAMP/htdocs/Femcoders_Library/controller/BookController.php");

        //Windows connection
        require_once("C:/xampp/htdocs/Femcoders_Library/controller/BookController.php");

$controller = new BookController();
$result = $controller->getBooks();
//var_dump($result);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
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
    
    <form action="" method="post" enctype="multipart/form-data"><br>
        <label for="author">Author:</label>
        <input type="text" name="author" required/> <br><br>
           
        <label for="title">Title:</label>
        <input type="text" name="title" required/><br><br>
           
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" required/><br><br>
           
        <label for="description">Description:</label>
        <textarea name="description" rows="10" cols="25"></textarea>
        <div class="file">
            <label for ="bookcover">Book cover:</label><br>
            <input type="file" key="bookcover" name="bookcover" id="bookcover" value="30000" /><br><br>
        </div> 
        
        <input class="button" type= "submit" id ="submit" name="submit" value="SUBMIT" />
    </form>
   


<?php

if ($_POST)
{
// include("connection.php");

$author = $_POST['author'];
$title = $_POST['title'];
$isbn = $_POST['isbn'];
$description = $_POST['description'];
$bookcover = file_get_contents($_FILES['bookcover']['tmp_name']);

$sql = "INSERT INTO books (author, title, isbn, description, img) VALUES (?,?,?,?,?)";

// // $stmt= $conn->prepare($sql);

// $stmt->bind_param("sssss", $author, $title, $isbn, $description, $bookcover);

// if ($stmt->execute()) {
//     echo "New record created successfully";
//    } else {
//     echo "Unable to create record";
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// $stmt->close();
// $conn->close();
}
?>
<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>