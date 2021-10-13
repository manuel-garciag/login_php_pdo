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
                        <form id="loginForm" action="registroCode.php" method="POST" role="form">
                            <legend>Registro de usuario</legend>

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="txtNombre" id="nombre" placeholder="Ingresa el nombre" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="text" name="txtEmail" id="email" placeholder="Ingresa tu direccion de e-mail" required>
                            </div>

                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input class="form-control" type="text" name="txtUsuario" id="usuario" placeholder="usuario" required>
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