<?php 
if(!isset($_POST['salvars']) || empty($_POST['titulo']) || 
    empty($_POST['ano']) || empty($_POST['temporadas']) || 
    empty($_POST['genero'])) {
        header('location:index.php?msg=sembranco');
    } else {
        $titulo     = $_POST['titulo'];
        $ano        = $_POST['ano'];
        $temporadas    = $_POST['temporadas'];
        $genero     = $_POST['genero'];

        include_once '../db/serie.dao.php';

        $result = salvar_serie($titulo, $ano, $temporadas, $genero);

        if($result) {
            header('location:series.php?msg=scadastrada');
        } else {
            header('location:index.php?msg=serrocadastro');
        }
    }
?>