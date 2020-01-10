<?php
class ControladorFormularios{
    static public function ctrRegistro(){
        if(isset($_POST["email"])){
            if($_POST["password"]==$_POST["cpassword"]){
                $tabla ="users";
                $datos = array("email" => $_POST["email"],"password" => $_POST["password"],
                "name_user" => $_POST["name"],"lastname_user" => $_POST["lastname"],);
                $respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
                return $respuesta;  
            }else{
                echo "<script>alert('No coinciden las contraseñas'); window.location = 'http://localhost/bt-admin/index.php?pagina=register';</script>";
    
            }
        }
    }

    static public function ctrSeleccionar(){
        $tabla ="users";
        $respuesta = ModeloFormularios::mdlSeleccionarUsuarios($tabla);
        return $respuesta;
    }
}
?>