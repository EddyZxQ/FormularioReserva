
<?php
$fechaInicioAlojamiento = date("Y-m-d");
$fechaFinalAlojamiento = date("Y-m-d");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/estilosFormulario.css">
    <link rel="shortcut icon" href="images/iconox.png"  type="image/png">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="Hotel, hotel economico, hoteles baratos, hotelsoler, el mejor hotel, hoteles, hoteles españa, hotel en valencia, hotel en madrid">
    <meta name="copyright" content="Edgar Lopez, Nerea Soler, Ximo Soler">
    <meta name="author" content="Edgar Lopez, Nerea Soler, Ximo Soler">
    <meta name="" content="">

    <title>Formulario de reserva</title>
</head>
<body>
    <section>

        <div id="formularioHabitacion">

            <h1>Formulario Reserva</h1>

            <form method="post" action="sacarPrecio.php" id="formulario">


                <h2>Datos Personales</h2>

                <div  class="agrupador">
                    <div class="contenedor-campos-agrupador">

                    <label class="etiqueta-label" for="id_nombre">Nombre:   </label>
                    <input class="campo-input" type="text" id="id_nombre" name="id_nombre" maxlength="50" pattern="[A-Za-z]{2,30}" title="Introduce entre 2 y 30 letras" required>
                    </div>

                    <div class="contenedor-campos-agrupador">

                    <label class="etiqueta-label" for="id_apellidos">Apellido:  </label>
                    <input class="campo-input" type="text" id="id_apellidos" name="id_apellidos" maxlength="80" pattern="[A-Za-z]{2,30}" title="Introduce entre 2 y 3   0 letras" required>
                    </div>

                </div>


                <div  class="agrupador">
                    <div class="contenedor-campos-agrupador">

                    <label class="etiqueta-label" for="id_dni">DNI:  </label>
                    <input class="campo-input" type="text" id="id_dni" name="id_dni" maxlength="9" pattern="[0-9]{8}[A-Z]{1}" title="Introduce un dato del tipo 111-111-111-L" required>
                    </div>

                    <div class="contenedor-campos-agrupador">

                    <label class="etiqueta-label" for="id_telefono">Telefono:  </label>
                    <input class="campo-input" type="tel" id="id_telefono" name="id_telefono"
                           pattern="[0-9]{3}[0-9]{3}[0-9]{3}"
                           required>
                    </div>
                </div>

                <div class="contenedor-campos">
                <label class="etiqueta-label" for="id_email">Email:  </label>
                <input class="campo-input" type="email" id="id_email" name="id_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" >
                </div>


                <h2>Datos Bancarios</h2>
                <div  class="agrupador">
                    <div class="contenedor-campos-agrupador">

                    <label class="etiqueta-label" for="id_tarjetaNumero">Numero de la Tarjeta:  </label>
                    <input class="campo-input" type="text" id="id_tarjetaNumero" name="id_tarjetaNumero" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="[0-9]{16}" required>
                    </div>

                    <div class="contenedor-campos-agrupador">
                    <label class="etiqueta-label" for="id_fechadecaducidad">Fecha de caducidad:  </label>
                    <input class="campo-input" type="text" id="id_fechadecaducidad" name="id_fechadecaducidad" placeholder="MM/AA" pattern="[0-9]{4}" title="Introduce un dato del tipo XX/XX" required>
                    </div>
                </div>
                <div  class="agrupador">

                    <div class="contenedor-campos-c">
                    <label class="etiqueta-label">Emisor de la Tarjeta:  </label>

                    <div class="campo-radio">
                    <input type="radio" name="tarjetas" id="id_mastercard" value="mastercard"/><label for="id_mastercard" class="radiolabel">MASTERCARD</label>
                    </div>

                    <div class="campo-radio">
                    <input type="radio" name="tarjetas" id="id_visa" value="visa"/><label for="id_visa" class="radiolabel">VISA</label>
                    </div>

                    <div class="campo-radio">
                    <input type="radio" name="tarjetas" id="id_paypal" value="paypal"/><label for="id_paypal" class="radiolabel">PAYPAL</label>
                    </div>
                    </div>

                    <div class="agrupador-columna">
                        <div class="contenedor-campos-b">
                            <label class="etiqueta-label" for="id_tarjetaTitular">Titular de la Tarjeta:  </label>
                            <input class="campo-input" type="text" id="id_tarjetaTitular" name="id_tarjetaTitular" placeholder="NOMBRE APELLIDO1 APELLIDO2" pattern="[A-Za-z]{2,60}" required>
                        </div>

                        <div class="contenedor-campos-b">
                        <label class="etiqueta-label" for="id_tarjetaCVV">CVV:  </label>
                        <input class="campo-input" type="password" id="id_tarjetaCVV" name="id_tarjetaCVV" placeholder="XXX" pattern="[0-9]{3}" required>
                        </div>

                    </div>
                </div>
                <h2>Datos Habitacion</h2>

               <div class="contenedor-campos">
                <label class="etiqueta-label" for="id_habitacion">Tipo de habitacion: </label>

                   <div class="campo-radio">
                       <input type="radio" name="habitaciones" id="id_Basica"  value="Basica"/><label for="id_Basica" class="radiolabel">Basica</label>
                       <input type="radio"  name="habitaciones" id="id_Estandar" value="Estandar"><label for="id_Estandar" class="radiolabel">Estandar</label>
                       <input type="radio"  name="habitaciones" id="id_Suite" value="Suite"><label for="id_Suite" class="radiolabel">Suite</label>
                       <input type="radio"  name="habitaciones" id="id_Deluxe" value="Deluxe"><label for="id_Deluxe" class="radiolabel">Deluxe</label>
                   </div>


                </div>

                <div class="contenedor-campos">
                    <label class="etiqueta-label" for="id_ciudad">Ciudades: </label>

                    <div class="campo-radio">
                        <input type="radio" name="ciudades" id="id_Valencia"  value="Valencia"/><label for="id_Valencia" class="radiolabel">Valencia</label>
                    </div>

                    <div class="campo-radio">
                        <input type="radio"  name="ciudades" id="id_Barcelona" value="Barcelona"><label for="id_Barcelona" class="radiolabel">Barcelona</label>
                    </div>

                    <div class="campo-radio">
                        <input type="radio"  name="ciudades" id="id_Madrid" value="Madrid"><label for="id_Madrid" class="radiolabel">Madrid</label>
                    </div>

                </div>

               <div class="contenedor-campos">
               <label class="etiqueta-label" for="id_descuento">Codigo de descuento:  </label>
               <input class="campo-input" type="text" id="id_descuento" pattern="[A-Za-z0-9]{7}" name="id_descuento">
               </div>


                <div class="contenedor-campos">
                    <label for="id_fechainicio">Inicio Alojamiento:</label>

                    <input type="date" id="id_fechainicio" name="empiezaAlojamiento"
                           value="<?php echo $fechaInicioAlojamiento ?>"
                           min="<?php echo $fechaInicioAlojamiento ?>">
                </div>

                <div class="contenedor-campos">
                    <label for="id_fechafinal">Final Alojamiento:</label>

                    <input type="date" id="id_fechafinal" name="terminaAlojamiento"
                           value="<?php echo $fechaFinalAlojamiento ?>"
                           min="<?php echo $fechaFinalAlojamiento ?>">
                </div>

                <div id="contenedor-precio">

                    <input type="submit" id="obtenerPrecio" name="obtenerPrecio" value="Obtener Precio">

                </div>


            </form>
            

        </div>


        <script src="JS/redireccionarFormulario.js"></script>
        <script src="JS/validarFormulario.js"></script>
    </section>

</body>
</html>