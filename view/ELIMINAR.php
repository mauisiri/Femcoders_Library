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
        <?php foreach($result as $socia) :?>
            <ul>
                <li>id:<?= $socia['id']?></li>
                <li>nombre:<?= $socia['nombre']?></li>
            </ul>
        <?php endforeach; ?>
        <?php else :?>
            <h3>No hay miembros</h3>
    <?php endif; ?>

</body>
</html>