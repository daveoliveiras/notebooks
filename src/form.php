<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css"/>
        <link rel="icon" type="image/png" href="../content/peach.png"/>
        <title>Notebooks</title>
    </head>
    <body>
        <div id="form-new">
            <form method="post" action="insert.php" enctype="multipart/form-data">
                <input type="number" id="key" name="key" placeholder="ID" /><br/>
                    <input type="text" id="marca" name="marca" placeholder="Marca" autocomplete="off"/><br/>
                    <input type="text" id="modelo" name="modelo" placeholder="Modelo"/><br/>
                    <input type="text" id="sistema" name="sistema" placeholder="Sistema operacional"/><br/>
                <div id="div-processador">
                    <input type="text" id="processadorModelo" name="processadorModelo" placeholder="Modelo do processador"/><br/>
                    <input type="text" id="processadorMarca" name="processadorMarca" placeholder="Marca do processador"/><br/>
                    <input type="text" id="clock" name="clock" placeholder="Clock do processador"/><br/>
                </div>
                <input type="number" min="1" id="ram" name="ram" placeholder="RAM"/><br/>
                <input type="number" min="1" id="hd" name="hd" placeholder="HD"/><br/>
                <input type="file"/><br>                
                <input type="submit" id="send" value="Enviar">
            </form>
        </div>
    </body>
</html>