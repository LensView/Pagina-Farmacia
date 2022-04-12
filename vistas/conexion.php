<?php
    require_once "config.php";
    class conexion
    {
        protected $db;
        public function __construct()
        {
            @$this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            if ($this->db->connect_error)
            {
                echo "fallo la conexion". $this ->db->connect_error;
                exit();
                return;
            }
            $this->db->set_charset(DB_CHARSET);
        }
    }
?>