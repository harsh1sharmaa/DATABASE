<?php
// include('../config.php');
    class DB
    {
        public static $instance;

        public static function getInstance()
        {
            if(!isset(self::$instance))
            {
                try {
                    self::$instance = new PDO("mysql:host=mysql-server;dbname=Store","root","secret");
                    // set the PDO error mode to exception
                    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return self::$instance;      
                  } catch(PDOException $e) {
                    return $e->getMessage();
                  }
            }
            return self::$instance;
        }
    }