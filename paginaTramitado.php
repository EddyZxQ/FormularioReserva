<?php

$contador = 0;
$archivo = fopen("alamcentemp.txt", "r");

while (!feof($archivo)){

    if ($linea= fscanf($archivo, "%s\t%d\n" ,$dato, $num)){
        $almacen[$contador] = $dato;
    }
    $contador++;
}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/iconox.png"  type="image/png">

    <link rel="stylesheet" href="CSS/tramitadoestilos.css">
    <title>Tramitacion</title>
</head>
<body>
<section>
    <div id="contenedorTramite">

        <form action="acciones.php" method="post">

            <div id="panel">
                <div id="ticket">

                        <h1>Datos Introducidos</h1>
                    <?php
                        echo '<p><strong>Reserva:</strong> '.$almacen[0].'</p>';
                        echo '<p><strong>Nombre: </strong>'.$almacen[1].'</p>';
                        echo '<p><strong>Apellidos: </strong>'.$almacen[2].'</p>';
                        echo '<p><strong>DNI: </strong>'.$almacen[3].'</p>';
                        echo '<p><strong>Telefono: </strong>'.$almacen[4].'</p>';
                        echo '<p><strong>Email:</strong> '.$almacen[5].'</p>';
                        echo '<p><strong>Numero tarjeta: </strong> '.$almacen[6].'</p>';
                        echo '<p><strong>Fecha Caducidad: </strong>'.$almacen[7].'</p>';
                        echo '<p><strong>Titular de la tarjeta: </strong>'.$almacen[8].'</p>';
                        echo '<p><strong>Emisor de la tarjeta: </strong>'.$almacen[9].'</p>';
                        echo '<p><strong>CVV: </strong>'.$almacen[10].'</p>';
                        echo '<p><strong>Tipo de habitacion: </strong>'.$almacen[11].'</p>';
                        echo '<p><strong>Ciudades: </strong>'.$almacen[12].'</p>';
                        echo '<p><strong>Codigo de descuento: </strong>'.$almacen[13].'</p>';
                        echo '<p><strong>Fecha-Entrada: </strong>'.$almacen[14].'</p>';
                        echo '<p><strong>Fecha-Salida: </strong>'.$almacen[15].'</p>';
                        echo '<p><span id="precio"><strong>Precio: </strong>'.$almacen[16].' €</span></p>';

                    ?>

                </div>

                <div id="logo">
                    <img src="images/logo.png" alt="logo hotel soler">
                </div>
            </div>


            <div id="botones">
                <input  id="atras" name="atras" type="submit" value="Atras">
                <input id="reservar" type="submit" value="Reservar" name="reservar">
            </div>


        </form>

    </div>

</section>
</body>
</html>
