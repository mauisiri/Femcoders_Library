<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/search.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>FemCoders Library</title>
</head>
<body>

<?php

include("connection.php");
$query = $_GET['query']; 

$min_length = 3;

if(strlen($query) >= $min_length){ 
    
    $query = htmlspecialchars($query); 
   
    $raw_results = mysqli_query($conn, "SELECT * FROM books
        WHERE (`author` LIKE '%$query%') OR (`title` LIKE '%$query%')") or die(mysqli_error());
        
    if(mysqli_num_rows($raw_results) > 0){ 
        
        while($results = mysqli_fetch_array($raw_results)){
        
            echo "<p><h3>".$results['author']."</h3>".$results['title']."</p>".$results['isbn'].$results['description'];
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['img']) .'" />';
        }
        
    }
    else{ 
        echo "No results";
    }
    
}
else{ 
    echo "Insert at least ".$min_length ." characters";
}

?>
<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>