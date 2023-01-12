<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IBCARSELL</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="./public/css/style.css">

    <!-- STYLES -->
<!-- 
    <style {csp-style-nonce}>
        
    </style> -->
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>
<p class="tituloPage">IBCARSELL</p>
    <div class="menu">

        <ul>
            <li class="logo">
                <img src="./public/img/logo_1.svg" alt="">
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            </li>
            <li class="menu-item hidden"><a class="myColor" href="#" target="_blank">Registrate</a></li>
            <li class="menu-item hidden"><a class="myColor" href="#" target="_blank">Ingresar</a>
            </li>
        </ul>
    </div>

</header>

<!-- CONTENT -->

<section>
<br> 
    <div class="contenedor">
        <div class="buscar">
            <form action="#" method="get">
                <input type="text" class="inputBuscar" placeholder="¿Buscas un auto a buen precio?">
                <button type="submit"><img class="imgLupa" src="./public/img/lupa 1.svg" alt="imagen lupa"></button>
            </form>
        </div>
        
        <div class="mensaje">
            <h2>Compra y venta de vehiculos <br>
            todo en un solo lugar , de la manera mas segura <br> y confiable. Contamos con diferentes gamas de vehiculos</h2>
        </div>
    </div>

<p class="tituloCars"><b>Renueva o vende tu carro el<br>mismo dia</b></p>
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
</section>

<div class="further">

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>


</footer>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<!-- -->

</body>
</html>
