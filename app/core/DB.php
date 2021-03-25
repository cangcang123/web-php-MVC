<?php
class db{
    public static $instance = NULL;
    public function __construct() {}
    public function __clone() {}
    public static function getInstance(){
        if(!isset(self::$instance)) {
            $driver = "mysql";
            $host = 'localhost';
            $name = 'shop2';
            $options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;
            $dsn = "$driver:host=$host;dbname=$name;charset=utf8";
            self::$instance = new \PDO($dsn,'root','',$options);
        }
        return self::$instance;
    }     
    //public $con;
    //public $servername="localhost";
    //public $username ="root";
    //public $password ="";
    //public $dbname ="shop2";
}
?>