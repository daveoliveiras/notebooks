<?php
    include "vendor/autoload.php";
    include "notebook.php";
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $notebook = new Notebook();
    //$notebook->setModelo($_POST["modelo"]);
    $factory = (new Factory())
        ->withServiceAccount("firebase-key.json")//Passando a chave para acessar
        ->withDatabaseUri("https://controle-de-notebooks-default-rtdb.firebaseio.com/");

    $database = $factory->createDatabase();
    $notebook->setModelo($database->getReference("notebooks/0")->getSnapshot()->getValue()["modelo"]); 
    echo $notebook->getModelo();
?>