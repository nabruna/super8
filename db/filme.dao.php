<?php include_once 'conn.php';

function salvar_filme($titulo, $ano, $direcao, $genero){
    $conn = connect();
    $sql = "INSERT INTO tb_filmes (titulo, ano, direcao, genero) VALUES ('$titulo', '$ano', '$direcao', '$genero')";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }
    
    return false;
}

function mostrar_filmes(){
    $conn = connect();
    $sql = "SELECT * FROM tb_filmes";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return $result;
    }

    return null;
}

function exibir_filmes(){
    $result = mostrar_filmes();
    if ($result === null) {
        $retorno = '<div class="alert alert-warning d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-diamond-fill me-3" viewBox="0 0 16 16">
                            <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <span>Nenhum filme foi cadastrado.</span>
                    </div>';
    } else {
        $retorno = '';
        
        while ($filme = mysqli_fetch_assoc($result)) {
            $retorno .= '<ul class="list-group">';
            $retorno .= '<li class="list-group-item list-group-item-primary">
                            <span class="badge fs-6 me-2 bg-primary">
                                Título:
                            </span>
                            <b>' . $filme['titulo'] . '</b></li>';
            $retorno .= '<li class="list-group-item list-group-item-light">
                            <span class="badge fs-6 me-2 bg-primary">
                                Ano:
                            </span> 
                            ' . $filme['ano'] . '</li>';
            $retorno .= '<li class="list-group-item list-group-item-light">
                            <span class="badge fs-6 me-2 bg-primary">
                                Direção:
                            </span> 
                            ' . $filme['direcao'] . '</li>'; 
            $retorno .= '<li class="list-group-item list-group-item-light">
                            <span class="badge fs-6 me-2 bg-primary">
                                Gênero:
                            </span> 
                            ' . $filme['genero'] . '</li>';
            $retorno .= '<li class="list-group-item list-group-item-light">
                            <span class="badge fs-6 me-2 bg-primary">
                                ID:
                            </span> 
                            ' . $filme['id_filme'] . '</li>';
            $retorno .= '</ul>
                         <div class="d-flex flex-row-reverse mt-2 mb-4">';
            $retorno .=     '<a class="btn btn-outline-danger" href="' . link_deletar($filme['id_filme']) .
                               '" onclick="return confirm(\'Tem certeza que deseja excluir esse filme?\')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill me-1" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                                Excluir
                            </a>';
            $retorno .=     '<a class="btn btn-outline-info me-2" href="' . link_editar($filme['id_filme']) . 
                                '">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                                Editar
                            </a>';
            $retorno .= '</div>';
        }
    }

    return $retorno;
}

function link_editar($id_filme) {
    $link = 'editarf.php?id_filme=' . $id_filme;
    return $link;
}

function link_deletar($id_filme) {
    $link = 'deletarf.php?id_filme=' . $id_filme;
    return $link;
}

function excluir_filme($id_filme) {
    $conn = connect();
    $sql = "DELETE FROM tb_filmes WHERE id_filme = $id_filme";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }

    return false;
}

function buscar_filme($id_filme){
    $conn = connect();
    $sql = "SELECT * FROM tb_filmes WHERE id_filme = $id_filme";
    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return $result;
    }

    return null;
}

function editar_filme($id_filme, $titulo, $ano, $direcao, $genero) {
    $conn = connect();
    $sql = "UPDATE tb_filmes SET titulo = '$titulo', ano = '$ano', direcao = '$direcao', genero = '$genero' WHERE tb_filmes.id_filme = $id_filme";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        return true;
    }
    
    return false;
}

?>