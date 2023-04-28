<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css"/>
        <link rel="icon" type="image/png" href="content/notebook.png"/>
        <title>Notebooks</title>
    </head>
    <body>
        <form method="post" action="insert.php">
            <input type="text" id="marca" name="marca" placeholder="Marca"/><br/>
            <input type="text" id="modelo" placeholder="Modelo"/><br/>
            <input type="text" id="ram" name="ram" placeholder="RAM"/><br/>
            <input type="text" id="sistema" name="sistema" placeholder="Sistema operacional"/><br/><br/>

            <input type="text" id="processadorModelo" placeholder="Modelo do processador"/><br/>
            <input type="text" id="processadorMarca" placeholder="Marca do processador"/><br/>
            <input type="text" id="clock" placeholder="Clock do processador"/><br/><br/>

            
            <input type="submit" id="send" value="Enviar">
        </form>
    </body>
</html>