<?php include_once 'include/lock.php';
      include_once '../db/serie.dao.php';

if(!isset($_POST['editars']) || empty($_POST['titulo']) || 
    empty($_POST['ano']) || empty($_POST['temporadas']) || 
    empty($_POST['genero'])) {
    header('location:index.php?msg=edtembranco');
} else {
    $id_serie   = $_POST['id_serie'];
    $titulo     = $_POST['titulo'];
    $ano        = $_POST['ano'];
    $temporadas = $_POST['temporadas'];
    $genero     = $_POST['genero'];

    $result = editar_serie($id_serie, $titulo, $ano, $temporadas, $genero);

    if($result) {
        header('location:series.php?msg=seditada');
    } else {
        header('location:series.php?msg=serroeditar');
    }
}
?>