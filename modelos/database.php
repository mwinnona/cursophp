<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=Proyecto1", "root","Y@xicu83029" );
        $link->exec("set names utf8");
        return $link;
    }
}
?>