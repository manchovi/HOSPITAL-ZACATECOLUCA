<?php
include ('mysql_login.php');
//require_once 'mysql_login.php';
class Database
{
    private static $db = null;
    /*** Instancia de PDO ***/
    private static $pdo;
    final private function __construct()
    {
        try {
            // Crear nueva conexión PDO
            self::getDb();
        } catch (PDOException $e) {
            // Manejo de excepciones
        }
    }

    public static function getInstance()
    {
        if (self::$db === null) {
            self::$db = new self();
        }
        return self::$db;
    }

   
    public function getDb()
    {
        if (self::$pdo == null) {
            self::$pdo = new PDO(
                'mysql:dbname=' .DATABASE.
                ';host=' .HOSTNAME.
                ';port:3306;',
                //';port:63343;', // Eliminar este elemento si se usa una instalación por defecto
                USERNAME,
                PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );

            ////Creamos la conexión PDO por medio de una instancia de su clase
            //$cnn = new PDO("mysql:host=localhost;dbname=prueba","root","");

            // Habilitar excepciones
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

    
    final protected function __clone()
    {
    }

    function _destructor()
    {
        self::$pdo = null;
    }
}

?>