<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles_contacto.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend+Deca&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://kit.fontawesome.com/a3138e5847.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/favicon.png">
</head>
<body class="body_color">
    <header class="header" id="header">
        <nav class="header-nav nav-visible" >
            <a href="index.html" class="logo"><img class="logo-siu" src="./img/logo_small.png" alt="logo"></a>
            <button class="nav-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu ">
                <li class="nav-menu-item">
                    <a href="index.html"  class="nav-menu-link nav-link">Inicio</a>
                </li>
                <li class="nav-menu-item">
                    <a href="ofertas.html" target="_blank" class="nav-menu-link nav-link">Ofertas</a>
                </li>
                <li class="nav-menu-item">
                    <a href="nosotros.html" class="nav-menu-link nav-link">Nosotros</a>
                </li>
                <li class="nav-menu-item">
                    <a href="contacto.php" class="nav-menu-link nav-link">Contacto</a>
                </li>
            </ul> 
        </nav>
    </header>
        <section class="container pt-5  container_contact ">
            <h3 class="text-uppercase text-center">Contacto</h3>
            <p class="lead text-center">Para registrar su producto rellene el siguiente formulario por favor.</p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="container_form" method="POST">
                <div class="form-group">
                    <label for="Codigo">Código: </label>
                    <input type="number" name="Codigo" placeholder="Escribe el código del producto aquí" class="form-control form-control-mt" >
                </div>
                <div class="form-group">
                    <label for="Nombre">Nombre: </label>
                    <input type="text" name="Nombre" placeholder="Escribe el nombre del producto aquí" class="form-control form-control-mt">
                </div>
                <div class="form-group mb-5">
                    <label for="Precio">Precio: </label>
                    <input type="number" name="Precio" placeholder="Escribe el precio del producto aquí" class="form-control form-control-mt">
                </div> 
                <div class="form-group flex-form d-flex justify-content-evenly mt-4">
                    <div>
                        <button type="submit" class="btn btn-info alert alert-info" id="boton_enviar" name="submit">Enviar</button>
                    </div>
                    <div>
                        <button type="reset" class="btn btn-info alert alert-info " id="boton_limpiar" >Limpiar</button>
                    </div>
                </div>
                <?php
                include("formulario.php")
                ?>
            </form>
        </section>
        <footer class="footer">
            <div class="social">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-snapchat"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook"></a>
            </div>
            <ul class="list">
               <li><a href="#">Inicio</a></li>
               <li><a href="#">Servicios</a></li>
               <li><a href="#">Acerca de</a></li>
               <li><a href="#">Terminos</a></li>
               <li><a href="#">Política y Privacidad</a></li>
            </ul>
            <p class="copyrigth">
                Pizzeria Don Pierre @ 2021
            </p>
        </footer>
<script defer src="../javascript/app.js"></script>       
</body>
</html>
