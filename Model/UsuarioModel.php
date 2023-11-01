<?php
namespace Model;

use Model\ConexionModel;


class UsuarioModel{
    

    public static function login($datos){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM usuario where usuario = :usuario and password = :pasword");
        $stmt->bindParam(":usuario", $datos['usuario'], \PDO::PARAM_STR);
        $stmt->bindParam(":pasword", $datos['password'], \PDO::PARAM_STR);
        $stmt->execute();//Nos dira si hay un resultado que coincida
        return $stmt->fetch();//Devolviendo la respuesta

    }

    


}

?>