<?php 
date_default_timezone_set('America/El_Salvador'); 
$fecha = date('Y-m-d');

//include ('../conexion/conexion.php');  
$campoCondicion = 'id';
$tabla = 'muestras';
$valorMostrar = 'cantidad';
//$bd = new Conexion();
$valorCondicion = $bd->muestra('id', 'muestras'); 
$cantidad_muestras = $bd->verValor($valorMostrar, $tabla, $campoCondicion, $valorCondicion);

            $pais = 'id_pais';
            $sala = 'id_sala';
            $campoCondicion='id';
            $valorCondi = $bd->muestra('id', 'sede_ac'); 

            if($valorCondi>0 && !empty($valorCondi)){
                $id_p= $bd->verValor($pais, 'sede_ac', $campoCondicion, $valorCondi);
                $id_s= $bd->verValor($sala, 'sede_ac', $campoCondicion, $valorCondi);
                }else{
                $id_p = '4';
                $id_s = '1';
                }
               
               //*********************************************************************************
                /*aca capturo la sala*/
                $query = "select sala from salas where id_pais=\"$id_p\" and id_sala=\"$id_s\" ";
                $resultados = mysqli_query($bd, $query);
                while($rows = mysqli_fetch_array($resultados)){
                    $sala_sede = $rows["sala"];
                }
                //*********************************************************************************

                //*********************************************************************************
                /*aca capturo el nombre de pais o sede*/
                $query = "select pais from sedes where id_pais=\"$id_p\" ";
                $resultados = mysqli_query($bd, $query);
                while($rows = mysqli_fetch_array($resultados)){
                    $pais_sede = $rows["pais"];
                } ?>
<!--  ******************************************************************************     -->
<div class="row">
 
      </script>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            
               <h3>
              <!--  <script type="text/javascript">
                 setTimeout('document.location.reload()',10000)
               </script> -->
               <?php
               //include'../conexion/conectarpdo.php';
               //$conn = conexion();
          $pd = $conn->prepare("SELECT * FROM usuarios WHERE isadmin=1");
          $pd->execute();

          $prod = $pd->rowcount();    
          echo $prod;   
           ?>
               </h3>
              <p>MASTER</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
              <?php $pd = $conn->prepare("SELECT * FROM usuarios WHERE isadmin=0");
            $pd->execute();

            $prod = $pd->rowcount();    
            echo $prod;   
            ?></h3>

              <p>VISITANTE</p>
            </div>
            <div class="icon">
              <i class="ion   
             ion-android-people"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div id="humedad" class="small-box bg-yellow">
            <div class="inner">
              <h3>
              <?php
             
                //   $statement=$conn->prepare("SELECT humedad FROM tem_hum where id_pais=\"$id_p\" and id_sala=\"$id_s\" ORDER BY id_tem_hum DESC LIMIT 0,1");
                //   $statement->execute();
                //   $results=$statement->fetch(PDO::FETCH_ASSOC);

                //       $humedad =  $results["humedad"];
                // echo ($humedad); 
              include("hum_ajax.html");
                  
                ?>
              </h3>

              <p>HUMEDAD</p>
            </div>
            <div class="icon">                                            
              <i class="ion   ion-ios-speedometer"></i>
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <?php
                // $statement=$conn->prepare("SELECT temperatura FROM tem_hum where id_pais=\"$id_p\" and id_sala=\"$id_s\" ORDER BY id_tem_hum DESC LIMIT 0,1");
                //   $statement->execute();
                //  $results=$statement->fetch(PDO::FETCH_ASSOC);

                //       $temperatura =  $results["temperatura"];
                // echo ($temperatura); 
                     include("tem_ajax.html");           
                ?></h3>

              <p>TEMPERATURA</p>
            </div>
            <div class="icon">
              <i class="ion ion-thermometer"></i>
              
            </div>
            <a href="#" class="small-box-footer"></a>
          </div>
        </div>
        <!-- ./col -->
      </div>