<?php 
if(!isset($_POST['salvarf']) || empty($_POST['titulo']) || 
    empty($_POST['ano']) || empty($_POST['direcao']) || 
    empty($_POST['genero'])) {
        header('location:index.php?msg=fembranco');
    } else {
        $titulo     = $_POST['titulo'];
        $ano        = $_POST['ano'];
        $direcao    = $_POST['direcao'];
        $genero     = $_POST['genero'];

        include_once '../db/filme.dao.php';

        $result = salvar_filme($titulo, $ano, $direcao, $genero);

        if($result) {
            header('location:filmes.php?msg=fcadastrado');
        } else {
            header('location:index.php?msg=ferrocadastro');
        }
    }
?>