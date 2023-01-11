<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <!--BARRA NAVEGACIÓN-->
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            padding: 90px 20px 0;
        }

        .header {
            background-color: azure;
            height: 80px;
            position: fixed;
            /*Al hacer scroll queda fija la barra de navegación*/
            width: 100%;
            top: 0;
            left: 0;
        }

        .nav {
            display: flex;
            justify-content: space-between;

            max-width: 1200px;
            margin: 0 auto;
        }

        .nav-link {
            color: black;
            text-decoration: none;
        }

        #logo-nav {
            font-size: 10px;
            /*
            font-weight: bold; */
            padding: 0 40px;
            line-height: 80px;
            width: 220px;

        }

        .titulo-nav {

            line-height: 80px;

        }

        .nav-menu {
            display: flex;
            margin-right: 40px;
            list-style: none;
        }

        .nav-menu-item {
            font-size: 18px;
            margin: 0 10px;
            line-height: 80px;
            text-transform: uppercase;
            width: max-content;
        }

        .nav-menu-link {
            padding: 8px 12px;
            border-radius: 3px;
        }

        .nav-menu-link:hover,
        .nav-menu-link_active {
            background-color: #034574;
            transition: 0.5s;
        }

        /* TOGGLE */
        .nav-toggle {
            color: black;
            background: none;
            border: none;
            font-size: 30px;
            padding: 0 20px;
            line-height: 60px;
            cursor: pointer;

            display: none;
        }

        /* MOBILE=> cuando el disositivo tenga un tamaño menor de 768px*/
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }

            .header {
                height: 60px;
            }

            #logo-nav {
                font-size: 10px;
                padding: 0 20px;
                line-height: 30px;
            }

            .nav-menu {
                flex-direction: column;
                align-items: center;
                margin: 0;
                background-color: #2c3e50;
                position: fixed;
                top: 60px;
                width: 100%;
                padding: 20px 0;

                height: calc(100% - 60px);
                overflow-y: auto;

                left: 100%;
                transition: left 0.3s;
            }

            .nav-menu-item {
                line-height: 70px;
            }

            .nav-menu-link:hover,
            .nav-menu-link_active {
                background: none;
                color: #83c5f7;
            }

            .nav-toggle {
                display: block;
            }

            .nav-menu_visible {
                left: 0;
            }

            .nav-toggle:focus:not(:focus-visible) {
                outline: none;
            }
        }
    </style>
    <!--FOOTER RESPONSIVE-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        /*:::::Pie de Pagina*/
        .pie-pagina {
            width: 100%;
            background-color: cadetblue;
            padding: 10px;
        }

        .pie-pagina .grupo-1 {
            width: 100%;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 50px;
            padding: 45px 0px;
            text-align: center;
        }

        .pie-pagina .grupo-1 .box figure {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pie-pagina .grupo-1 .box figure img {
            width: 250px;
        }

        .pie-pagina .grupo-1 .box h2 {
            color: #fff;
            margin-bottom: 25px;
            font-size: 20px;
        }

        .pie-pagina .grupo-1 .box p {
            color: #efefef;
            margin-bottom: 10px;
        }

        .pie-pagina .grupo-1 .red-social a {
            display: inline-block;
            text-decoration: none;
            width: 45px;
            height: 45px;
            line-height: 45px;
            color: #fff;
            margin-right: 10px;
            background-color: #0d2033;
            text-align: center;
            transition: all 300ms ease;
        }

        .pie-pagina .grupo-1 .red-social a:hover {
            color: aqua;
        }



        @media screen and (max-width:800px) {
            .pie-pagina .grupo-1 {
                width: 90%;
                grid-template-columns: repeat(1, 1fr);
                grid-gap: 30px;
                padding: 35px 0px;
            }
        }

        .logo-footer {
            margin-left: 5px;
            width: 100px;
            height: 100px;
        }
    </style>
    <!--CONTENIDO-->
    <style>
        .imagen-content {
            max-width: 100%;
            max-height: 100%;

            padding-left: 5px;
            padding-right: 5px;
        }

        .contenido1 {
            display: flex;
            justify-content: space-around;
            text-align: center;

            padding: 15px;
        }
        .buscar{
            display: flex;
            background-color: #069;
            padding: 10px;
            height: 50px;
            width: 155px;
            border-radius: 400px;
        }
        .buscar_texto{
            border: none;
            background: none;
            outline: none;
            color:white;
            
        }
        .boton{
            width:20px; 
            height: 20px;
            color:white;
            font-size: 20px;
        }
    </style>
</head>


<body>
    <header class="header">
        <nav class="nav">
            <img src="./public/logo.svg" alt="logo cab" id="logo-nav">
            <h1 class="titulo-nav">IBCARSELL</h1>
            <button class="nav-toggle" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu">
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Comprar</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Vender</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">Publicar</a>
                </li>
            </ul>
        </nav>
    </header>
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
            <img src="./public/contenido1.jpg" alt="Logo" class="imagen-content">
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi
            excepturi sit consequatur laudantium. Doloremque, quos officia
            est quaerat ipsam impedit error voluptatum repellendus eligendi
            ratione numquam asperiores, et in eum?</p>
    </main>
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <img src="./public/logo.svg" alt="Logo" class="logo-footer">
                <h3>ibcarshop.com es una plataforma<br>
                    de compra y venta de vehículos <br>
                    comercialesde distintas ramas y <br>
                    categorías a precios accesibles <br>
                    de manera segura.
                </h3>
            </div>
            <div class="box">
                <h2>Canales digitales</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <h2>Atención Comercial</h2>
                <h3>Lunes - Viernes: 8am a 6pm<br>
                    Sábados: 8am a 2pm
                </h3>
            </div>
            <div class="box">
                <h2>Contáctanos</h2>
                <h3>
                    Av. Circunvalación Golf Los Incas Nro. 208,<br>
                    Torre 3, Oficina 602B, Santiago de Surco<br>
                    Movil: (+51) 982 375 435
                </h3>
                <br><br>
                <h3>Email:</h3>
                <h3>ibcorpshop@corpibgroup.com</h3>
            </div>
        </div>
    </footer>



    <!--TOGGLE-->
    <script>
        const navToggle = document.querySelector(".nav-toggle");
        const navMenu = document.querySelector(".nav-menu");

        navToggle.addEventListener("click", () => {
            navMenu.classList.toggle("nav-menu_visible");

            if (navMenu.classList.contains("nav-menu_visible")) {
                navToggle.setAttribute("aria-label", "Cerrar menú");
            } else {
                navToggle.setAttribute("aria-label", "Abrir menú");
            }
        });
    </script>

</body>

</html>