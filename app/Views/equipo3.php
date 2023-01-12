<!--EQUIPO 3 CULMINADO-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IBCarsell</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./img/car.ico"/>
    <link rel="stylesheet" type="text/css" href="./style/style.css"/>    
</head>
<body>
<header>
    <div class="menu">
            <a href="" class="menu-logo">Logo</a>
            <a href="" class="menu-item">Inicio</a>
            <a href="" class="menu-item">Catalago</a>
            <a href="" class="menu-item">Nosotros</a>
            <a href="" class="menu-item">Contacto</a>
            <div class="menu-button">
                <a href="" class="menu-vender" type="button">Vender</a>    
                <a href="" class="menu-User"><img src="img/1814089_account_user_person_profile_avatar_icon.png"></a>    
            </div>
            
        </div>
</header>
<section >
    <section>
        <h1 class="titulo">Preguntas Frecuentes</h1>      
    </section>
    <section>
        <div class="Container-card">
            <div class="card c1">
                <div class="icon">
                    <img src="img/transaccion.jpg" alt="">
                </div>
                <div class="info-description">
                    <p>La comisión por el servicio estándar será pagada por el Usuario Vendedor siempre que se concrete la transferencia a través de los Puntos de Encuentro seguros de IBCarsell, el cual será equivalente al 2% + IGV del precio de venta acordado en la transacción con el Comprador.</p>
                </div>
            </div>
            <div class="card c1">
                <div class="icon">
                    <img src="img/transaccion.jpg" alt="">
                </div>
                <div class="info-description">
                    <p>La comisión por el servicio estándar será pagada por el Usuario Vendedor siempre que se concrete la transferencia a través de los Puntos de Encuentro seguros de IBCarsell, el cual será equivalente al 2% + IGV del precio de venta acordado en la transacción con el Comprador.</p>
                </div>
            </div>
            <div class="card c1">
                <div class="icon">
                    <img src="img/transaccion.jpg" alt="">

                    </i>
                </div>
                <div class="info-description">
                    <p>La comisión por el servicio estándar será pagada por el Usuario Vendedor siempre que se concrete la transferencia a través de los Puntos de Encuentro seguros de IBCarsell, el cual será equivalente al 2% + IGV del precio de venta acordado en la transacción con el Comprador.</p>
                </div>
            </div>
        </div>
        
    </section>
</section>   
<footer>
      <div class="footer-container">
        <div class="column">
          <div class="f-descri">
              <div>
                <img src="img/logo1.png" alt="" style="width: 200px;">
              </div>
              <div class="f-descri">
                <p>ibcarshop.com es una plataforma de compra y venta de vehiculos comerciales de distintas ramas y categorias a precios accesibles y de manera segura</p>
              </div>
          </div>
        </div>
      
        <div class="column">
          <div class="f-descri">
            <h1>Canales digitales</h1>
            <div>
              <a href=""><img src="img/facebook-icon.png" alt=""></a>
              <a href=""><img src="img/twitter-icon.png" alt=""></a>
              <a href=""><img src="img/linkedin-icon.png" alt=""></a>
              
            </div>
            <div class="text">
              <h2>Atencion comercial</h2>
              <p>Lunes-Viernes: 8am a 6pm</p>
              <p>Sabado: 8am a 2pm</p>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="f-descri">
            <h1>Contáctanos</h1>
            <p>Av. Circunvalación Golf Los Incas Nro. 208, Torre 3, Oficina 602B , Santiago de Surco</p>
            <p>Móvil:(+51) 982 375 435</p>
            <p>E-Mail:ibcarshop@corpibgroup.com</p>
          </div>
        </div>
      </div>
  </footer>
<footer> 
    <div class="copyrights">
    <p> &#174 Copyright &copy <?= date('Y') ?> Corporación CorpIbGroup | All Rights Reserved</p>
    </div>
</footer>
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
