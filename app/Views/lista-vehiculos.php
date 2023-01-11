<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?= base_url('public/css/style2.css') ?>">
   <title>IBCARSELL</title>
</head>
<body>


            <?php
            echo '
            <section class="services" id="services">
            <div class="services-container">
                  
            ';
               foreach ($vehiculos2 as $key =>  $value) {
                  echo '
                  <div class="box">
                     <div class="box-img">
                        <img src="'.base_url('public/assets/deportivos/'.$value['img_vehiculo']).'" alt="'. $value['nombre_vehiculo'] .'">
                        <p>' . $value['anio_vehiculo'].'</p>
                        <h3>' . $value['anio_vehiculo'] . ' ' . $value['nombre_vehiculo'] . '</h3>  
                        <h2>$'.$value['costo_vehiculo'].' | $358 <span>/month</span></h2>
                        <a href="#" class="btn">ver mas</a>  
                     </div>
                  </div>              
                  ';
               }
            echo '
               </div>
            </section>';
            ?>
            

</body>
</html>


