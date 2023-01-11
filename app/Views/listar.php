<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
    <title>Document Title</title>
</head>
<body>
    <div id="categorias">
        <h2>Busca por categoría</h2>  

        <div class="contenedor">
            <?php  foreach($vehiculos as $p){

            echo "<a href='". base_url('lista-vehiculos/' . $p['cat_id']). "'> <p>". $p['cat_nombre']. " </p><img src='". base_url($p['cat_img']) . "'> </a>";
            
            }?>
            
        </div>
    </div>
</body>
</html>