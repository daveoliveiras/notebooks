<?php
    include "connection.php";

    $arrayProcessador = [
        "modelo" => $_POST["processadorModelo"],
        "marca" => $_POST["processadorMarca"],
        "clock" => $_POST["clock"]
    ];
    
    $arrayNotebook = [
        "id" => $_POST["id"],
        "marca" => $_POST["marca"],
        "modelo" => $_POST["modelo"],
        "sistema" => $_POST["sistema"],
        "processador" => $arrayProcessador,
        "ram" => $_POST["ram"],
        "hd" => $_POST["hd"]
    ];

    $conn = new Connection();
    $conn->insertNotebook($arrayNotebook);

    header("location: index.php");
?>