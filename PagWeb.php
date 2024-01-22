<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Home Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="StylePW.css">
</head>
<body>
    <header class="header">
        <img src="Images/HOMEShopping.png" alt="Logo de la página">
        <div class="menu container">
            <input type="checkbox" id="menu" />
            <nav class="navbar">
                <u1>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </u1>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Servicio de Casas</h1>
                <p>
                    Nuestro servicio se especializa meramente 
                    en la venta de casas o inmoviliarios en distintas zonas
                    bien posicionadas a las necesidades mas mencionadas
                    de nuestro publico.
                </p>
                <a href="#" class="btn-1">Tratos</a>
            </div>
            <div class="header-img">
                <img src="Images/Soul_V.png" alt="">
            </div>
        </div>
    </header>

    <section class="about container">
        <div class="about-img">
            <img src="Images/vendedores.jpg">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Somos un equipo de jovenes, comprometidos con
                entregar comodidad y accesibilidad a todos
                aquellos que buscan independizarse o buscar
                un lugar en el que quieran vivir grandes experiencias.
            </p>
        </div>
    </section>
    <main class="Otros Servicios">
        <h2>Otros Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-home"></i>
                <h3>Promociones</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-location"></i>
                <h3>Estados Disponibles</h3>
            </div>
            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-bank"></i>
                <h3>Tipos de Pagos</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda una visita</h2>
            <div class="input-group">
                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellidos">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="phone" placeholder="Telefono Celular">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="email" placeholder="Correo electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="input-container">
                    <input type="text" name="message" placeholder="Detalles">
                </div>
                <input type="submit" name="send" class="boton" onclick="myFunction()">
            </div>
        </form>
    </section>
    <?php
    include("send.php");
    ?>
    <script>
        function myFunction(){
            window.location.href="http://localhost/Pagina_Web"
        }
    </script>
</body>
</html>