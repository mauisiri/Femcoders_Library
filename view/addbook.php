
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
        <a href="/Femcoders_Library/">Home</a>
        <a href="./view/addbook.php">Add Books</a>
        </div>
        
</div>
    
    <form action="store.php" method="post" enctype="multipart/form-data"><br>
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

<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>