<?php
    include "connection.php";

    $arrayProcessador = [
        "modelo" => $_POST["processadorModelo"],
        "marca" => $_POST["processadorMarca"],
        "clock" => $_POST["clock"]
    ];
    
    $arrayNotebook = [
        "key" => $_POST["key"],
        "marca" => $_POST["marca"],
        "modelo" => $_POST["modelo"],
        "sistema" => $_POST["sistema"],
        "processador" => $arrayProcessador,
        "ram" => $_POST["ram"],
        "hd" => $_POST["hd"]
    ];

    $conn = new Connection();
    $conn->insertNotebook($arrayNotebook, $_POST["key"]);

    header("location: index.php");
?>