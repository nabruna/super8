<?php include_once 'include/lock.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER8 - Cadastrar filme ou série</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/spec.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'navbar.php'; ?>

	<div class="d-flex justify-content-center">
		<?php 
			if (isset($_GET['msg'])){
				include_once 'include/func.php';
				echo validar_msg($_GET['msg']);
			}
		?>
	</div>

    <div class="def sp-eve">

		<form action="salvarf.php" method="post" class="card text-center" autocomplete="off">
            <h5 class="card-header text-center fs-3">Filmes</h5>

            <div class="card-body p-3">
				<div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-titulo">
							<label for="titulo" name="titulo" class="col-sm-2 col-form-label">Título</label>
						</span>
						<input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="label-titulo" required>
					</div>
				</div>

				<div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-ano">
							<label for="ano" name="ano" class="col-sm-2 col-form-label">Ano</label>
						</span>
						<input type="number" maxlength="4" class="form-control" id="ano" name="ano" aria-describedby="label-ano" required>
					</div>
				</div>

                <div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-direcao">
							<label for="direcao" name="direcao" class="col-sm-2 col-form-label">Direção</label>
						</span>
						<input type="text" class="form-control" id="direcao" name="direcao" aria-describedby="label-direcao" required>
					</div>
				</div>

                <div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-genero">
							<label for="genero" name="genero" class="col-sm-2 col-form-label">Gênero</label>
						</span>
						<input type="text" class="form-control" id="genero" name="genero" aria-describedby="label-genero" required>
					</div>
				</div>

				<div class="d-flex flex-row justify-content-center w-100">
					<button class="btn btn-outline-success me-2" name="salvarf" type="submit">Salvar</button>
					<button class="btn btn-outline-dark" type="reset">Limpar</button>
				</div>
			</div>
		</form>

		<form action="salvars.php" method="post" class="card text-center" autocomplete="off">
            <h5 class="card-header text-center fs-3">Séries</h5>

            <div class="card-body p-3">
				<div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-titulo">
							<label for="titulo" name="titulo" class="col-sm-2 col-form-label">Título</label>
						</span>
						<input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="label-titulo" required>
					</div>
				</div>

				<div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-ano">
							<label for="ano" name="ano" class="col-sm-2 col-form-label">Ano</label>
						</span>
						<input type="number" maxlength="4" class="form-control" id="ano" name="ano" aria-describedby="label-ano" required>
					</div>
				</div>

                <div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-temporadas">
							<label for="temporadas" name="temporadas" class="col-sm-2 col-form-label">Temporadas</label>
						</span>
						<input type="number" type="number" maxlength="3" class="form-control" id="temporadas" name="temporadas" aria-describedby="label-temporadas" required>
					</div>
				</div>

                <div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-genero">
							<label for="genero" name="genero" class="col-sm-2 col-form-label">Gênero</label>
						</span>
						<input type="text" class="form-control" id="genero" name="genero" aria-describedby="label-genero" required>
					</div>
				</div>

				<div class="d-flex flex-row justify-content-center w-100">
					<button class="btn btn-outline-success me-2" name="salvars" type="submit">Salvar</button>
					<button class="btn btn-outline-dark" type="reset">Limpar</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>