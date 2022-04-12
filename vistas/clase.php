<?php
    require_once "conexion.php";

    class claseUsuarios extends Conexion
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function insertar ($nombre, $apellidos, $nomusuario, $correo, $pass, $direccion )
        {
            $consulta="INSERT INTO usuario VALUES ('$nombre', '$apellidos', '$nomusuario', '$correo', '$pass', '$direccion')";
            $result=$this->db->query($consulta);
            if($result)
            {
                return 1;
            }
            else
                return 0;
        }

        public function get_usuarios()
        {

        }
    }

?>