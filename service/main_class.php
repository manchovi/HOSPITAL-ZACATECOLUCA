<?php
include('Database.php');
//require 'Database.php';

class Mantenimiento
{
    function __construct()
    {
    }

    public static function comprobar_usuario($usuario, $clave){
        $consulta = "select * from usuarios where email=? and clave=?";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($usuario, $clave));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;

            } catch (PDOException $e) {
                return -1;
            }
        }

    public static function getAll()
    {
        $consulta = "SELECT * FROM Alumnos";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            //$count = $comando->rowCount();  //Linea que tengo que probar.

            /*
            $sql = $link->prepare("SELECT * FROM usuarios order by nombre asc");
            $sql->execute();
            $count = $sql->rowCount(); 
            */

            //return $comando->fetchAll();
            return $comando->fetchAll(PDO::FETCH_ASSOC);
            //return $comando->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

   
    public static function getById($idAlumno)
    {
        // Consulta de la tabla Alumnos
        $consulta = "SELECT idAlumno,
                            nombre,
                            direccion
                             FROM Alumnos
                             WHERE idAlumno = ?";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($idAlumno));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepci�n
            // para presentarlo en la respuesta Json
            return -1;
        }
    }


    public static function getByemail($email)
    {
        // Consulta de la tabla usuarios para verificar email existentes.
        $consulta = "SELECT idusuario,
                            nombre,
                            email,
                            clave,
                            pregunta,
                            respuesta,
                            fecha
                             FROM usuarios
                             WHERE email= ?";

        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($email));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
    }



   
    public static function update($idAlumno, $nombre, $direccion) {
        // Creando consulta UPDATE
        $consulta = "UPDATE Alumnos" .
            " SET nombre=?, direccion=? " .
            "WHERE idAlumno=?";

        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);

        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($nombre, $direccion, $idAlumno));

        return $cmd;
    }

    public static function insert($nombre, $direccion){
        // Sentencia INSERT
        $comando = "INSERT INTO Alumnos (".
            "nombre," .
            " direccion)" .
            " VALUES(?,?)";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($nombre, $direccion));
    }


    public static function insert_usuario($nombre, $apellido, $email, $clave, $pregunta, $respuesta, $tipo){
        // Sentencia INSERT Usuarios.
        $comando = "INSERT INTO usuarios (".
            "nombre," .
            "apellido," .
            "email," .
            "clave," .
            "pregunta," .
            "respuesta," .
            "idtipousuario)" .
            " VALUES(?,?,?,?,?,?,?)";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($nombre, $apellido, $email, MD5($clave), $pregunta, $respuesta, $tipo));
    }

   
    public static function delete($idAlumno)
    {
        // Sentencia DELETE
        $comando = "DELETE FROM Alumnos WHERE idAlumno=?";

        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);

        return $sentencia->execute(array($idAlumno));
    }
}

?>