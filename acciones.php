<?php

/*LEO ARCHIVO TEMPORAL*/
$contador = 0;
$archivo = fopen("alamcentemp.txt", "r");

while (!feof($archivo)){

    if ($linea= fscanf($archivo, "%s\t%d\n" ,$dato, $num)){
        $almacen[$contador] = $dato;
    }
    $contador++;
}


/*PLASMO REGISTRO*/

if (isset($_REQUEST['reservar'])){

    $contenido = "Nº Reserva: ".uniqid()."\n";

    $contenido .= "\n----------------------------------------------------\n";
    $contenido .= "Datos Personales\n";
    $contenido .= "Nombre: ".$almacen[1]."\n";
    $contenido .= "DNI: ".$almacen[2]."\n";
    $contenido .= "Telefono: ".$almacen[3]."\n";
    $contenido .= "Email: ".$almacen[4]."\n";

    $contenido .= "\n----------------------------------------------------\n";
    $contenido .= "Datos Bancarios\n";
    $contenido .= "Numero tarjeta: ".$almacen[5]."\n";
    $contenido .= "Fecha Caducidad: ".$almacen[6]."\n";
    $contenido .= "Titular de la tarjeta: ".$almacen[7]."\n";
    $contenido .= "Emisor de la tarjeta: ".$almacen[8]."\n";
    $contenido .= "CVV: ".$almacen[9]."\n";

    $contenido .= "\n----------------------------------------------------\n";
    $contenido .= "Datos Habitacion\n";
    $contenido .= "Tipo de habitacion: ".$almacen[10]."\n";
    $contenido .= "Ciudades: ".$almacen[11]."\n";
    $contenido .= "Codigo de descuento: ".$almacen[12]."\n";
    $contenido .= "InicioAlojamiento: ".$almacen[13]."\n";
    $contenido .= "FinAlojamiento: ".$almacen[14]."\n";
    $contenido .= "Precio: ".$almacen[15]."\n";


    /*Crear Archivo*/




        $archivo = fopen("ticket.txt", 'w+');

        fwrite($archivo, $contenido);
        fclose($archivo);



    unlink('alamcentemp.txt');

    header("location:respuesta.html");

}


if (isset($_REQUEST['atras'])){

    header("location:formularioReservaConDatosTemp.php");

}




