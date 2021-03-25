<?php 
session_start();

function obtenerDatos($id, $conection, $usuario){
    $query = mysqli_query($conection, "SELECT *FROM $usuario WHERE idUsuario = '$id'");
    $result = mysqli_num_rows($query);
    if($result > 0){
        $valores = mysqli_fetch_array($query);
        $_SESSION['idTramitante'] = $valores['idTramitante'];
        $_SESSION['nombre'] = $valores['nombre'];
        $_SESSION['apellidoPaterno'] = $valores['apellidoPaterno'];
        $_SESSION['apellidoMaterno'] = $valores['apellidoMaterno'];
    }else{
        echo "Error en la busqueda";
    }
}
function obtenerDatosServidor($id, $conection, $usuario){
    $query = mysqli_query($conection, "SELECT *FROM $usuario WHERE idUsuario = '$id'");
    $result = mysqli_num_rows($query);
    if($result > 0){
        $valores = mysqli_fetch_array($query);
        $_SESSION['idServidorPublico'] = $valores['idServidorPublico'];
        $_SESSION['nombre'] = $valores['nombre'];
        $_SESSION['apellidoPaterno'] = $valores['apellidoPaterno'];
        $_SESSION['apellidoMaterno'] = $valores['apellidoMaterno'];
    }else{
        echo "Error en la busqueda";
    }
}

function obtenerTramites($conection,$idTramitante){
    $query = mysqli_query($conection, "SELECT *FROM tramite WHERE idTramitante = '$idTramitante'");
    $result = mysqli_num_rows($query);
    if($result > 0){
        echo "<h2>Haz realizado $result tramites</h2>";
        while($row = mysqli_fetch_array($query)){
            if($row['tipoTramite'] = "publico"){
                $complemento = "Poda y derribo de árboles y ramas en vía pública";
            }else{
                $complemento = "Autorización para la poda, derribo o trasplante de árboles en propiedad privada";
            }

            if($row['status'] = "Pendiente de revisión"){
                $estatus = "<p style='color: orange;'><b>Estado de solicitud: </b>Pendiente de revisión</p>";
            }
            echo '<div class = "cuadro-tramite">';
            echo '<div class = "encabezado-cuadro">';
            echo "<div class = 'folio'><p><b>Folio:</b> ".$row['folio']."</p></div>";
            echo "<div class = 'fecha'><p><b>Fecha:</b> ".$row['fecha']."</p></div>";
            echo "</div>";
            echo "<p><b>Tipo tramite:</b> ".$complemento."</p>";
            echo '<div class = "informacion-cuadro">';
            echo "<div class = 'folio'> $estatus </div>";
            echo "<div class = 'fecha'><a class  = 'botonshido' href = ''>Visualizar Contenido</a></div>";
            echo "</div>";
            echo "</div>";
        }
    }else{
        echo "<h2>Aún no se han realizado tramites</h2>";
    }
}

function obtenerTramitesServidor($conection){
    $query = mysqli_query($conection, "SELECT *FROM tramite WHERE status='Pendiente de Revisión' ORDER BY fecha asc");
    $result = mysqli_num_rows($query);
    if($result > 0){
        echo "<h2>Existen $result tramites pendientes por revisar</h2>";
        while($row = mysqli_fetch_array($query)){
            if($row['tipoTramite'] = "publico"){
                $complemento = "Poda y derribo de árboles y ramas en vía pública";
            }else{
                $complemento = "Autorización para la poda, derribo o trasplante de árboles en propiedad privada";
            }

            if($row['status'] = "Pendiente de revisión"){
                $estatus = "<p style='color: orange;'><b>Estado de solicitud: </b>Pendiente de revisión</p>";
            }
            echo '<div class = "cuadro-tramite">';
            echo '<div class = "encabezado-cuadro">';
            echo "<div class = 'folio'><p><b>Folio:</b> ".$row['folio']."</p></div>";
            echo "<div class = 'fecha'><p><b>Fecha:</b> ".$row['fecha']."</p></div>";
            echo "</div>";
            echo "<p><b>Tipo tramite:</b> ".$complemento."</p>";
            echo '<div class = "informacion-cuadro">';
            echo "<div class = 'folio'> $estatus </div>";
            echo "<div class = 'fecha'><a class  = 'botonshido' href = ''>Visualizar Contenido</a></div>";
            echo "</div>";
            echo "</div>";
        }
    }else{
        echo "<h2>No existen tramites pendientes</h2>";
    }
}

?>