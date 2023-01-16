<?php if($db2 = db_connect()){
    echo 'conexion exitosa';
}else{
    echo 'error';
}
    ?>
      
      <section class="section1">
          <br><br><br><br><br><br>
            <div class="contenedor1">
                <div class="buscar">
                    <form action="#" method="get">
                        <input type="text" class="inputBuscar" placeholder="¿Buscas un auto a buen precio?">
                        <button type="submit"><img class="imgLupa" src="./public/img/lupa 1.svg" alt="imagen lupa"></button>
                    </form>
                </div>
                
                <div class="mensaje1">
                    <h2>Compra y venta de vehiculos <br>
                    todo en un solo lugar , de la manera mas segura <br> y confiable. Contamos con diferentes gamas de vehiculos</h2>
                </div>
            </div>

        <p class="tituloCars"><b>Renueva o vende tu carro el<br>mismo dia</b></p>
        <br><br>
        <div class="imagenecard">
            <div class="carro1">
                <img src="./public/img/auto1-1.webp" width="100%" class="tamanio" alt="auto1">
                <div class="caracter">
                    <p><img src="./public/img/etiqueta 1.svg" alt="svg"> Toyota 2002 2001 km</p>
                    <p><img src="./public/img/fecha 1.svg" alt="svg"> Toyota 2002 2000 km</p>
                    <p><img src="./public/img/km 1.svg" alt="svg"> Toyota 2002 2000 km</p>
                </div>
            </div>
            
            <div class="carro2">
                <img src="./public/img/auto2-1.webp" width="100%" class="tamanio" alt="auto2">
                <div class="caracter">
                    <p><img src="./public/img/etiqueta 1.svg" width="15px" heigth="15px" alt="svg"> Toyota 2002 2002 km</p>
                    <p><img src="./public/img/fecha 1.svg" width="15px" heigth="15px" alt="svg"> Toyota 2002 2000 km</p>
                    <p><img src="./public/img/km 1.svg" width="15px" heigth="15px" alt="svg"> Toyota 2002 2000 km</p>
                </div>
            </div>


            <div class="carro3">
                <img src="./public/img/auto3-2.webp" width="100%" class="tamanio Subir" alt="auto3">
                <div class="caracter Subir">
                <p><img src="./public/img/etiqueta 1.svg" width="15px" heigth="15px" alt="svg" > Toyota 2002 2003 km</p>
                    <p><img src="./public/img/fecha 1.svg" width="15px" heigth="15px" alt="svg"> Toyota 2002 2000 km</p>
                    <p><img src="./public/img/km 1.svg" width="15px" heigth="15px" alt="svg"> Toyota 2002 2000 km</p>
                </div>
            </div>
        </div>

        <div class="conteiner-parte1-2">
            
                    <h3 class="tituloh3">¿Que es IBCarsell?</h3>
                    <p class="parrafo-main">Es una plataforma de compra y venta de vehículos <br> seminuevos totalmente digital.</p>
                    <h3 class="tituloh3">¿Que hacemos?</h3>
                    <p class="parrafo-main">Compra y venta de Autos usados</p>
                    <p class="parrafo-main">......................</p>
            
                    <p><img src="./public/img/facebook.svg" alt="_facebook"><img src="./public/img/twitter.svg" alt="twitter"><img src="./public/img/linkedin.svg" alt="linkedin"></p>
                </div>


        </section>

    <!--TOGGLE-->
<script src="<?=base_url('public/js/grupo1.js')?>"></script>
