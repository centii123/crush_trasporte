<?php
require_once "conexion.php";

    class validacion extends conexion{
        //atributos
        public $consulta;
        public $query;
        public $row;
        //metodos
        public function Inicio_sesion($correo,$contraseña){
            $this->consulta="SELECT * FROM usuario WHERE correo='$correo' AND contrasena='$contraseña'";
            $this->query=pg_query($this->conex,$this->consulta);
            $this->row=pg_fetch_array($this->query);
            return $this->row;
        }
        public function Registro($tipo,$nombres,$apellidos,$correo,$contrasena){
            $this->consulta="INSERT INTO usuario(tipo,nombres,apellidos,correo,contrasena) VALUES ($tipo,'$nombres','$apellidos','$correo','$contrasena');";
            $this->query=pg_query($this->conex,$this->consulta);
            return true;
        }
    }
?>
