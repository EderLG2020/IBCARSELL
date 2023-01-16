<?php if($db2 = db_connect()){
    echo 'conexion exitosa';
}else{
    echo 'error';
}
    ?>
    
    <main>
        <div class="contenido1">
            <div class="buscar">
                <input type="text" class="buscar_texto" placeholder="¿Qué está buscando?">
                <a href="" class="boton">
                    <i class="bi bi-search"></i>
                </a>
            </div>
            <div>
                <h3>
                    Compra y venta de vehículos todo en un solo lugar<br>
                    de la manera más segura y confiable. Contamos con<br>
                    diferentes gamas de vehículos.
                </h3>
            </div>
        </div>

        <div>
            <img src="<?=base_url('public/assets/grupo1/contenido1.jpg')?>" alt="Logo" class="imagen-content">
        </div>
        <div class="info-p">
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat isectionsam impedit error voluptatum repellendus eligendi
                ratione numquam assectioneriores, et in eum?</section>
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat ipsam impedit error voluptatum repellendus eligendi
                ratione numquam asperiores, et in eum?</section>
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat ipsam impedit error voluptatum repellendus eligendi
                ratione numquam asperiores, et in eum?</section>
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat ipsam impedit error voluptatum repellendus eligendi
                ratione numquam asperiores, et in eum?</section>
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat ipsam impedit error voluptatum repellendus eligendi
                ratione numquam asperiores, et in eum?</section>
            <section class ="info-p-principal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
                excepturi sit consequatur laudantium. Doloremque, quos officia
                est quaerat ipsam impedit error voluptatum repellendus eligendi
                ratione numquam asperiores, et in eum?</section>
            
        </div>
    </main>

    <!--TOGGLE-->
<script src="<?=base_url('public/js/grupo1.js')?>"></script>
