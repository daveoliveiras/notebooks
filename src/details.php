<?php
    include "connection.php";
    $conn = new Connection();
    $notebook = $conn->getNotebook($_GET['id']);
    $json = json_encode($notebook)
?>

<!doctype html>
<html>
    <head>

    </head>
    <body>
        <table>
            <tr>
                <td>ID: </td>
                <td><?= $notebook["key"] ?></td>
            </tr>
            <tr>
                <td>Marca: </td>
                <td><?= $notebook["key"] ?></td>
            </tr>
        </table>
    </body>
    <script>
        console.log(<?= $json ?>)
    </script>
</html>