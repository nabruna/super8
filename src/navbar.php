<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center w-100">
            <div class="d-flex flex-row align-items-center justify-content-start">
                <a class="badge bg-info rounded-pill text-light text-uppercase fs-3 me-5 navbar-brand" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-film me-2" viewBox="0 0 16 22">
                        <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                    </svg>
                    <span class="lh-sm">SUPER8</span>
                </a>                    
                    <?php 
                    if (!isset($_SESSION)) {
                        session_start();
                    }
                    if (!empty($_SESSION)) {
                        echo '  <div class="navbar-nav d-flex flex-row flex-wrap">
                                    <a class="btn btn-outline-info nav-item me-2" href="index.php">Cadastrar</a>
                                    <a class="btn btn-outline-primary nav-item me-2" href="filmes.php">Filmes</a>
                                    <a class="btn btn-outline-secondary nav-item" href="series.php">Séries</a>
                                </div>
                            ';
                    } else {
                        echo '
                                <div class="navbar-nav d-flex flex-row">
                                    <a class="btn btn-outline-info nav-item" href="index.php">Home</a>
                                </div>';
                    }
                    ?>
            </div>
            
            <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (!empty($_SESSION)) {
                echo '<div class="d-flex flex-row align-items-center justify-content-end">
                        <a class="btn btn-outline-danger" href="include/logout.php">Logout</a>
                      </div>';
            } else {
                echo '';
            }
            ?>
        </div>

    </div>
</nav>