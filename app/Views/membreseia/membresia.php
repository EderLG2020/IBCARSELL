<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="venta.css">
    <link rel="stylesheet" href="fontaawesone/css/all.css">
    <title>Document</title>
</head>
<body>
    <header>
        <link rel="stylesheet" href="./public/css/grupo1.css">


    <div class="container-venta">
        <div class="background"></div>
        <div class="tittle-venta">
            <h1>Selecciona tipo de Aviso</h1>
        </div>
        <div class="container-plan-box">
            <div class="plan-box">
                <div class="marcado"></div>
                <div class="encabezado">
                    <h3>BASIC</h3>
                    <p>GRATIS</p>
                </div>
                <div class="box-explication">
                    <h4>EXPOSICION BAJA</h4>
                    <ul>
                        <li>Foto Estandar en listado</li>
                        <li>Vegencia 60 dias</li>
                    </ul>
                    
                </div>
                <div class="box-button">
                    <input type="button" value="SELECCIONAR" id="btnRegbasic">
                </div>
            </div>
            <div class="plan-box">
                <div class="marcado"></div>
                <h3>MEDIUM</h3>
                <p>s/59</p>
                
                <div class="box-explication">
                    <h4>EXPOSICION MEDIUM</h4>
                    <ul>
                        <li>Foto Estandar en listado</li>
                        <li>Vegencia 60 dias</li>
                        <li>10 fotos en ficha</li>
                        <li>Video de youtube</li>
                    </ul>
                </div>
                <div class="box-button">
                    <input type="button" value="SELECCIONAR" id="btnRegMedium" >
                </div>
            </div>
            <div class="plan-box">
                <div class="marcado"></div>
                    <div><img src="corona.png"  alt=""></div>
                <h3>PREMIUM</h3>
                <p>S/99</p>
                <div class="box-explication">
                    <h4>EXPOSICION PREMIUM</h4>
                    <ul>
                        <li>Estudio de placa gratuito</li>
                        <li>Vigencia 60 días</li>
                        <li>Fotos ilimitadas en ficha</li>
                        <li>Pasador de fotos</li>
                    </ul>
                </div>
                <div class="box-button">
                    <input type="button" value="SELECCIONAR" id="btnRegPremium">
                </div>
                <div class="degradacion-select">
                    
                </div>
                
            </div>
        </div>
        

    </div>
    <div class="overlay" id="overlay">
        <div class="popup" id="popup" >
            <a href="#" id="button-cerrar-popup" class="button-cerrar-popup"><i class="fas fa-times"></i></a>
            <h2>Verificar email</h2>
            <p>En breves enviaremos un mensaje de confirmacion a su correo electrónico</p>
        </div>
    </div>
    <script src="popup.js"></script>
</body>
</html> 