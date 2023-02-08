<?php

include("Database.php");

$isbn=$_POST['isbn'];
$author=$_POST['author'];
$title=$_POST['title'];
$description = $_POST['description'];

if(!empty($_FILES['bookcover']['tmp_name'])) {
    $bookcover = addslashes(file_get_contents($_FILES['bookcover']['tmp_name']));
    $sql="UPDATE books SET title='$title', author='$author',description='$description', img='$bookcover'WHERE isbn='$isbn'";
} else {
    $sql="UPDATE books SET title='$title', author='$author',description='$description' WHERE isbn='$isbn'";
}




$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: bookdetails.php?isbn=$isbn");
    }
?>