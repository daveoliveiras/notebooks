<?php
    include "notebook.php";
    include "connection.php";
    
    $arrayNotebook = [
        "marca" => $_POST["marca"],
        "sistema" => $_POST["sistema"],
        "ram" => $_POST["ram"]
    ];




    $conn = new Connection();
    $conn->insertNotebook($arrayNotebook);

    /*
    $notebook = $conn->createNotebook();
    $notebook1 = $conn->createNotebook("1");

    //$notebook->setModelo($_POST["modelo"]);
    
    echo $notebook->getMarca();
    echo $notebook1->getMarca();*/

    header("location: index.php");
?>