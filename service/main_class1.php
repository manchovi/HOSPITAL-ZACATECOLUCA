<?php
  //require_once("connection_db.php");
class Mantenimiento{
  var $correo;
  
  public static function eliminar_destinatarios($id){
      include("connection_db.php");
      //elete from pruebaFormulario where id = $id
      $query = "delete from app_destinos where id=?";
      try{
          $link=conexion();
          $comando=$link->prepare($query);
          $comando->execute(array($id));
          //return $comando;
          $count = $comando->rowCount(); 
          if($count>0){
              return 1;
          }else{
              return 0;   
          }
          
      }catch (PDOException $e){
          return -1;
      }
  }

  public static function update_key($id, $clave) {
       include("connection_db.php");
        // Creando consulta UPDATE
        $query = "UPDATE usuarios" .
            " SET clave=?" .
            "WHERE idusuario=?";

        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array(MD5($clave),$id));
          return $comando;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
    }
    
    
    public static function update_destinatarios($id, $server, $email1, $email2, $telefono){
        include("connection_db.php");
        $query = "UPDATE app_destinos" .
            " SET servidor=?, email1=?, email2=?, telefono=? " .
            "WHERE id=?";

        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($server, $email1, $email2, $telefono, $id));
          //return $comando;
          $count = $comando->rowCount(); 
          if($count>0){
              return 1;
          }else{
              return 0;   
          }

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
    }
    
    public static function getuserMaster($id, $email, $clave){
    include("connection_db1.php");
    //$this->correo = $email;
    // Consulta de la tabla usuarios para verificar email existentes.
    $query = "SELECT idusuario,
                      nombre,
                      apellido,
                      email,
                      clave,
                      pregunta,
                      respuesta,
                      fecha,
                      idtipousuario
                       FROM usuarios
                       WHERE email= ? and clave= ? and idtipousuario= ?";
    try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($email,MD5($clave),$id));
          $row = $comando->fetch(PDO::FETCH_ASSOC);
          return $row;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
        
    }
    
    
    public static function getuser($email, $clave){
    include("connection_db1.php");
    //$this->correo = $email;
    // Consulta de la tabla usuarios para verificar email existentes.
    $query = "SELECT idusuario,
                      nombre,
                      apellido,
                      email,
                      clave,
                      pregunta,
                      respuesta,
                      fecha,
                      idtipousuario
                       FROM usuarios
                       WHERE email= ? and clave= ?";
    try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($email,MD5($clave)));
          $row = $comando->fetch(PDO::FETCH_ASSOC);
          return $row;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
        
    }
    
    //para entrar al sistema
    public static function getByemail($email)
    {
        include("connection_db1.php");
    //$this->correo = $email;
    // Consulta de la tabla usuarios para verificar email existentes.
    $query = "SELECT idusuario,
                      nombre,
                      apellido,
                      email,
                      clave,
                      pregunta,
                      respuesta,
                      fecha,
                      idtipousuario
                       FROM usuarios
                       WHERE email= ?";
    try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($email));
          $row = $comando->fetch(PDO::FETCH_ASSOC);
          return $row;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
  }



  public static function getByAnswer($id, $resp)
    {
        include("connection_db.php");
      //$respuesta = 0;
    // Consulta de la tabla usuarios para verificar email existentes.
    $query = "SELECT idusuario,nombre,apellido,email,clave,pregunta,respuesta,fecha,idtipousuario FROM usuarios WHERE idusuario= ?";
    try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($id));
          $row = $comando->fetch(PDO::FETCH_ASSOC);
          return $row;
          
          // if ($resp==$row['respuesta']){
          //   $respuesta = 1;
          // }
          // return $respuesta;

        } catch (PDOException $e) {
            // Aqui puedes clasificar el error dependiendo de la excepcion
            // para presentarlo en la respuesta Json
            return -1;
        }
  }
    
    public static function registroDestinatarios($id, $servidor, $correo1, $correo2, $telefono){
        include("connection_db.php");
        $query = "INSERT INTO app_destinos (id, servidor, email1, email2, telefono)
                                VALUES (?, ?, ?, ?, ?)";
        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($id, $servidor, $correo1, $correo2, $telefono));
          //return $comando;
          
          $count = $comando->rowCount();
          
          //$link->commit();
          
          if($count > 0){
              return 1;
          }else{
              return 0;
          }

        } catch (PDOException $e) {
          
            return -1;
        }                        
        
    }
    
    
    
    //NUEVA FUNCIÓN PARA REGISTRAR ÚNICAMENTE LAS VARIABLES: TEMPERATURA Y HUMEDAD RELATIVA.
    public static function registroSensores($descripcion, $temperatura, $humedad){
        include("connection_db.php");
        
        date_default_timezone_set('America/El_Salvador'); 
        $hora = date("H:i:s");
        $fecha=date('Y-m-d');
        $mes= date('m');
        
        $query = "INSERT INTO sensores (descripcion, temperatura, humedad, fecha, hora, mes)
                                VALUES (?, ?, ?, ?, ?, ?)";
        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($descripcion, $temperatura, $humedad, $fecha, $hora, $mes));
          //return $comando;
          
          $count = $comando->rowCount();
          
          //$link->commit();
          
          if($count > 0){
              return 1;
          }else{
              return 0;
          }

        } catch (PDOException $e) {
          
            return -1;
        }                        
    }
    
    //NUEVA FUNCIÓN PARA REGISTRAR TODAS LAS VARIABLES DEL SISTEMA: TEMPERATURA, HUMEDAD RELATIVA Y ESTADO DE TODAS LAS LUMINARIAS (8 LUCES, EN TOTAL).
    public static function registroSensores1($descripcion, $temperatura, $humedad, $luz1, $luz2, $luz3, $luz4, $luz5, $luz6, $luz7, $luz8){
        include("connection_db.php");
        
        date_default_timezone_set('America/El_Salvador'); 
        $hora = date("H:i:s");
        $fecha=date('Y-m-d');
        $mes= date('m');
        
        $query = "INSERT INTO sensores (descripcion, temperatura, humedad, luz1, luz2, luz3, luz4, luz5, luz6, luz7, luz8, fecha, hora, mes)
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($descripcion, $temperatura, $humedad, $luz1, $luz2, $luz3, $luz4, $luz5, $luz6, $luz7, $luz8, $fecha, $hora, $mes));
          //return $comando;
          
          $count = $comando->rowCount();
          
          //$link->commit();
          
          if($count > 0){
              return 1;
          }else{
              return 0;
          }

        } catch (PDOException $e) {
          
            return -1;
        }                        
    }
    
    
    
    //NUEVA FUNCIÓN PARA REGISTRAR LOS CELULARES QUE TRATARÓN O HICIERÓN ACCIONES DE CONTROL Y MONITOREO EN EL SISTEMA ELECTRÓNICO.
    public static function registroPhones($descripcion, $celular1, $celular2, $fecha, $hora){
        include("connection_db.php");
        $query = "INSERT INTO App_phone (descripcion, numCelularCircuito, numCelularResponsable, fecha, hora)
                                VALUES (?, ?, ?, ?, ?)";
        try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($descripcion, $celular1, $celular2, $fecha, $hora));
          //return $comando;
          
          $count = $comando->rowCount();
          
          //$link->commit();
          
          if($count > 0){
              return 1;
          }else{
              return 0;
          }

        } catch (PDOException $e) {
          
            return -1;
        }                        
        
    }
    
    
    
     //obtengo las configuraciones realizadas en la BD para los destinatarios de informaci贸n.
    public static function getconfiguracionDestinatarios()
    {
        include("connection_db1.php");
    // Consulta de la tabla usuarios para verificar email existentes.
    $query = "SELECT id,
                     servidor,
                     email1,
                     email2,
                     telefono,
                     fechahora,
                     usuario from app_destinos
                     WHERE id = 1";
                     
    try {    
          $link=conexion();    
          $comando = $link->prepare($query);
          $comando->execute(array($id));
          //$row = $comando->fetch(PDO::FETCH_ASSOC);
          //return $row;
           $count = $comando->rowCount();
          
          if($count > 0){
              $row = $comando->fetch(PDO::FETCH_ASSOC);
              return $row;
          }else{
              return 0;
          }

        } catch (PDOException $e) {
            return -1;
        }
    }
    
    
}