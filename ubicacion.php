<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Nacional Tecnico Industrial</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/boton.css">
    <link rel="icon" href="img/logo instituto_Mesa de trabajo 1.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/matricula.css">
</head>
<body>
    <nav class="nav__hero">
        <div class="container nav__container">
            <div class="logo">
                <img src="img/logo2.png" alt="Logo" class="logo__image"><span class="point"></span>
            </div>
            <div class="links">
                <a href="inicio.php" class="link">Inicio</a>
                <a href="matricula.php" class="link">Nuevo Ingreso</a>
                <a href=" #Especialidades" class="link">Oferta Academica</a>
                <a href="#" class="link">Modalidades Flexibles</a>
                <a href="inicio.php" class="link link--active">Sobre nosotros</a>
                <!--<a href="login.html" class="link link--active">Inicio Sesion</a>-->
            </div>
        </div>
    </nav>

        <!-- Botón flotante -->
    <div class="floating-btn">
        <button id="menu-btn"><i class="fa-solid fa-headset"></i></button>
    
        <!-- Menú desplegable -->
        <div class="menu">
            <a href="https://wa.me/1234567890" target="_blank" class="menu-item" id="service-points">
                <i class="fa-brands fa-whatsapp"></i> <!-- Ícono de WhatsApp -->
                WhatsApp
            </a>
            <a href="https://tuchatenlinea.com" target="_blank" class="menu-item" id="online-chat">
                <i class="fa-regular fa-comments"></i> <!-- Ícono de chat en línea -->
                Chat en línea
            </a>
            <a href="https://facebook.com/tuPagina" target="_blank" class="menu-item" id="online-management">
                <i class="fa-brands fa-facebook"></i> <!-- Ícono de Facebook -->
                Facebook
            </a>
        </div>
        </div>

        <section class="projects container"></section>
            <h2 class="subtitulos">Rutas que te llevan a nuestra institucion<span class="point"></span></h2>
            <p class="copiar__section">Estas son algunas de las rutas que puedes tomar para llegar a nuestras instalaciones</p>

            <p class="copiar__seccion">En nuestro compromiso por facilitar el acceso a nuestras instalaciones, ponemos a disposición de nuestros estudiantes, personal y visitantes las siguientes rutas de transporte público que cubren nuestra institución:
            <br>
            <b>R4, R4T, 7C, 8A, 27, 34, 108, 100A, 102</b>, así como todas las rutas de buses provenientes del occidente del país.
            <br>
            Estas rutas permiten un acceso conveniente desde diferentes puntos de la ciudad y la región, garantizando un trayecto cómodo y eficiente hacia nuestra sede. Estamos dedicados a brindar una experiencia educativa accesible para todos.</p>
        </section>       

        <article class="container-bgs">
            <div class="pensum-container">
                <img src="img/ubicacion2.png" alt="Pensum" class="large-image">
            </div>
        </article>
    
    <footer class="footer">
        <div class="container footer__caption">
            <section class="download">
                <h3 class="title__footer">Visitanos!</h3>
                <div class="download__app">
                    <div class="download__item">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <a href="https://www.google.com/maps/place/Instituto+Nacional+T%C3%A9cnico+Industrial+(INTI)/@13.693752,-89.2249034,17z/data=!3m1!4b1!4m6!3m5!1s0x8f633045e4056f3f:0x71e906b9e1a79eae!8m2!3d13.6937468!4d-89.2223285!16s%2Fg%2F1tdqjjtc?entry=ttu&g_ep=EgoyMDI0MDkxMS4wIKXMDSoASAFQAw%3D%3D">MAPS</a>
                    </div>
                </div>
                <div class="footer__copy">
                    <p class="copyright"></p>
    
                    <a href="#" class="politica__privacidad politica__privacidad--margin"></a>
                    <a href="#" class="politica__privacidad "></a>
                </div>
            </section>
            <section class="get-email">
                <h3 class="title__footer">¿Estás listo para estudiar con nosotros?</h3>
                <form class="newsletter newsletter--modifier">
                    <input type="text" class="newsletter__input" placeholder="Ingresa tu email para mas info.">
                    <input type="submit" class="newsletter__submit" value="Comienza hoy">
                </form>
            </section>
        </div>

        
        <div class="contact">
            <div class="item__contact">
                <h3 class="contact__title"></h3>
            </div>
            <div class="item__contact">
                <h3 class="contact__title"></h3>
            </div>
            <div class="item__contact">
                <h3 class="contact__title"></h3>
            </div>
            <div class="item__contact item__contact--gold">
                <h3 class="contact__title"></h3>
            </div>
        </div>
    </footer>
    <script src="./boton.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.nav__hero');
            
            if (window.scrollY > 50) { // Si el usuario baja más de 50px
                navbar.classList.add('shrink');
            } else {
                navbar.classList.remove('shrink');
            }
        });
    </script>
</body>
</html>