<?php include_once 'include/lock.php';

if(!isset($_GET['id_serie'])) {
    header('location:series.php?msg=idinvalido');
} else {
    $id_serie = $_GET['id_serie'];
    include_once '../db/serie.dao.php';
    $result = excluir_serie($id_serie);

    if($result) {
        header('location:series.php?msg=succdels');
    } else {
        header('location:series.php?msg=errodels');
    }
}

?>