<?php
    include "connection.php";
    $conn = new Connection();

    $conn->deleteNotebook($_GET["id"]);
    header("location: index")
?>