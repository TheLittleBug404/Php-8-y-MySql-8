<?php
//para iniciar una varible siempre colocar el simbolo de dolar $
//en php no es necesario definir el tipo de variable

    $nombre = "Ricardo Jauregui Lima";
    echo $nombre;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Documento</title>
    </head>
    <body>
        <!-- PODEMOS COLOCAR CODIGO PHP DENTRO DE HTML -->
        <h1><?php echo "Mostrando la variable nombre desde php: ".$nombre;?></h1>
        <h2>Nombre: <?php echo "Nombre desde php: $nombre"?></h2>
        <p>Notemos que si colocamos comillas simples la variable $nombre no nos va a reconocer.<br>
            <?php echo 'Ejemplo comillas simples: $nombre'?>
        </p>
    </body>
</html>