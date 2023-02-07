<?php

require_once("/opt/lampp/htdocs/MVC-basic/controller/MemberController.php");

$controller = new MemberController();
$result = $controller->getMembers();
//var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Socias</title>
</head>
<body>
    <h2>Socias</h2>
    <?php if($result) :?>
        <?php foreach($result as $book) :?>
            <ul>
               <li>Title:<?= $book['title']?></li>
                <li>Author:<?= $book['author']?></li>
                </ul>
                <div> <?php echo '<a href="./bookdetails.php?isbn='.$book["isbn"].'"> <img class="img" src="data:image/jpeg;base64,'.base64_encode( $book["img"]) .'" /></a></br>'?>
                </div>

            
        <?php endforeach; ?>
        <?php else :?>
            <h3>No hay </h3>
    <?php endif; ?>

</body>
</html>