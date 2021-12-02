<?php include_once 'include/lock.php';

if(!isset($_GET['id_filme'])) {
    header('location:filmes.php?msg=idinvalido');
} else {
    $id_filme = $_GET['id_filme'];
    include_once '../db/filme.dao.php';
    $result = excluir_filme($id_filme);

    if($result) {
        header('location:filmes.php?msg=succdelf');
    } else {
        header('location:filmes.php?msg=errodelf');
    }
}

?>