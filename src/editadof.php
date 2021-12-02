<?php include_once 'include/lock.php';
      include_once '../db/filme.dao.php';

if(!isset($_POST['editarf']) || empty($_POST['titulo']) || 
    empty($_POST['ano']) || empty($_POST['direcao']) || 
    empty($_POST['genero'])) {
    header('location:index.php?msg=edtembranco');
} else {
    $id_filme   = $_POST['id_filme'];
    $titulo     = $_POST['titulo'];
    $ano        = $_POST['ano'];
    $direcao    = $_POST['direcao'];
    $genero     = $_POST['genero'];

    $result = editar_filme($id_filme, $titulo, $ano, $direcao, $genero);

    if($result) {
        header('location:filmes.php?msg=feditado');
    } else {
        header('location:filmes.php?msg=ferroeditar');
    }
}
?>