<?php
    //variables de conexion
    $db_dir      = 'localhost'; 
    $db_user     = 'root';
    $db_password = '';
    $db_name     = 'php_sebastian';
    
    //creando la conexion
    mysqli_report(MYSQLI_REPORT_OFF); //apaga los errores del interprete
    $conn = @new mysqli($db_dir, $db_user, $db_password, $db_name); //@ apaga las advertencias

    //verificando la conexion
    if($error = $conn -> connect_error){
        die('Hubo un error en la conexion: ' . $error);
    }
?>

