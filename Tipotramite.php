<?php 
include 'Funciones/Funciones.php';
$alert = '';
if(empty($_SESSION['active'])){
	header('location: login.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
    <title>Poda de arboles</title>
</head>
<body>
    <header class="encabezado">
        <div class="contenedor">
            <div class="barra">
                <div>
                    <a href="principal.html"><img src="img/Logo.png" alt="Logo"></a>
                </div>
                <div>
                    <h1>Trámite para la poda o derribo de un árbol</h1>
                </div>
                <div class="log">
                    <a href="login.php">Iniciar sesión para realizar seguimiento</a>
                </div>
            </div>
        </div>
    </header>
    
    <main class="principal sombra">
        <h2>Solicitudes</h2>
        <div class="solicitudes">
            <section class="pub">
                <h2>Para Servicio público</h2>
                <p>Para atender aquellos casos donde afecte al tránsito
                    peatonal, automovilístico, o se presenta riesgo público
                    alguno a causa de árboles, alta hierba, etc.
                </p>
                <h3 class="type">Procedimiento:</h3>
                    <ol>
                        <li>Se debe llenar adecuadamente el formulario del sistema.</li>
                        <li>Deberá anexar los documentos solicitados a continuación 
                            en formato PDF.</li>
                        <li>Se requerirán fotografías, por lo que se solicita sean agregadas
                            en formato JPG o PNG.
                        </li>
                        <li>Se realizará una confirmación por email, teléfono o inclusive
                            podrá realizar un seguimiento de su trámite al iniciar sesión.
                        </li>
                      </ol>
                      <h2 class="type">Documentos que se solicitarán</h2>
                        <ul>
                            <li>Documento de identificación (Cartilla de servicio militar
                                Pasaporte, Credencial para votar o Cédula Profesional)</li>
                        </ul> 
                        <div class="bot">
                            <a class="boton" href="SolicitudPub.html">Realizar Trámite</a>  
                        </div>  
            </section>
            <section class="pub">
                <h2>Para Servicio privado</h2>
                <p>Para casos donde se requiere retirar algún árbol o realizar
                    poda debido a construcción, riesgo dentro de una propiedad privada.
                </p>
                <h3 class="type">Procedimiento:</h3>
                    <ol>
                        <li>Se debe llenar adecuadamente el formulario del sistema.</li>
                        <li>Deberá anexar los documentos solicitados a continuaciónen formato PDF.</li>
                        <li>Se requerirán fotografías, por lo que se solicita sean agregadas en formato JPG o PNG.</li>
                        <li>Se realizará una confirmación por email, teléfono o inclusive
                            podrá realizar un seguimiento de su trámite al iniciar sesión.
                        </li>
                    </ol>
                    <h2 class="type">Documentos que se solicitarán</h2>
                        <ul>
                            <li>Documento de identificación (Cartilla de servicio militar
                                Pasaporte, Credencial para votar o Cédula Profesional)</li>
                        </ul>   
                        <h2 class="type">Documento de acreditación de personalidad jurídica:</h2>
                        <ul>
                            <li>Personas Físicas: Carta poder firmada ante dos testigos con ratificación
                                de las firmas ante Notario Público.
                                <ul>
                                    <li type="circle"> Carta Poder firmada ante dos testigos e
                                        identificación oficial del interesado y de quien realiza el trámite.</li>
                                        <li type="circle">
                                            Poder Notarial e identificación oficial del representante o apoderado
                                        </li>
                                </ul>
                            </li> 
                            <li>Persona Moral: Acta constitutiva, Poder Notarial e Identificacion 
                                oficial del representante o apoderado.
                            </li>  
                            <li>
                                Comprobante de Domicilio (Recibo de luz, agua, servicio telefónico
                                o Boleta de impuesto Predia)
                            </li>
                        </ul>

                        <p class="nota">Nota : Este trámite tiene un costo de $350, y se requerirá comprobante 
                            de pago una vez sea procedente su solicitud.
                        </p>
                        
                        <div class="bot">
                            <a class="boton" href="SolicitudPriv.html">Realizar Trámite</a>  
                        </div>  
            </section>
        </div>
    </main>

</body>
</html>