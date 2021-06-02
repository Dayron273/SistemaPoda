<?php 
include_once 'conexion.php';
session_start();

$alcaldia = $_POST['alcaldia'];
$calle = $_POST['calle'];
$numcalle = $_POST['numcalle'];
$postal = $_POST['postal'];
$razon = $_POST['razon'];
$nombreImgEntorno = $_FILES['entorno']['name'];
$tamañoImgEntorno = $_FILES['entorno']['size'];
$tipoImgEntorno = $_FILES['entorno']['type'];
$nombreImgHoja = $_FILES['hoja']['name'];
$tamañoImgHoja = $_FILES['hoja']['size'];
$tipoImgHoja = $_FILES['hoja']['type'];
$nombreImgTronco = $_FILES['tronco']['name'];
$tamañoImgTronco = $_FILES['tronco']['size'];
$tipoImgTronco = $_FILES['tronco']['type'];
$idTramitante = $_SESSION['idTramitante'];
$identificacionNombre = $_FILES['credencial']['name'];
$identificacionTipo = $_FILES['credencial']['type'];
$identificacionTamano = $_FILES['credencial']['size'];
$carpeta_destino = $_SERVER['DOCUMENT_ROOT']."/SistemaPoda/imgFotos/";
$carpeta_destinoArchivos = $_SERVER['DOCUMENT_ROOT']."/SistemaPoda/archivo/";
move_uploaded_file($_FILES['credencial']['tmp_name'],$carpeta_destinoArchivos.$identificacionNombre);
move_uploaded_file($_FILES['entorno']['tmp_name'],$carpeta_destino.$nombreImgEntorno);
move_uploaded_file($_FILES['hoja']['tmp_name'],$carpeta_destino.$nombreImgHoja);
move_uploaded_file($_FILES['tronco']['tmp_name'],$carpeta_destino.$nombreImgTronco);

if($identificacionTamano < 10000000){
    $query = mysqli_query($conection,"INSERT INTO tramite(idTramitante,tipoTramite,alcaldia,calle,numeroExt,codigoPostal,descripcion,nombreDocIdentificacion,nombreFotoEntorno,nombreFotoHoja,nombreFotoTronco,status) VALUES ('$idTramitante','publico','$alcaldia', '$calle', '$numcalle','$postal','$razon', '$identificacionNombre' ,'$nombreImgEntorno', '$nombreImgHoja', '$nombreImgTronco', 'Pendiente de revisión')");
    if($query == true){
        echo json_encode("Correcto");
    }else{
        echo json_encode("Error");
    }
}else{
    echo json_encode("Exceso");
}


?>