<?php

namespace Controller;

use Model\UsuarioModel;

class UsuarioController{

    public function login(){
        if(!empty ($_POST['usuario']) && !empty ($_POST['pasword'])){
            //Comparacion para ver si los datos coinciden.
            $datos = array(
                'usuario' => $_POST['usuario'],//Entre corchetes el name del formulario que envia los datos
                'password' => $_POST['pasword']
            );
            $respuesta = UsuarioModel::login($datos);
            if (isset($respuesta['id'])){// Si hay coincidencia
                $_SESSION['usuario']= $respuesta['usuario'];
                $_SESSION['nombres']= $respuesta['nombres'];
                $_SESSION['apellidos']= $respuesta['apellidos']; //Guardo los valores de la base de datos en esta variable.
                $_SESSION['id']= $respuesta['id'];
                $_SESSION['rol']= $respuesta['rol'];
                header("Location: index.php?action=inicio&id={$respuesta['id']}");

            }else {
                //mensaje error
                return "ERROR DE USUARIO";
            }
        }
    }

    public function logout(){
        session_destroy();
        //session_unset() otras opciones a utilizar
        header("location: index.php?action=inicio");
    }


}
?>