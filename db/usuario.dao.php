<?php
function busca_usuario($usuario, $senha) {
    include_once 'conn.php';
    $conn = connect();

    $sql = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }
    
    return false;
}


?>