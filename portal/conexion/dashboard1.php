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
              <p>ADMINISTRADOR</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">M&aacute;s info <i class="fa fa-arrow-circle-right"></i></a>
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
            <a href="#" class="small-box-footer">M&aacute;s info  <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div id="humedad" class="small-box bg-yellow">
            <div class="inner">
              <h3>
              <?php
             
                  $statement=$conn->prepare("SELECT humedad FROM tem_hum ORDER BY id_tem_hum DESC LIMIT 0,1");
                  $statement->execute();
                  $results=$statement->fetch(PDO::FETCH_ASSOC);

                      $humedad =  $results["humedad"];
                echo ($humedad); 
                  
                ?>
              </h3>

              <p>HUMEDAD</p>
            </div>
            <div class="icon">                                            
              <i class="ion   ion-ios-speedometer"></i>
            </div>
            <a href="#" class="small-box-footer">M&aacute;s info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3> <?php
                $statement=$conn->prepare("SELECT temperatura FROM tem_hum ORDER BY id_tem_hum DESC LIMIT 0,1");
                  $statement->execute();
                 $results=$statement->fetch(PDO::FETCH_ASSOC);

                      $temperatura =  $results["temperatura"];
                echo ($temperatura); 
                                
                ?></h3>

              <p>TEMPERATURA</p>
            </div>
            <div class="icon">
              <i class="ion ion-thermometer"></i>
              
            </div>
            <a href="#" class="small-box-footer">M&aacute;s info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>