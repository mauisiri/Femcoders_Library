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
<?php

include("connection.php");
$query = $_GET['query']; 
// gets value sent over search form

$min_length = 3;
// you can set minimum length of the query if you want

if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
    
    $query = htmlspecialchars($query); 
    // changes characters used in html to their equivalents, for example: < to &gt;
    
    //$query = mysqli_real_escape_string($query);
    // makes sure nobody uses SQL injection
    
    $raw_results = mysqli_query($conn, "SELECT * FROM books
        WHERE (`author` LIKE '%$query%') OR (`title` LIKE '%$query%')") or die(mysqli_error());
        
    // * means that it selects all fields, you can also write: `id`, `title`, `text`
    // articles is the name of our table
    
    // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
    // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
    // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
    
    if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
        
        while($results = mysqli_fetch_array($raw_results)){
        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
        
            echo "<p><h3>".$results['author']."</h3>".$results['title']."</p>".$results['isbn'].$results['description'];
            echo '<img src="data:image/jpeg;base64,'.base64_encode( $results['img']) .'" />';
            // posts results gotten from database(title and text) you can also show id ($results['id'])
        }
        
    }
    else{ // if there is no matching rows do following
        echo "No results";
    }
    
}
else{ // if query length is less than minimum
    echo "Insert at least ".$min_length ." characters";
}

?>
<script src="https://kit.fontawesome.com/27198e3231.js" crossorigin="anonymous"></script>
</body>
</html>