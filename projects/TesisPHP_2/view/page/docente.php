<?php include '../partials/headDocente.php';?>
    
    <?php
        include '../partials/sidebarDocente.php';
    ?>

    <div class="content">
        <!-- header area start -->
        <header>
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
            <div class="right_area">
                <a href="#" class="logout_btn"> Cerrar Sesión </a>
            </div>
        </header>
        <!-- header area end  -->
        <div id="sub_content">
            
            <h1> 
                <strong>Bienvenido</strong>
                <?php echo $_SESSION["user"]["username"]; ?>
            </h1>
            
            <p> Panel de control | 
                <span class="label label-info">
                    <?php echo $_SESSION["user"]["id_rol"] == 2 ? 'Docente' : 'No Identificado'; ?>
                </span>
            </p>
            <p>
                <a href="../../controller/php_code/cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
            </p> 
        </div>
    </div>