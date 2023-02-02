<?php

include("connection.php");

$isbn=$_POST['isbn'];
$author=$_POST['author'];
$title=$_POST['title'];
$description = $_POST['description'];
$bookcover = $_FILES['bookcover']['tmp_name'];
if(!empty($bookcover)) {
    move_uploaded_file($bookcover);
}

$sql="UPDATE books SET  title='$title', author='$author',description='$description' WHERE isbn='$isbn'";
$query=mysqli_query($conn,$sql);

    if($query){
        Header("Location: detailbook.php?isbn=$isbn");
    }
?>