<?php
use Controller\UsuarioController;
$usuario = new UsuarioController();

?>

<h1>Login</h1>

<div class="container">

    <form method="POST">
       

        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Usuario</label>
                </div>
                <div class="col-10"><input class="form-control" type="text" name="usuario"></div>
            </div>

        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Contraseña</label>
                </div>
                <div class="col-10"><input type="password" name="pasword" class="form-control"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button class="btn btn-primary">Iniciar</button>
            </div>
        </div>
        
    </form>
     
<?php 
$resultado=$usuario->login();
if($resultado == "ERROR DE USUARIO"){
    echo "<div class='alert alert-success mt-3' role=alert'>
    Error de los datos</div>";
}

?>
</div>