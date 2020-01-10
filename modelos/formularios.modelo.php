<?php
require_once "database.php";

class ModeloFormularios{
    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla( email, password, name_user, lastname_user,) 
                                                values( :email, :password, :name_user, :lastname_user,)");
        
        $stmt->bindParam(":email", $datos["email"],PDO:: PARAM_STR);
        $stmt->bindParam(":password", $datos["password"],PDO:: PARAM_STR);
        $stmt->bindParam(":name_user", $datos["name_user"],PDO:: PARAM_STR);
        $stmt->bindParam(":lastname_user", $datos["lastname_user"],PDO:: PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt -> close();
        $stmt = null;
    }



    static public function mdlSeleccionarUsuarios($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla");
        $stmt->execute();
           return $stmt -> fetchAll();
           $stmt -> close();
           $stmt = null;                                      
    }
}

?>