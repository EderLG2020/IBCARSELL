
    <div id="categorias">
        <h2>Busca por categoría</h2>  

        <div class="contenedor">
            <?php  foreach($vehiculos as $p){

            echo "<a class='etiquetas' href='". base_url('lista-vehiculos/' . $p['cat_id']). "'> <p>". $p['cat_nombre']. " </p><img src='". base_url('public/assets/'.$p['cat_img']) . "'> </a>";
            
            }?>
        </div>
    </div>
    <script src="<?=base_url('public/js/app.js') ?>"></script>

