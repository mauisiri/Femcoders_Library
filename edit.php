<?php

include("conection.php");

$isbn=$_POST['isbn'];
$author=$_POST['author'];
$title=$_POST['title'];
$description = $_POST['description'];
$bookcover = file_get_contents($_FILES['bookcover']['tmp_name']);

$sql="UPDATE books SET  title='$title', author='$author',description='$description', img='$bookcover' WHERE isbn='$isbn'";
$query=mysqli_query($conn,$sql);

    // if($query){
    //     Header("Location: alumno.php");
    // }
?>