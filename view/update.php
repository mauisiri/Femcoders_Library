<?php

        //Linux connection
        require_once("/opt/lampp/htdocs/Femcoders_Library/controller/BookController.php");

        //Mac connection
        //require_once("/Applications/MAMP/htdocs/Femcoders_Library/controller/BookController.php");

        //Windows connection
        //require_once("C:/xampp/htdocs/Femcoders_Library/controller/BookController.php");

$controller = new BookController();
$controller->updateBook(
    $isbn=$_POST['isbn'],
    $author=$_POST['author'],
    $title=$_POST['title'],
    $description = $_POST['description']
    );