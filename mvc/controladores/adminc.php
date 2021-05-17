<?php
class AdminC{
    public function IngresoC(){
        if (isset($_POST["usuario"])){
            $datosC = array("usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"]);
            $tablaBD = "administradores";
            $respuesta = AdminM::IngresoM($datosC,$tablaBD);
            if ($respuesta["usuario"] == $_POST["usuario"] && $respuesta["clave"] == $_POST["clave"]){
                session_start();
                $_SESSION["Ingreso"] = true;
                header("Location: index.php?ruta=empleados");
            }
            else {
                echo "ERROR AL INGRESAR";
            }
        }
    }
}