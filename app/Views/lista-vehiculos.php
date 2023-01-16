
            <?php
            echo '
            <section class="services" id="services">
            <div class="services-container">
                  
            ';

            if(isset($vehiculos2[0])){
               foreach ($vehiculos2 as $key =>  $value) {
                  echo '
                  <div class="box">
                     <div class="box-img">
                        <img src="'.base_url('public/assets/deportivos/'.$value['img_vehiculo']).'" alt="'. $value['version'] .'">
                        <p>' . $value['año'].'</p>
                        <h3>' . $value['año'] . ' ' . $value['version'] . '</h3>  
                        <h2>$'.$value['precio'].' | $358 <span>/month</span></h2>
                        <a  href="'.base_url('info-vehiculo/'.$value['slug_vehiculo']).'" class="btn">Mas informacion</a>  
                     </div>
                  </div>              
                  ';
               }
            echo '
               </div>
            </section>';
            }else{
               echo 'aun no hay datos del vehiculo';
            }
            ?>
            


