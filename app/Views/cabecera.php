<link rel="stylesheet" href="./public/css/grupo1.css">

<header class="header">
   <nav class="nav">
      <img src="./public/assets/grupo1/logo.svg" alt="logo cab" id="logo-nav">
      <h1 class="titulo-nav"><a href="<?=base_url('/')?>">IBCARSELL</a></h1>
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
               <a href="./public/php/login.php" class="nav-menu-link nav-link">SIGN IN</a>
            </li>
      </ul>
   </nav>
</header>

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