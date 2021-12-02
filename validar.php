<?php 

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if (!isset($_POST['entrar']) || empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('location:index.php?msg=embranco');
} else {
    include_once 'db/usuario.dao.php';

    $result = busca_usuario($usuario, $senha);

    if ($result) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        
        header('location:src/index.php');
    } else {
       header('location:index.php?msg=errousuario');
    }
}

?>