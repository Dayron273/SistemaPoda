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
    <link rel="preload" href="css/solicitud.css" as="style">
    <link rel="stylesheet" href="css/solicitud.css">
    <title>Solicitud-Privado</title>
    
</head>
<body>
    <header class="encabezado">
        <div class="contenedor">
            <div class="barra">
                <div>
                    <a href="principal.html"><img src="img/Logo.png" alt="Logo"></a>
                </div>
                <div>
                    <h1>Solicitud servicio Privado</h1>
                </div>
                <div class="log">
                    <a href="login.php">Mi cuenta</a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="contenedor">
            <p class="tipo"><span>Tipo de tramite: </span>Autorizacion para la poda, derribo
                o trasplante de árboles en propiedad pública
            </p>
            <div class="fecha">
                <script type="text/JavaScript"> 
                    var f = new Date(); 
                    document.write("Fecha:"+" "+f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); 
                    </script>
            </div>
        </div>
    <form class="formulario" id="formularioa">
       <fieldset>
            <legend class="tipo dat">Datos del Trámite</legend>
            <div class="contenedor-campos">
                <p class=moral>
                    Datos de persona moral (solo si es el caso)
                </p>
                <div class="campo">
                    <label>Denominación o razón social</label>
                    <input type="text" name="razon_social">
                </div>
                <div class="campo">
                    <label>Alcaldía donde se desea realizar</label>
                    <select name="alcaldia" required>
                        <option class="alcaldia">ALCALDIA LA MAGDANELA</option>
                        <option class="alcaldia">Alcaldía Gustavo a Madero</option>
                        <option class="alcaldia">Alcaldía Venustiano Carranza</option>
                        <option class="alcaldia">Alcaldía Iztacalco</option>
                        <option class="alcaldia">Alcaldia Cuajimalpa de Morelos</option>
                        <option class="alcaldia">Alcaldia Iztapalapa</option>
                        <option class="alcaldia">Alcaldia Coyoacan</option>
                        <option class="alcaldia">alcaldia tlalpan</option>
                        <option class="alcaldia">Alcaldía tlahuac</option>
                        <option class="alcaldia">Alcaldía milpa alta</option>
                        <option class="alcaldia">Alcaldía miguel hidalgo </option>
                        <option class="alcaldia">Alcaldia benito juarez</option>
                        <option class="alcaldia">Alcaldia alvaro obregon</option>
                        <option class="alcaldia">Alcaldia cuauhtemoc </option>
                        <option class="alcaldia">Alcaldia azcapotzalco </option>
                    </select>
                </div>
                <div class="subcontenedor">
                    <div class="campo">
                        <label>Calle:</label><input type="text" name="calle" required>
                    </div>
                    <div class="campo">
                        <label>Número ext/int:</label><input type="text" name="numcalle" required>
                    </div>
                </div>
                <div class="subcontenedor">
                    <div class="campo">
                        <label>Colonia:</label><input type="text" name="colonia" required>
                    </div>
                    <div class="campo">
                        <label>Código Postal:</label><input type="text" name="postal" required>
                    </div>
                </div>
                <div class="campo">
                    <p>Descripción de la causa por la que se solicita</p>
                    <textarea name="razon" required></textarea>
                </div>
                <div class="campo">
                    <p>En este apartado se súbiran los documentos solicitados en formato PDF con un tamaño máximo de 10Mb c/u </p>
                    <p>Documento de identificación con firma visible (INE, Cédula profesional, Pasaporte o Cartilla del SMN)</p>    
                </div>
                <div class="campo">
                    <input type="text"> <input type="file" name="credencial" accept=".pdf" required>
                </p>
                </div>
                <div class="campo">
                    <p>Documento de acreditación de personalidad jurídica</p>
                <input type="text"> <input type="file" name="acreditacion" accept=".pdf" required>
                </div>
                <div class="campo">
                    <p>Comprobante de domicilio</p>
                <input type="text"> <input type="file" name="domicilio" accept=".pdf" required>
                </div>
                <div class="campo">
                    <p>A continuación se requieren fotografías para llevar acabo la solicitud,
                        deben presentarse en formato JPEG o PNG con un tamaño máximo de 10MB c/u
                    </p>
                </div>
                <div class="campo">
                    <p>Fotografía del entorno</p>
                <input type="text"> <input type="file" name="entorno" accept=".png, .jpg" required>
                </div>
                <div class="campo">
                    <p>Fotografía de una hoja</p>
                    <input type="text"> <input type="file" name="hoja" accept=".png, .jpg" required>
                </div>
                <div class="campo">
                    <p>Fotografía del tronco</p>
                    <input type="text"> <input type="file" name="tronco" accept=".png, .jpg" required>
                </div>
                <div class="campo">
                    <p>Fotografía de fauna del árbol (si es que se presenta)</p>
                    <input type="text"> <input type="file" name="fauna" accept=".png, .jpg" >
                </div>
            </div>
            <div class="boton-dir">
                <input class="boton" type="submit" value="Mandar Solicitud"> 
            </div>
        </fieldset>
    </form>
    </main>
    <script src="js/validarSolicitudPriv.js"></script>
</body>
</html>