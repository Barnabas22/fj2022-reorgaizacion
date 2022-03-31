<?php
    //TODO: Conexion SQL
    use \mysql;

    class mysql extends \mysql {
        protected $data = [
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 'uadeo',
            'port' => '3306';
        ]
    } 
?>