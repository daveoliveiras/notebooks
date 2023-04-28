<!doctype html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>
        <link rel="stylesheet" href="styles/style.css"/>
        <link rel="icon" type="image/png" href="content/notebook.png"/>
        <title>Notebooks</title>
    </head>
    <body>
        <script src="scripts/script.js"></script>
        <input type="button" value="Novo" onclick="openForm()"/>

        <!--Tabela com os notebooks-->
        <?php 
            try
            {
                include "notebook-table.php";
            }
            catch(Exception $e){
                echo($e->getMessage());
            }
        ?>

    </body>
</html>