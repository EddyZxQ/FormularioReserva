<?php

/*OBTENER PRECIO*/

if (isset($_REQUEST['obtenerPrecio']) || isset($_REQUEST['Guardar'])){


    /*ArchivoTemporalGuardaDatos*/
    $contenido = uniqid()."\n";
    $contenido .= $_POST['id_nombre']."\n";
    $contenido .= $_POST['id_apellidos']."\n";
    $contenido .= $_POST['id_dni']."\n";
    $contenido .= $_POST['id_telefono']."\n";
    $contenido .= $_POST['id_email']."\n";
    $contenido .= $_POST['id_tarjetaNumero']."\n";
    $contenido .= $_POST['id_fechadecaducidad']."\n";
    $contenido .= $_POST['id_tarjetaTitular']."\n";

    if (isset($_POST['tarjetas'])){
        if ($_POST['tarjetas'] == 'paypal'){
            $contenido .= $_POST['tarjetas']."\n";
        } else if ($_POST['tarjetas'] == 'mastercard'){
            $contenido .= $_POST['tarjetas']."\n";
        } else if ($_POST['tarjetas'] == 'visa'){
            $contenido .= $_POST['tarjetas']."\n";
        }
    }

    $contenido .=$_POST['id_tarjetaCVV']."\n";


    if (isset($_POST['habitaciones'])){
        if ($_POST['habitaciones']=='Basica'){
            $contenido .= $_POST['habitaciones']."\n";
        }else if ($_POST['habitaciones']=='Estandar'){
            $contenido .= $_POST['habitaciones']."\n";
        }else if ($_POST['habitaciones']=='Suite'){
            $contenido .= $_POST['habitaciones']."\n";
        }else if ($_POST['habitaciones']=='Deluxe'){
            $contenido .= $_POST['habitaciones']."\n";
        }
    }

    if (isset($_POST['ciudades'])) {
        if ($_POST['ciudades']=='Valencia') {
            $contenido .= $_POST['ciudades'] . "\n";
        } else if ($_POST['ciudades']=='Barcelona') {
            $contenido .= $_POST['ciudades'] . "\n";
        } else if ($_POST['ciudades']=='Madrid') {
            $contenido .=  $_POST['ciudades'] . "\n";
        }
    }

    $contenido .= $_POST['id_descuento']."\n";
    $contenido .= $_POST['empiezaAlojamiento']."\n";
    $contenido .= $_POST['terminaAlojamiento']."\n";



    /*Sitio y tipo habitacion*/


    $preciotipoBasica = array("Valencia" => 65 ,"Barcelona" => 70,"Madrid" =>80);
    $preciotipoEstandar = array("Valencia" => 100,"Barcelona"=>135,"Madrid" =>140);
    $preciotipoSuite = array("Valencia" =>220 ,"Barcelona"=>210,"Madrid"=>240);
    $preciotipoDeluxe = array("Valencia"=>350,"Barcelona"=>400,"Madrid"=>440);


    if (isset($_POST['habitaciones'])){
        if ($_POST['habitaciones']=='Basica'){

                if ($_POST['ciudades']=='Valencia') {
                    $precio = $preciotipoBasica[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Barcelona') {
                    $precio = $preciotipoBasica[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Madrid') {
                    $precio = $preciotipoBasica[$_POST['ciudades']];
                }
        }else if ($_POST['habitaciones']=='Estandar'){

                if ($_POST['ciudades']=='Valencia') {
                    $precio = $preciotipoEstandar[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Barcelona') {
                    $precio = $preciotipoEstandar[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Madrid') {
                    $precio = $preciotipoEstandar[$_POST['ciudades']];
                }
        }else if ($_POST['habitaciones']=='Suite'){

                if ($_POST['ciudades']=='Valencia') {
                    $precio = $preciotipoSuite[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Barcelona') {
                    $precio = $preciotipoSuite[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Madrid') {
                    $precio = $preciotipoSuite[$_POST['ciudades']];
                }
        }else if ($_POST['habitaciones']=='Deluxe'){

                if ($_POST['ciudades']=='Valencia') {
                    $precio = $preciotipoDeluxe[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Barcelona') {
                    $precio = $preciotipoDeluxe[$_POST['ciudades']];
                } else if ($_POST['ciudades']=='Madrid') {
                    $precio = $preciotipoDeluxe[$_POST['ciudades']];
                }
        }
    }

    /*tiempo*/

    $fecha1 = strtotime($_POST['empiezaAlojamiento']);

    $fecha2 = strtotime($_POST['terminaAlojamiento']);

    $diasEnSegundos =$fecha2-$fecha1;

    $diasEnElHotel =(($diasEnSegundos/60)/60)/24;



    /*codigoDescuento*/

    /*Calcular Precio*/

    $codigo =$_POST['id_descuento'];


        if ($codigo == "9K7FGFA"){

            $precioFinal = ($precio*$diasEnElHotel)*0.75;

        }else if ($codigo == "5T7FGPA"){

            $precioFinal = ($precio*$diasEnElHotel)*0.85;

        }else if ($codigo == "4S7FGMA"){

            $precioFinal = ($precio*$diasEnElHotel)*0.70;

        }else if ($codigo == "8P7FGIN"){

            $precioFinal = ($precio*$diasEnElHotel)*0.90;

        }else{

            $precioFinal =$precio*$diasEnElHotel;
        }

    $contenido .=$precioFinal."\n";

    $archivo  = fopen("alamcentemp.txt","w");
    fwrite($archivo, $contenido);
    fclose($archivo);


    header("location:paginaTramitado.php");

}


