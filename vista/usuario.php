<?php
include 'partials/head.php';
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario']['privilegio'] == 1) {
        header('location:admin.php');
    }
} else {
    header('location:login.php');
}

include 'partials/menu.php';
?>



<div class="container">

    <div class="starter-template">
        <div class="jumbotron">
            <div class="container">
                <h1><strong>Bienvenido</strong> <?php echo $_SESSION['usuario']['nombre'] ?></h1>
                <p>Panel de control | <span class="label label-info"><?php echo $_SESSION['usuario']['privilegio'] == 1 ? 'Admin' : 'Cliente' ?></span></p>
                <p>
                    <a href="cerrar_sesion.php" class="btn btn-primary btn-lg">Cerrar Sesión</a>
                </p>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<?php
include 'partials/footer.php';
?>