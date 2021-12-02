<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SUPER8 - Catálogo de filmes/séries</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/spec.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>


<body>
	<?php include_once './src/navbar.php'; ?>

	<div class="def center">
		<form action="validar.php" method="post" class="card mt-3" autocomplete="off">
			<h5 class="card-header text-center fst-light fs-3">Login</h5>
			
			<div class="card-body">

				<?php 
					if (isset($_GET['msg'])){
						include_once './src/include/func.php';
						echo validar_msg($_GET['msg']);
					}
				?>

				<div class="mb-3 row">	
					<div class="input-group">
						<span class="input-group-text" id="label-usuario">
							<label for="usuario" name="usuario" class="col-sm-2 col-form-label" required>Usuário</label>
						</span>
						<input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="label-usuario">
					</div>
				</div>

				<div class="mb-3 row">
					<div class="input-group">
						<span class="input-group-text" id="label-senha">
							<label for="senha" class="col-sm-2 col-form-label" required>Senha</label>
						</span>
						<input type="password" name="senha" class="form-control" id="senha" aria-describedby="label-senha">
					</div>
				</div>

				<div class="d-flex flex-row justify-content-center w-100">
					<button class="btn btn-outline-success me-2" name="entrar" type="submit">Entrar</button>
					<button class="btn btn-outline-dark" type="reset">Limpar</button>
				</div>
			</div>
		</form>
	</div>
</body>

<script src="./js/bootstrap.min.js"></script>

</html>