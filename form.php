<?php
   if(isset($_POST['submit'])) 
   {
      echo("Author: " . $_POST['author'] . "<br />");
      echo("Title: " . $_POST['title'] . "<br />");
      echo ("ISBN: " . $_POST['isbn'] . "<br />");
      echo ("Description: " . $_POST['description'] . "<br />");
   
   }

    $directorio = 'images/';

    $bookcover = $directorio . basename($_FILES['bookcover']['name']);
    move_uploaded_file($_FILES['bookcover']['tmp_name'], $bookcover);

    echo '<br/>';
    foreach ($_FILES as $arrayImagen) {
        print_r($arrayImagen);
        echo '<br/>';
    }
?>