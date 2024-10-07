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
                <a href="inicio.php" class="link">Oferta Academica</a>
                <a href="inicio.php" class="link link--active">Sobre nosotros</a>
            </div>
        </div>
    </nav>

        <!-- Botón flotante -->
        <div class="floating-btn">
            <button id="menu-btn"><i class="fa-solid fa-headset"></i></button>
            
            <!-- Menú desplegable -->
            <div class="menu">
                <a href="#" class="menu-item" id="service-points">
                    <i class="fa-brands fa-whatsapp"></i> <!-- Ícono de puntos de servicio -->
                    WhatsApp
                </a>
                <a href="#" class="menu-item" id="online-chat">
                    <i class="fa-regular fa-comments"></i></i> <!-- Ícono de chat en línea -->
                    Chat en línea
                </a>
                <a href="#" class="menu-item" id="online-management">
                    <i class="fa-brands fa-facebook"></i> <!-- Ícono de gestiones en línea -->
                    Facebook
                </a>
            </div>
        </div>

        <section class="projects container">
            <h2 class="subtitle">Proceso de matrícula<span class="point"></span></h2>
            <p class="copy__sections">Estos son los datos para matricularte en nuestra institución</p>
            
            <article class="container-bg">
                <div class="info-container">
                    <h3>Información Adicional</h3>
                    <p>Si deseas mas informacion puedes seguir los siguientes pasos para recibirlos en tu correo electronico.</p>
                    <ul>
                        <li>Requisito 1</li>
                        <li>Requisito 2</li>
                        <li>Requisito 3</li>
                    </ul>
                </div>
        
                <div class="pensum-container">
                    <img src="img2/pensum.png" alt="Pensum" class="pensum-image">
                </div>
            </article>
        </section>
        

    
    <footer class="footer">
        <div class="container footer__caption">
            <section class="download">
                <h3 class="title__footer">Visitanos!</h3>
                <div class="download__app">
                    <div class="download__item">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <a href="ubicacion.php">Ubicacion</a>
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
    <div class="contenedoor"> </div>
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