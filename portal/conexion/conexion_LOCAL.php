<?php
//para los caracteres especiales del idioma
@header("Content-Type: text/html;charset=iso-8859-1");
	/*
	* para conectar
	*/
	class Conexion extends mysqli{

		public function __construct()
		{
			parent::__construct('localhost','root','','mjgl_tesis');
			//parent::__construct('localhost','mjgl_tesis','tesis_utla_2019_','mjgl_tesis');
			$mitz='America/El_Salvador';
            $tz = (new DateTime('now', new DateTimeZone($mitz)))->format('P');
            $this->query("SET time_zone='$tz';");
            
			$this->query("SET NAMES 'utf-8';");
			
			
            
			$this->connect_errno ? die("Error con la conexion") : $x = 'Conectado';
			// imprime el mensaje "Conectado": echo $x;
			//unset($x);
		}

		//Para cerrar la sesión
		public function cerrar(){
			$this->Conexion->close();
		}

		//recorre las filas que retorna una consulta
		public function recorrer($y){

			return mysqli_fetch_array($y);

		}

		//numero de filas de la consulta
		public function rows($y){

			return @mysqli_num_rows($y);

		}

		//para entrar al sistema
		public function login($usuario, $pass){

		$this->user = $usuario;
		$this->password = $pass;

		$query = "select idusuario, estado, clave, usuario, CONCAT(nombre,' ',apellido) as nombre, email, idtipousuario FROM usuarios WHERE usuario = '".$this->user."' and clave = MD5('".$this->password."')";
		
		$consulta = $this->query($query);

		$row = mysqli_fetch_array($consulta);

		if ($this->rows($consulta) > 0) {

			#se asignan todos los datos necesarios para la sesión activa
			
			$nombre = $row['nombre'];
			$id = $row['idusuario'];
			$estado = $row['estado'];
			$tipousuario = $row['idtipousuario'];
			$_SESSION['session'] = 	$tipousuario;
			$_SESSION['validacion'] = 1;
			$_SESSION['idusuario'] = $id;
			$_SESSION['nombreusuario'] = $nombre; 	
			$_SESSION['usuario'] =$this->user ;
             $_SESSION['pass']=$this->password ;
              
              

			if ($tipousuario  == 1 )  {
				# code...
				#se muestra el mensaje de bienvenida
				 if ($estado == "Inactivo") {
				 	echo "<body onload='desactivo();''></body>

    <script type='text/javascript'>
      function desactivo(){
        //Mensaje alertitys
        alertify.error('Error. Usuario su cuenta ha sido desactivada.'); 
        return false;
      }

    </script>";
				 	}else{

			
				echo '<script>valor=confirm("Bienvenid@,\n'.$nombre.'");
								valor;
							if (valor == true) {
								location.href="principal/";
							} 
							</script>';
				}
			}else if($tipousuario  == 2) {
			
			if ($estado == "Inactivo") {
				 	echo "<body onload='desactivo();''></body>

    <script type='text/javascript'>
      function desactivo(){
        //Mensaje alertitys
        alertify.error('Error. Usuario su cuenta ha sido desactivada.'); 
        return false;
      }

    </script>";
				 	}else{

				echo '<script>valor=confirm("Bienvenid@,\n'.$nombre.'");
								valor;
							if (valor == true) {
								location.href="admin/index2.php";
							} 
							</script>';
							}
			}else{
				if ($estado == "Inactivo") {
				 	echo "<body onload='desactivo();''></body>

    <script type='text/javascript'>
      function desactivo(){
        //Mensaje alertitys
        alertify.error('Error. Usuario su cuenta ha sido desactivada.'); 
        return false;
      }

    </script>";
				 	}else{

				echo '<script>valor=confirm("Bienvenid@,\n'.$nombre.'");
								valor;
							if (valor == true) {
								location.href="usu/index2.php";
							} 
							</script>';
							}
}


		
		}else{

			$_SESSION['validacion'] = 0 ; 
			echo '<body onload="no();"></body>

    <script type="text/javascript">
      function no(){

        //Mensajes de dialogo alertifys
        alertify.error("Error. Usuario / Contrase&ntilde;a Incorrecta.."); 
        return false;
      }

    </script>';	
		}

	}
	
	



	//Para validar el usuario
	public function validarUsuario($validacion)
	{
		if($validacion != 1){
			header("Location: ../");
		}
	}




	
	//para guardar en cualquier tabla, cualquier valor
	public function guardar($tabla, $campos, $valores){
		/*echo $tabla."<br>";
		echo $campos."<br>";
		echo $valores."<br>";*/
			try {

				
					//guardar
					$sql = "INSERT INTO $tabla($campos) values($valores);";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					$resultado = $this->query($sql);
					if ($resultado > 0) {
						//si se guarda
						echo '<script>alert("Exelente,\nLos Datos Fueron Guardados.");</script>';
					}else{
						//si no se guarda
						echo '<script>alert("Existe un problema,\nLos Datos NO Se Guardaron.");</script>';
					}

				} catch (Exception $e) {
					//si no se guarda
					echo '<script>alert("Existe un problema,\nLos datos NO se Guardaron. por: " + '.$e->getMessage().');</script>';
				}
			
	}




	//para modificar en cualquier tabla, cualquier valor
		public function modificar($tabla, $valores, $condicion, $url){
			//modificar
			try {
					$sql = "UPDATE $tabla SET $valores WHERE $condicion;";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					$resultado = $this->query($sql);
					if ($resultado > 0) {
						//si se modicifa
						echo '<script>valor=confirm("Excelente:\nLos Datos Fueron Modificados.");
							valor;
							if (valor == true) {
								location.href="'.$url.'";
							} else {
								location.href="'.$url.'";
							}
						</script>';
					}else{
						//si no se modicifa
						echo '<script>alert("Existe un problema,\nLos datos NO se modificaron.");</script>';
					}

				} catch (Exception $e) {
					//si no se modifica
					echo '<script>alert("Existe un problema,\nLos datos NO se modificaron. por: " + '.$e->getMessage().');</script>';
				}
		}





		//para modificar en cualquier tabla, cualquier valor
		public function modificarEstado($tabla, $valores, $condicion){
			//modificar
			try {
					$sql = "UPDATE $tabla SET $valores WHERE $condicion;";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					return $resultado = $this->query($sql);

				} catch (Exception $e) {
					//si no se modifica
					echo '<script>alert("Existe un problema,\nLos datos NO se modificaron. por: " + '.$e->getMessage().');</script>';
				}
		}







		//para borrar en cualquier tabla, cualquier valor
		public function borrar($tabla, $condicion){
			//modificar
			try {
					$sql = "DELETE FROM $tabla WHERE $condicion;";
					//Se ejecuta si borra el registro retorna 1 si no 0
					$resultado = $this->query($sql);		

				} catch (Exception $e) {
					//si no se modifica
					echo '<script>alert("Error,\nLos datos NO se borraron. por: " + '.$e->getMessage().');</script>';
				}
		}


		//para consultarTodo de cualquier tabla
		public function consultarTodo($campos, $tabla){
			//consultarTodo
			try {
				//consulta deseada
				$sql = "SELECT $campos FROM $tabla;";

				//retornar $sql
				return $sql;

			} catch (Exception $e) {
				//si no se asigan el valor de $sql
					echo '<script>alert("Existe un problema con la función consultarTodo,\nPor: " + '.$e->getMessage().');</script>';
			}

		}

		//para una consultaEspecifica de cualquier tabla, cualquier valor
		public function consultaEspecifica($campos, $tabla, $condicion){
			//consultaEspecifica
			try {
				//consulta deseada
				$sql = "SELECT $campos FROM $tabla WHERE $condicion;";

				//retornar $sql
				return $sql;

			} catch (Exception $e) {
				//si no se asigan el valor de $sql
					echo '<script>alert("Existe un problema con la función consultaEspecificada,\nPor: " + '.$e->getMessage().');</script>';
			}
		}

public function generarListaX(){
			try {
				$sql = $this->query("SELECT distinct date(fecha) as fecha from gps;");

				if ($this->rows($sql) > 0) {
					$array = array();
					while ($consulta = $this->recorrer($sql)) {
						array_push($array, $consulta);
					}
					return $array;
				}
			} catch (Exception $e) {
				echo 	'<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista,\nPor: " + '.$e->getMessage().');
					     </script>';
			}
		}



		
//para generarLista de cualquier tabla, cualquier valor
		public function generarLista($idCampo, $valorMostrar, $tabla, $claseControl, $idControl, $nombreControl){
			//generarLista
			try {
				$sql = $this->query("SELECT $idCampo, $valorMostrar FROM $tabla;") or die(mysqli_error()); 

				if ($this->rows($sql) > 0) {
					echo 	'<select name="'.$nombreControl.'" class="'.$claseControl.'" id="'.$idControl.'" >';
					while ($consulta = $this->recorrer($sql)) {
								echo '<option value="'.$consulta[$idCampo].'">'.$consulta[$valorMostrar].'</option>';
					}
					echo 	'</select>';
				} else {
					echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista");	
					     </script>';
					     echo "NO HAY DATOS...";
				}
			} catch (Exception $e) {
				echo 	'<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}	
				
		}




//para generarLista de cualquier tabla, cualquier valor
		public function lista_pais($idCampo, $valorMostrar, $tabla, $claseControl, $idControl, $nombreControl){
			//generarLista
			try {
				$sql = $this->query("SELECT $idCampo, $valorMostrar FROM $tabla;") or die(mysqli_error()); 

				if ($this->rows($sql) > 0) {
					echo 	'<select required name="'.$nombreControl.'" class="'.$claseControl.'" id="'.$idControl.'" >';
					echo '<option value="">&nbsp;&nbsp;Seleccione Sede&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>';
					while ($consulta = $this->recorrer($sql)) {
								echo '<option value="'.$consulta[$idCampo].'">'.$consulta[$valorMostrar].'</option>';
					}
					echo 	'</select>';
				} else {
					// echo '<script>
					// 		alert("Lo sentimos,\nExiste un problema con la función generarLista");	
					//      </script>';
					     echo "NO HAY DATOS...";
				}
			} catch (Exception $e) {
				echo 	'<script>
							alert("Lo sentimos,\nExiste un problema con la función lista de paises,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}	
				
		}

//para generarListaEspecifica convalor determinado
		public function generarListaEspecifica($idCampo, $valorMostrar, $tabla, $valorCondicion, $claseControl, $idControl, $nombreControl){
			//generarLista
			try {
				$sql = $this->query("SELECT $idCampo, $valorMostrar FROM $tabla ORDER BY $valorMostrar;") or die(mysqli_error()); 

				if ($this->rows($sql) > 0) {
					echo 	'<select name="'.$nombreControl.'" class="'.$claseControl.'" id="'.$idControl.'" >';
						echo '<option value="'.$this->verValor($idCampo, $tabla, $idCampo, $valorCondicion).'">'.$this->verValor($valorMostrar, $tabla, $idCampo, $valorCondicion).'</option>';
					while ($consulta = $this->recorrer($sql)) {
								echo '<option value="'.$consulta[$idCampo].'">'.$consulta[$valorMostrar].'</option>';
					}
					echo 	'</select>';
				} else {
					echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista");	
					     </script>';
				}
			} catch (Exception $e) {
				echo 	'<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}	
				
		 }



//para generarText de cualquier tabla, cualquier valor
		public function generarText($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
			//generarText
			try {
				$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;") or die(mysqli_error()); 

				if ($this->rows($sql) > 0) {
					while ($consulta = $this->recorrer($sql)) {
								echo '<input type="text" value="'.$consulta[$valorMostrar].'" name="txt'.$campoCondicion.'" readonly = "true">';
					}
				} else {
					echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función generarText");	
					     </script>';
				}
			} catch (Exception $e) {
				echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función generarText,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}
		}


		//para mostrarValor de cualquier tabla, cualquier valor
		public function mostrarValor($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
			//generarText
			try {
				$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;") or die(mysqli_error()); 

				if ($this->rows($sql) > 0) {
					while ($consulta = $this->recorrer($sql)) {
								echo $consulta[$valorMostrar];
					}
				} else {
					echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función mostrarValor");	
					     </script>';
				}
			} catch (Exception $e) {
				echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función mostrarValor,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}
		}


//para mostrarValor de cualquier tabla, cualquier valor
		public function verValor($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
			//iniciar resultado
			$resultado = "";
			try {
				//$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;") or die("No hay datos en la BD"); 
				$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;");
				if ($this->rows($sql) > 0) {
					while ($consulta = $this->recorrer($sql)) {
								$resultado = $consulta[$valorMostrar];
					}
				} 
			} catch (Exception $e) {
				echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función verValor,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}

			return $resultado;
		}

		

//para mostrarValor de cualquier tabla, cualquier valor
//para mostrarValor de cualquier tabla, cualquier valor
		public function muestra($campo, $tabla){
			//iniciar resultado
			$resultado = "";
			try {
				$sql = $this->query("SELECT max($campo) as valormax FROM $tabla");
				//$sql = $this->query("SELECT $campo FROM $tabla WHERE id = max(id) ");
				if ($this->rows($sql) > 0) {
					
					while ($consulta = $this->recorrer($sql)) {
								//$resultado = $consulta[$valorMostrar];
						$resultado = $consulta['valormax'];
					}
				} else {
					echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función verValor");	
					     </script>';
				}
			} catch (Exception $e) {
				echo '<script>
							alert("Lo sentimos,\nExiste un problema con la función verValor,\nPor: " + '.$e->getMessage().');	
					     </script>';
			}

			return $resultado;
		}
}
?>