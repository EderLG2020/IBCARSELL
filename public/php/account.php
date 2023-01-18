<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/sign.css">
    <link rel="stylesheet" type="text/css" href="../css/grupo1.css">

</head>
<body>
    <header class="header">
        <nav class="nav">
            <img src="../assets/grupo1/logo.svg" alt="logo cab" id="logo-nav">
            <h1 class="titulo-nav"><a href="#">IBCARSELL</a></h1>
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
                    <a href="./public/php/account.php" class="nav-menu-link nav-link">SIGN UP</a>
                </li>
                <li class="nav-menu-item">
                    <a href="#" class="nav-menu-link nav-link">SIGN IN</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- REGISTRATE -->
    <main style="background-image: url('../img/sign2.jpg')">
        <div class="container-form sign-up">
            <div class="welcome-back">
                <div class="message">
                    <h1>BIENVENIDO</h1>
                    <h3>Por favor crea tu cuenta desde aquí</h3>
                </div>
            </div>
            <form action="" class="formulario">
                <h2 class="create-account">Crea tu cuenta</h2>
                <div class="icons">
                    <div class="border-icons">
                        <i class='bx bxl-instagram'></i>
                    </div>
                    <div class="border-icons">
                        <i class='bx bxl-facebook'></i>
                    </div>
                    <div class="border-icons">
                        <i class='bx bxl-linkedin'></i>
                    </div>
                </div>
                <p class="cuenta-gratis">Crear una cuenta</p>
                <input type="text" placeholder="Nombres">
                <input type="text" placeholder="Apellidos">
                <input type="text" placeholder="Telefono">
                <input type="text" placeholder="Email">
                <input type="password" placeholder="Password">
                
                <input type="button" value="Registrarse">
            </form>
        </div>
    </main>
    <!--Pie de pagina-->
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <img src="../assets/grupo1/logo.svg" alt="Logo" class="logo-footer">
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