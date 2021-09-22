<?php
include 'partials/head.php';
include 'partials/menu.php';
?>
<div class="container">

    <div class="starter-template">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="loginForm" action="validarCode.php" method="POST" role="form">
                            <legend>Iniciar Sesión</legend>

                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input class="form-control" type="text" name="txtUsuario" id="usuario" placeholder="usuario" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="txtPassword" id="password" placeholder="****" required>
                            </div>

                            <button type="submit" class="btn btn-success">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container -->

<?php
include 'partials/footer.php';
?>