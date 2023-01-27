<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/styles.css">
    <title>FemCoders Library</title>
</head>
<body>
    <form action="form.php" method="post" enctype="multipart/form-data"><br>

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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "femcoders_library";


// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";


      
$author = $_POST['author'];
$title = $_POST['title'];
$isbn = $_POST['isbn'];
$description = $_POST['description'];
$bookcover = $_FILES['bookcover']['tmp_name'];
echo $author;


$sql = "INSERT INTO books (author, title, isbn, description, img )VALUES('$author', '$title', '$isbn', '$description', '$bookcover')";
if (mysqli_query($conn, $sql)) {
    echo 'new record created succesfully';
}  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
mysqli_close($conn);



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
?>
</body>
</html>