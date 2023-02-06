<?php 
    include("connection.php");

$isbn=$_GET['isbn'];

$sql="SELECT * FROM books WHERE isbn='$isbn'";
$query=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($query);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/form.css">
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
    <form action="edit.php" method="post" enctype="multipart/form-data"><br>
        <label for="author">Author:</label>
        <input type="text" name="author" value= "<?php echo $row['author']?>" required/> <br><br>
           
        <label for="title">Title:</label>
        <input type="text" name="title" value= "<?php echo $row['title']?>"required/> <br><br>
           
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" value= "<?php echo $row['isbn']?>"required/> <br><br>
           
        <label for="description">Description:</label>
        <textarea name="description" rows="10" cols="25" required> <?php echo $row['description']?></textarea>
        <div class="file">
            <label for ="bookcover">Book cover:</label><br>
            <input type="file" key="bookcover" name="bookcover" id="bookcover"/> <br><br>
        </div> 
        
        <input class="button" type= "submit" id ="submit" name="submit" value="EDIT" />
    </form>
    <script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>
