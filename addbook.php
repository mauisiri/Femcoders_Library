<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8888/Femcoders_Library/styles/form.css">
    <!-- para xamp es http:localhost/nombre de la pagina/ruta de los estilos... ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FemCoders Library</title>
</head>
<body>
<div class="logo">
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
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            </a>
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
           <input type="text" name="description" required/><br><br>

           <label for ="bookcover">Book cover:</label><br>
           <input type="file" key="bookcover" name="bookcover" id="bookcover" value="30000" /><br><br> 
           
           <input type= "submit" id ="submit" name="submit" value="Submit" />
        </form>

<?php

if ($_POST)
{
include("connection.php");

$author = $_POST['author'];
$title = $_POST['title'];
$isbn = $_POST['isbn'];
$description = $_POST['description'];
$bookcover = file_get_contents($_FILES['bookcover']['tmp_name']);

$sql = "INSERT INTO books (author, title, isbn, description, img) VALUES (?,?,?,?,?)";

$stmt= $conn->prepare($sql);

$stmt->bind_param("sssss", $author, $title, $isbn, $description, $bookcover);

if ($stmt->execute()) {
    echo "New record created successfully";
   } else {
    echo "Unable to create record";
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


/* $sql = "INSERT INTO books (author, title, isbn, description, img )VALUES('$author', '$title', '$isbn', '$description', '$bookcover')";
if (mysqli_query($conn, $sql)) {
    echo 'new record created succesfully';
}  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
mysqli_close($conn); */



//    if(isset($_POST['submit'])) 
//    {
//       echo("Author: " . $_POST['author'] . "<br />");
//       echo("Title: " . $_POST['title'] . "<br />");
//       echo ("ISBN: " . $_POST['isbn'] . "<br />");
//       echo ("Description: " . $_POST['description'] . "<br />");
   
//    }

//     $directorio = 'images/';

//     $bookcover = $directorio . basename($_FILES['bookcover']['name']);
//     move_uploaded_file($_FILES['bookcover']['tmp_name'], $bookcover);

//     echo '<br/>';
//     foreach ($_FILES as $arrayImagen) {
//         print_r($arrayImagen);
//         echo '<br/>';
//     }

$stmt->close();
$conn->close();
}
?>
<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>