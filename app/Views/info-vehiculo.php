<?php 
if(isset($vehiculo)){
   foreach ($vehiculo as $key => $value) {?>
      <div id="info-vehiculo">
         <div id="info-vehiculo-p">
            <img src="<?=base_url('public/assets/deportivos/depor-1.jpg')?>" alt="">
            <div class="info-head">
               <h1><?= esc($titulo) ?></h1>
               <h2>Precio: <?= $value['precio'] ?> | $358 <span>/month</span></h2>
               <a href="#"><input type="submit" value="Cotiza aqui"></a>
            </div>
         </div>
         <div id="info-vehiculo-c">
            <h3>Modelo:</h3>
            <h1><?= esc($value['modelo']) ?></h1>
            <div class="especificaciones">
               <h1>ESPECIFICACIONES</h1>
               <div class="especificaciones-detalle">
                  <div class="izq">
                     <span>Año:</span>
                     <span>Modelo:</span>
                     <span>version:</span>
                     <span>Marca:</span>
                     <span>Kilometraje</span>
                     <span>Transmisión</span>
                     <span>Combustible</span>
                     <span>Color</span>
                  </div>
                  <div class="der">
                     <span><?= $value['año'] ?></span>
                     <span><?= $value['modelo'] ?></span>
                     <span><?= $value['version'] ?></span>
                     <span><?= $value['nomMarca'] ?></span>
                     <span><?= $value['kilometraje'] ?></span>
                     <span><?= $value['transmision'] ?></span>
                     <span><?= $value['combustible'] ?></span>
                     <span><?= $value['color'] ?></span>
                  </div>
               </div>
            </div>
         </div>


      </div>
<?php } 

   }else{
   echo 'aun no hay datos del vehiculo';
}
?>



