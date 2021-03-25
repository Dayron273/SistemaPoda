<?php
include_once 'conexion.php';

    $email = $_POST['correo'];
    $clave = $_POST['pass'];
    $tipoUsuario = 0;
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $genero = $_POST['genero'];
    $curp = $_POST['curp'];
    $fechaNac = $_POST['nacimiento'];
    $celular = $_POST['celular'];
    $telefono = $_POST['telefono'];
    $codigoPostal = $_POST['codigoPostal'];
    $alcaldia = $_POST['alcaldia'];
    $asentamiento = $_POST['asentamiento'];

    if($_POST['correo'] == $_POST['emailConf']){
        if($_POST['pass'] == $_POST['passConf']){
            $query = mysqli_query($conection,"INSERT INTO usuario (email, clave, tipoUsuario) VALUES ('$email','$clave','$tipoUsuario')");
            if($query == true){
                $query2 = mysqli_query($conection, "SELECT idUsuario FROM usuario WHERE email = '$email'");
                $resultados = mysqli_num_rows($query2);
                if($resultados > 0){
                    $deco = mysqli_fetch_array($query2);
                    $idUser = $deco['idUsuario'];
                    $query3 = mysqli_query($conection, "INSERT INTO tramitante (apellidoPaterno,apellidoMaterno,nombre,genero,fechaNac,codigoPostal,alcaldia,asentamiento,numeroTel,celular,email,idUsuario,CURP) VALUES('$paterno','$materno','$nombre','$genero','$fechaNac','$codigoPostal','$alcaldia','$asentamiento','$telefono','$celular','$email','$idUser','$curp')");
                    if($query3 == true){
                        echo json_encode("exito");
                    }else{
                        echo json_encode("Error");
                    }
                }else{
                    echo json_encode("Error");
                }
            }else{
                echo json_encode("errorRegistro1");
            }
        }else{
            echo json_encode("errorPass"); 
        }
    }else{
        echo json_encode("errorCorre");
    }
?>