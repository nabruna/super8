<?php include_once 'include/lock.php';
      include_once '../db/serie.dao.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPER8 - Séries cadastradas</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include_once 'navbar.php'; ?>
    
	<div class="d-flex flex-column align-items-center w-100">
        <div class="d-flex justify-content-center mt-2">
            <?php 
                if (isset($_GET['msg'])){
                    include_once 'include/func.php';
                    echo validar_msg($_GET['msg']);
                }
            ?>
        </div>

        <div class="card w-75">
            <h5 class="card-header text-center fs-3">Séries cadastradas</h5>
            <div class="card-body">
                <?php echo exibir_series(); ?>
            </div>
        </div>
    </div>

</body>

<script src="./js/bootstrap.min.js"></script>

</html>