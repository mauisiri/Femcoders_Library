<?php

include("connection.php");


$isbn=$_GET['isbn'];

$sql="DELETE FROM books  WHERE isbn='$isbn'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: main.php");
       // echo '<script>alert("Book has been deleted successfully")</script>';
       
    }
?>