<?php include_once 'include/lock.php';
      include_once '../db/serie.dao.php';
    
    if(!isset($_GET['id_serie'])) {
        header('location:series.php?msg=idinvalido');
    } else {
        $result = buscar_serie($_GET['id_serie']);
        if ($result == null) {
            header('location:series.php?msg=idinvalido');
        } else {
            $serie = mysqli_fetch_assoc($result);
        }
    } 
      
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER8 - Editar série: <?= $serie['titulo'] ?></title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/spec.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'navbar.php'; ?>

    <div class="def center">
        <form action="editadas.php" method="post" class="card text-center" autocomplete="off">
            <div class="card-header fs-3">
                Editar série
            </div>

            <div class="card-body p-3">

                <input type="hidden" id="id_serie" name="id_serie" value="<?= $serie['id_serie'] ?>">

                <div class="mb-3 row">
                    <div class="input-group">
                        <span class="input-group-text" id="label-titulo">
                            <label for="titulo" name="titulo" class="col-sm-2 col-form-label">Título</label>
                        </span>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?= $serie['titulo'] ?>" required aria-describedby="label-titulo">
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="input-group">
                        <span class="input-group-text" id="label-ano">
                            <label for="ano" name="ano" class="col-sm-2 col-form-label">Ano</label>
                        </span>
                        <input type="number" maxlength="4" class="form-control" id="ano" name="ano" aria-describedby="label-ano"  value="<?= $serie['ano'] ?>" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="input-group">
                        <span class="input-group-text" id="label-temporadas">
                            <label for="temporadas" name="temporadas" class="col-sm-2 col-form-label">Temporadas</label>
                        </span>
                        <input type="number" maxlength="3" class="form-control" id="temporadas" name="temporadas" aria-describedby="label-temporadas"  value="<?= $serie['temporadas'] ?>" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="input-group">
                        <span class="input-group-text" id="label-genero">
                            <label for="genero" name="genero" class="col-sm-2 col-form-label">Gênero</label>
                        </span>
                        <input type="text" class="form-control" id="genero" name="genero" aria-describedby="label-genero" value="<?= $serie['genero'] ?>" required>
                    </div>
                </div>

                <div class="d-flex flex-row justify-content-center w-100">
                    <button class="btn btn-outline-success me-2" name="editars" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder2-open" viewBox="0 0 16 16">
                            <path d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
                        </svg>
                        Salvar alterações
                    </button>
                    <a href="series.php" class="btn btn-outline-warning" name="cancelar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                        </svg>
                        Cancelar
                    </a>
                </div>
            </div>
        </form>
    </div>

</body>

<script src="./js/bootstrap.min.js"></script>

</html>