<?php
class ConexionBD {
    static public function cBD()
    {
        $bd = new PDO("mysql:host=localhost;dbname=crud", "root", "");
return $bd;
    }
}
/*
host: localhost
nombre bd: crud
usuario: root
contrasena: */