<?php
    include "connection.php";
    if(!isset($_GET["id"]))
        header("location: index");
            
    $conn = new Connection();
    $notebook = $conn->getNotebook($_GET["id"]);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <input type="text" value="<?= $notebook["marca"] ?>">
    </body>
</html>