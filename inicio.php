<?php
error_reporting(0);
include('includes/config.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Nacional Tecnico Industrial</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/logo instituto_Mesa de trabajo 1.png">
    <link rel="stylesheet" href="css/boton.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</head>
<body>
    <header class="hero">
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                    <img src="img/logo2.png" alt="Logo" class="logo__image"><span class="point"></span>
                </div>
                <div class="links">
                    <a href="#Inicio" class="link">Inicio</a>
                    <a href="matricula.php" class="link">Nuevo Ingreso</a>
                    <a href="#Especialidades" class="link">Oferta Academica</a>
                    <a href="#Nosotros" class="link link--active">Sobre nosotros</a>
                    <a href="find-result.php" class="link link--active">Estudiante</a>
                    <a href="dashboard.php" class="link link--active">Admin</a>
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


        <section class="container hero__main" id="Inicio">  
            <div class="hero__textos">
                <h1 class="title">Instituto Nacional <span class="title--active">Tecnico Industrial</span></h1> 
                <p class="copy">Lleva tu educación al <span class="copy__active">siguiente nivel</span></p>
                <a href="matricula.php" class="cta">Matriculate ya</a>
            </div>
            <img src="img/logo instituto_Mesa de trabajo 1.png" class="mockup">
        </section>
    </header>

    <main>

        
    <section class="py-5 about"> 
  <div class="custom-contenedor">
    <div class="custom-row">
      <div class="custom-col-left">
        <h3 class="custom-title">Noticias</h3>
        <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" class="custom-marquee">
          <ul class="custom-list">
            <?php $sql = "SELECT * from tblnotice";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount() > 0) {
              foreach($results as $result) { ?>                      
              <li>
                <a href="notice-details.php?nid=<?php echo htmlentities($result->id); ?>" target="_blank" class="text-dark">
                  <?php echo htmlentities($result->noticeTitle); ?>
                </a>
              </li>
              <?php } } ?>
          </ul>
        </marquee>
      </div>
      <div class="swiper-container background">
            <!-- Wrapper for slides -->
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="img2/noticias.jpg" class="background__img">
                    <div class="background__text">
                        <h3 class="background__title">Ya inicio nuestra open house</h3>
                        <p class="background__copy">Visítanos en nuestras instalaciones</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="img2/p_slider.png" class="background__img">
                    <div class="background__text">
                        <h3 class="background__title">Próximo evento: Expo inti</h3>
                        <p class="background__copy">25 y 26 de octubre</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="img2/p2_slider.png" class="background__img">
                    <div class="background__text">
                        <h3 class="background__title">Próximo evento: Expo inti</h3>
                        <p class="background__copy">25 y 26 de octubre</p>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                <img src="img2/p3_slider.png" class="background__img">
                <div class="background__text">
                    <h3 class="background__title">Próximo evento: Expo inti</h3>
                    <p class="background__copy">25 y 26 de octubre</p>
                </div>
            </div>
            </div>
            <!-- Add Pagination (optional) -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
  </div>
</section>


<!-- parte normal sin modificacion-->

        <section class="services" id="Especialidades">
            <div class="container">
                <h2 class="subtitle">Nuestras Especialidades<span class="point"></span></h2>
                <p class="copy__section">Ofrecemos una variedad de especialidades técnicas</p>
        
                <article class="container-cards">
                    <div class="card">
                        <img src="img/image3.jpg" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Desarrollo de Software</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Formación en programación y desarrollo de sistemas para crear soluciones tecnológicas innovadoras.</p>
                            <a href="#" class="card__button" data-modal="modal-ds">Ver más información</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Sistemas Electricos.jpg" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Sistemas Eléctricos</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Formación en instalación y mantenimiento de sistemas eléctricos residenciales e industriales.</p>
                            <a href="#" class="card__button" data-modal="modal-se">Ver más información</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/mecanica.jpg" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Mecánica Industrial</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Desarrollo de habilidades para el mantenimiento y reparación de maquinaria industrial.</p>
                            <a href="#" class="card__button" data-modal="modal-MI">Ver más información</a>
                        </div>
                    </div>
                </article>
        
                <article class="container-cards">
                    <div class="card">
                        <img src="img/itsi.png" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Infraestructura Tecnológica y Sistemas Informáticos</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Formación en gestión de redes, servidores y soporte técnico para infraestructuras tecnológicas.</p>
                            <a href="#" class="card__button" data-modal="modal-it">Ver más información</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/Automotriz.jpg" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Mantenimiento Automotriz</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Capacitación en diagnóstico, mantenimiento y reparación de vehículos automotrices para usos cotidianos.</p>
                            <a href="#" class="card__button" data-modal="modal-ma">Ver más información</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="img/electro.jpg" class="card__img">
                        <div class="cards__text">
                            <p class="card__list">Electrónica</p>
                            <h3 class="card__title"><span class="point"></span></h3>
                            <p class="card__copy">Estudios en diseño y mantenimiento de circuitos electrónicos para diversas aplicaciones.</p>
                            <a href="#" class="card__button" data-modal="modal-el">Ver más información</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        
        <!-- Modales -->
        <div id="modal-ds" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-ds">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_ds_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Desarrollo de Software, aprenderá a utilizar un enfoque científico, moderno y estandarizado para realizar todas las etapas del proceso de Software, con el propósito de diseñar y desarrollar sistemas de software complejos.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades que necesita para elaborar software que pueda ser ejecutado en diferentes sistemas operativos y dispositivos, incluyendo las aplicaciones de escritorio, aplicaciones Web, aplicaciones para sistemas electrónicos embebidos y aplicaciones móviles para Smartphone y Tablet. Utilizando para ello, metodologías, lenguajes de programación, técnicas, entornos de trabajo y herramientas de última generación para el desarrollo de software de calidad y a gran escala, demandados por la industria del software a nivel local e internacional.</p>
                  <br>
                  <p class="parrafo">Trabajará con una amplia gama de sistemas de software, desde programas de cálculo, páginas Web, aplicaciones de comercio electrónico, sistemas de gestión y administración de la información orientadas a Internet, bases de datos transaccionales, programación de videojuegos, hasta aplicaciones científicas y de negocios. Desarrollará estas aplicaciones para una gran variedad de sectores, como: el industrial, finanzas, agrícola, salud, turismo, entretenimiento, telecomunicaciones, entre muchos otros.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante al ingresar a la carrera Desarrollo de Software posee un interés especial por el desarrollo de sistemas de software, aplicación de las matemáticas y la computación para proponer e implementar soluciones de software.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: motivación sólida para el estudio de la programación, hábitos para el estudio permanente sobre nuevas tecnologías de desarrollo de software, correcta expresión oral y escrita, analizar y sintetizar problemas prácticos y de la vida real.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul>
                    <li>Utilizar lenguajes de programación estructurada y orientada a objetos.</li>
                    <li>Emplear herramientas de diseño gráfico.</li>
                    <li>Desarrollar aplicaciones para Web y Multimedia.</li>
                    <li>Utilizar gestores de bases de datos y tecnologías de sistemas operativos de red.</li>
                    <li>Diseñar redes informáticas.</li>
                    <li>Aplicar técnicas de investigación y elaborar planes de negocio.</li>
                  </ul>
                  <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul>
                    <li>Desarrollador de Sistemas de Información.</li>
                    <li>Desarrollador de Aplicaciones Web.</li>
                    <li>Asesor y / o Consultor en el Área de Informática.</li>
                    <li>Técnico de Soporte de Software de Oficina.</li>
                    <li>Análisis de Sistemas.</li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
          

        <div id="modal-se" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-se">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_el_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Sistemas Eléctricos, aprenderá a utilizar un enfoque científico, moderno y estandarizado para realizar todas las etapas del proceso de instalación, mantenimiento y mejora de sistemas eléctricos, con el propósito de diseñar, implementar y asegurar el funcionamiento óptimo de instalaciones eléctricas complejas.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades que necesita para trabajar con sistemas eléctricos que puedan ser aplicados en diversas áreas, como la distribución y transmisión de energía, automatización de procesos industriales, instalaciones residenciales, comerciales e industriales, así como en la integración de energías renovables. Utilizando para ello, herramientas avanzadas, equipos especializados y normas de seguridad que garanticen el desarrollo de sistemas eléctricos eficientes y seguros, demandados por la industria eléctrica tanto a nivel local como internacional.</p>
                  <br>
                  <p class="parrafo">Trabajará con una amplia gama de sistemas eléctricos, desde instalaciones de baja, media y alta tensión, sistemas de generación de energía eléctrica, automatización industrial, redes de distribución eléctrica, hasta el mantenimiento de instalaciones en el sector residencial, comercial e industrial. Desarrollará estos sistemas para una gran variedad de sectores, como: el industrial, energético, de telecomunicaciones, automotriz, construcción, entre muchos otros.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante al ingresar a la carrera de Sistemas Eléctricos posee un interés especial por el funcionamiento y desarrollo de sistemas eléctricos, aplicación de principios de física y matemáticas, así como por la integración de nuevas tecnologías de energía renovable y automatización.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: motivación sólida para el estudio de los sistemas eléctricos, hábitos de estudio continuo sobre nuevas tecnologías en el campo eléctrico, correcta interpretación de planos y diagramas eléctricos, capacidad para trabajar en equipo y resolver problemas prácticos en instalaciones reales.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul>
                    <li>Diseñar, instalar y mantener sistemas eléctricos de baja, media y alta tensión.</li>
                    <li>Interpretar planos eléctricos y utilizar herramientas de medición para el diagnóstico de fallas en instalaciones eléctricas.</li>
                    <li>Aplicar normas de seguridad eléctrica en instalaciones residenciales, comerciales e industriales.</li>
                    <li>Utilizar equipos y tecnologías avanzadas para la automatización de procesos eléctricos e industriales.</li>
                    <li>Integrar fuentes de energía renovable en sistemas eléctricos.</li>
                    <li>Desarrollar soluciones innovadoras para la eficiencia energética y optimización de recursos eléctricos.</li>
                  </ul>
                  <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul>
                    <li>Técnico en instalaciones eléctricas residenciales, comerciales e industriales.</li>
                    <li>Especialista en mantenimiento de sistemas eléctricos de alta tensión.</li>
                    <li>Asesor y / o Consultor en proyectos de automatización eléctrica.</li>
                    <li>Instalador de sistemas de energía solar y otras fuentes de energía renovable.</li>
                    <li>Técnico en redes de distribución eléctrica.</li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
        
        <div id="modal-MI" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-MI">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_meca_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Mecánica Industrial, aprenderá a utilizar herramientas técnicas y científicas para el diseño, fabricación, instalación, mantenimiento y reparación de maquinaria y sistemas mecánicos que se emplean en la industria moderna. Esta especialidad le proporcionará una formación sólida en procesos de manufactura, mantenimiento preventivo y correctivo de equipos, así como la optimización de sistemas industriales.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades necesarias para interpretar planos mecánicos, utilizar software de diseño asistido por computadora (CAD), y operar maquinaria de alta precisión. Asimismo, aprenderá sobre el funcionamiento y mantenimiento de sistemas hidráulicos, neumáticos, y mecánicos, esenciales en la producción industrial y en sectores como la automoción, la energía y la manufactura avanzada.</p>
                  <br>
                  <p class="parrafo">Trabajará en una amplia gama de áreas industriales, desde el mantenimiento de maquinaria en plantas de producción, hasta la supervisión de procesos de manufactura y ensamblaje. Su rol será fundamental para asegurar que los sistemas productivos operen con la máxima eficiencia y seguridad, contribuyendo a la mejora continua de los procesos industriales.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante que ingrese a la carrera de Mecánica Industrial deberá tener interés en el funcionamiento de maquinaria, la innovación en procesos de producción, y el uso de herramientas tecnológicas para la optimización de sistemas industriales.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: habilidades técnicas para resolver problemas mecánicos, capacidad de trabajo en equipo, disposición para realizar tareas manuales y de supervisión, y motivación para adaptarse a tecnologías emergentes en el ámbito industrial.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul> 
                    <li>Interpretar planos y diagramas mecánicos para el diseño y ensamblaje de equipos industriales.</li> 
                    <li>Operar y mantener maquinaria industrial de alta precisión.</li> 
                    <li>Realizar mantenimiento preventivo y correctivo en sistemas mecánicos, hidráulicos y neumáticos.</li> <li>Aplicar técnicas de mecanizado y soldadura en la fabricación de piezas y equipos.</li>
                    <li>Supervisar y optimizar procesos productivos en plantas industriales.</li> <li>Utilizar software de diseño y simulación para mejorar procesos mecánicos.</li> 
                </ul>
                <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul> 
                    <li>Técnico de mantenimiento industrial en plantas de producción.</li>
                    <li>Supervisor de maquinaria y procesos de manufactura.</li> 
                    <li>Diseñador y montador de sistemas mecánicos en instalaciones industriales.</li> 
                    <li>Asesor y / o Consultor técnico en maquinaria industrial y procesos productivos.</li> 
                    <li>Operador especializado en sistemas hidráulicos y neumáticos.</li> 
                </ul>
                </div>
              </div>
            </div>
        </div>

        
        <div id="modal-it" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-it">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_itsi_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Infraestructura Tecnológica y Sistemas Informáticos, aprenderá a diseñar, implementar y gestionar soluciones tecnológicas que aseguren la operación eficiente de sistemas informáticos y redes de comunicación. Este enfoque moderno y sistematizado abarca desde la planificación de infraestructuras hasta la administración de servidores y dispositivos de red, garantizando la seguridad y el óptimo desempeño de los sistemas.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades necesarias para gestionar infraestructuras tecnológicas, desde redes locales hasta servicios en la nube. Se formará en el uso de herramientas avanzadas para la configuración y administración de servidores, el monitoreo del rendimiento de redes y sistemas, y la implementación de políticas de seguridad informática que protejan la integridad y disponibilidad de los datos.</p>
                  <br>
                  <p class="parrafo">Trabajará con una amplia gama de tecnologías y herramientas informáticas, abarcando desde redes LAN/WAN, servidores, almacenamiento en la nube, y soluciones de virtualización, hasta sistemas de seguridad avanzada. Estos conocimientos serán demandados en sectores como: la banca, telecomunicaciones, salud, educación, industria manufacturera, entre muchos otros.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante al ingresar a la carrera de Infraestructura Tecnológica y Sistemas Informáticos deberá mostrar interés en la gestión de redes de datos, seguridad informática y la implementación de tecnologías innovadoras en entornos empresariales.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: capacidad para solucionar problemas técnicos de manera eficiente, sólida comprensión de la arquitectura de sistemas informáticos, interés por la innovación tecnológica, habilidades de comunicación y trabajo en equipo, y disposición para mantenerse actualizado en nuevas tecnologías.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul> 
                    <li>Diseñar, instalar y mantener redes de comunicación de datos y sistemas informáticos.</li> 
                    <li>Configurar y gestionar servidores, equipos de red y dispositivos de seguridad informática.</li> <li>Implementar soluciones de virtualización y administración de infraestructuras en la nube.</li> <li>Realizar el mantenimiento preventivo y correctivo de equipos informáticos y periféricos.</li> 
                    <li>Desarrollar e implementar políticas de seguridad y recuperación ante desastres para sistemas informáticos.</li> 
                    <li>Monitorear el rendimiento de redes y sistemas para garantizar su disponibilidad y eficiencia.</li> 
                </ul> 
                <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul> 
                    <li>Administrador de redes y sistemas informáticos.</li> 
                    <li>Especialista en soporte técnico y mantenimiento de infraestructura tecnológica.</li> 
                    <li>Asesor y / o Consultor en seguridad informática y redes.</li> 
                    <li>Técnico en instalación y configuración de servidores y sistemas de almacenamiento.</li> 
                    <li>Desarrollador de soluciones de infraestructura en la nube y virtualización.</li> 
                </ul>
                </div>
              </div>
            </div>
        </div>
        
        <div id="modal-ma" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-ma">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_auto_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Mantenimiento Automotriz, aprenderá a diagnosticar, reparar y mantener los sistemas mecánicos y electrónicos de los vehículos modernos. Este enfoque técnico y actualizado cubre desde motores de combustión interna, sistemas de frenos y suspensiones, hasta los componentes eléctricos y electrónicos que controlan la operación de los vehículos.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades necesarias para realizar mantenimientos preventivos y correctivos, utilizando equipos de diagnóstico avanzados, técnicas de reparación y procedimientos para asegurar que los vehículos operen de manera segura y eficiente. Además, se enfocará en el uso de tecnologías que permitan la optimización de recursos y el cumplimiento de estándares ambientales.</p>
                  <br>
                  <p class="parrafo">Trabajará con una amplia variedad de vehículos y sistemas automotrices, desde automóviles convencionales hasta vehículos eléctricos e híbridos. Estos conocimientos serán aplicables en sectores como el transporte, la industria automotriz, talleres de reparación, concesionarias, entre otros.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante al ingresar a la carrera de Mantenimiento Automotriz deberá mostrar interés en la mecánica automotriz, las nuevas tecnologías aplicadas a los vehículos, y en los procesos de diagnóstico y reparación de sistemas automotrices.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: habilidades manuales para realizar trabajos de precisión, capacidad de análisis para diagnosticar problemas mecánicos y eléctricos, interés por la tecnología automotriz, y disposición para trabajar en equipo y bajo presión.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul> 
                    <li>Diagnosticar fallas en los sistemas mecánicos y electrónicos de los vehículos.</li> 
                    <li>Realizar el mantenimiento preventivo y correctivo de vehículos convencionales, híbridos y eléctricos.</li> 
                    <li>Utilizar herramientas y equipos de diagnóstico automotriz avanzados.</li> <li>Reparar y ajustar motores, sistemas de transmisión, frenos, dirección y suspensión.</li> 
                    <li>Aplicar normas de seguridad y ambientales en los procesos de mantenimiento automotriz.</li> <li>Interpretar manuales técnicos y esquemas eléctricos y electrónicos de los vehículos.</li> 
                </ul> 
                <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul> 
                    <li>Técnico en mantenimiento y reparación de vehículos.</li> 
                    <li>Diagnóstico y ajuste de motores de combustión interna y sistemas electrónicos.</li>
                    <li>Asesor y / o Consultor técnico en el área automotriz.</li> 
                    <li>Supervisor de mantenimiento en flotas de transporte.</li> 
                    <li>Especialista en mantenimiento de vehículos híbridos y eléctricos.</li> 
                </ul>
                </div>
              </div>
            </div>
        </div>
        
        <div id="modal-el" class="modal">
            <div class="modal-content">
              <span class="close" data-close="modal-el">&times;</span>
          
              <div class="modal-body">
                <!-- Columna izquierda con la imagen -->
                <div class="modal-left">
                  <img src="img/coco_elc_blanco.jpg" alt="Descripción de la imagen" class="modal-image">
                </div>
          
                <!-- Columna derecha con el contenido -->
                <div class="modal-right">
                  <h2 class="sobre-nosotros">Sobre la especialidad</h2>
                  <hr>
                  <br>
                  <p class="parrafo">Al estudiar Electrónica, aprenderá a analizar, diseñar y reparar circuitos electrónicos y dispositivos que se utilizan en una variedad de sectores, desde telecomunicaciones y automatización hasta sistemas de control y dispositivos médicos. Esta especialidad le proporcionará un enfoque teórico y práctico que le permitirá enfrentar los desafíos tecnológicos del futuro.</p>
                  <br>
                  <p class="parrafo">Desarrollará las habilidades necesarias para comprender el funcionamiento de componentes electrónicos como transistores, diodos, resistencias, y circuitos integrados, aplicándolos en sistemas de control, automatización y equipos electrónicos. Utilizará herramientas de diagnóstico y programación para mantener y mejorar sistemas electrónicos complejos, asegurando su eficiencia y funcionalidad.</p>
                  <br>
                  <p class="parrafo">Trabajará con una amplia gama de sistemas y dispositivos electrónicos, desde microcontroladores y PLCs (Controladores Lógicos Programables) hasta sistemas de comunicaciones y automatización industrial, participando en sectores como el manufacturero, telecomunicaciones, y tecnología de consumo, entre otros.</p>
                  <br>
                  <p class="parrafo">Interés: El(la) estudiante al ingresar a la carrera de Electrónica deberá mostrar interés por la tecnología, la automatización y el diseño de circuitos electrónicos, con un enfoque en la innovación y la mejora de sistemas.</p>
                  <br>
                  <p class="parrafo">Cualidades y actitudes: habilidades analíticas para resolver problemas técnicos, creatividad para diseñar soluciones innovadoras, capacidad de adaptación a nuevas tecnologías, y disposición para trabajar en equipo en proyectos electrónicos complejos.</p>
                  <br>
                  <h3 class="sobres-nosotros">Principales competencias</h3>
                  <ul> 
                    <li>Diseñar y analizar circuitos electrónicos para diversas aplicaciones.</li> 
                    <li>Instalar y mantener sistemas de control y automatización industrial.</li> <li>Configurar y programar microcontroladores y dispositivos electrónicos embebidos.</li> 
                    <li>Realizar diagnósticos y reparaciones en equipos electrónicos y de telecomunicaciones.</li> 
                    <li>Aplicar técnicas de medición y control de calidad en procesos electrónicos.</li> 
                    <li>Utilizar herramientas de simulación para la optimización de circuitos electrónicos.</li> 
                </ul> 
                <br>
                  <h3 class="sobres-nosotros">Posibles ocupaciones de trabajo</h3>
                  <ul> 
                    <li>Técnico en reparación y mantenimiento de equipos electrónicos.</li> <li>Diseñador de sistemas de control electrónico y automatización.</li> <li>Especialista en telecomunicaciones y redes de comunicación.</li> 
                    <li>Asesor y/o Consultor técnico en sistemas electrónicos y automatización.</li> 
                    <li>Ingeniero de soporte técnico en empresas tecnológicas.</li> 
                </ul>
                </div>
              </div>
            </div>
        </div>
        
        <section class="testimony" id="Nosotros">
            <div class="container">
                <h2 class="subtitle">Sobre nosotros</h2>
                <p class="copy__section">Conoce mas a cerca de nuestra institucion</p>

                <div class="testimony-container">
                    <div class="testimony__card">
                        <div class="testimony__text">
                            <h1>Nuestra mision</h1>
                            <p class="testimony__history">Somos una institución, responsable, en la formación de Bachilleres Técnicos  Vocacionales, en las diferentes especialidades industriales; contribuimos a la  formación integral de los y las jóvenes; al bienestar social del la comunidad; al  desarrollo tecnológico; buscando la capacitación continua de nuestro recurso  humano y fortalecemos al país en el desarrollo económico, social y cultural.</p>
                        </div>
                    </div>

                    <div class="testimony__card">
                        <div class="testimony__text">
                            <h1>Nuestra vision</h1>
                            <p class="testimony__history">Ser una institución educativa de carácter público, líder en la formación de  Bachilleres Técnicos Vocacionales, capaces de integrarse a la sociedad y la  industria con eficiencia y calidad, con reconocimiento nacional e internacional.</p>
                        </div>
                    </div>

                    <div class="testimony__card">
                        <div class="testimony__text">
                            <h1>Acerca de</h1>
                            <p class="testimony__history">El Instituto Nacional Técnico Industrial nació el 26 de octubre de 1954, como respuesta a la  necesidad de formar personal calificado y con calidad que contribuyera al desarrollo  industrial del país. 

                                En la actualidad, el INTI forma Bachilleres Técnicos-Vocacionales quienes, al  finalizar sus tres años de estudio diurno, pueden incorporarse a la fuerza productiva  del país o continuar con sus estudios tecnológicos o universitarios.”</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="email container container--modifier">
            <h2 class="subtitle subtitle--modifier">Somos tu mejor opción para continuar tus estudios tecnicos<span class="point">.</span></h2>

            <p class="copy__section copy__section--modifier">Los estudiantes de las diferentes áreas tienen la oportunidad de trabajar y colaborar en un mismo espacio y llevar a cabo proyectos multidisciplinares, además de forjar contactos que se mantendrán más allá de los estudios.</p>

            <div class="check">
                <div class="check__item">
                    <i class='bx bx-check' ></i>
                    <div class="check__numbers">
                        <p class="check__number">6 carreras tecnicas</p>
                        <p class="check__copy">Carreras demandadas</p>
                    </div>
                </div>
                <div class="check__item">
                    <i class='bx bx-check' ></i>
                    <div class="check__numbers">
                        <p class="check__number">+70 años</p>
                        <p class="check__copy">Mas de 70 años educando</p>
                    </div>
                </div>
                <div class="check__item">
                    <i class='bx bx-check' ></i>
                    <div class="check__numbers">
                        <p class="check__number">+700 estudiantes</p>
                        <p class="check__copy">Mas de 700 estudiantes por año</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
            </section>
            <section class="get-email">
                <h3 class="title__footer">¿Estás listo para estudiar con nosotros?</h3>
                <form class="newsletter newsletter--modifier">
                    <input type="text" class="newsletter__input" placeholder="Ingresa tu email para mas info.">
                    <input type="submit" class="newsletter__submit" value="Comienza hoy">
                </form>
            </section>
        </div>

        <!--<div class="contact">
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
        </div>-->
    </footer>
    <script src="./script.js"></script>
    <script src="boton.js"></script>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Obtener todos los botones que abren modales
    const openModalBtns = document.querySelectorAll(".card__button");
    const closeModalBtns = document.querySelectorAll(".close");

    // Función para abrir el modal
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add("show");
            setTimeout(() => {
                modal.style.opacity = 1; // Aumentar la opacidad con retraso
            }, 10); // Pequeño retraso para asegurar que se aplique la transición
        }
    }

    // Función para cerrar el modal
    function closeModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.style.opacity = 0; // Disminuir la opacidad
            setTimeout(() => {
                modal.classList.remove("show");
            }, 400); // Esperar a que la transición de opacidad termine antes de ocultarlo
        }
    }

    // Mostrar el modal cuando se hace clic en el botón
    openModalBtns.forEach(btn => {
        btn.addEventListener("click", function(event) {
            event.preventDefault(); // Evita el comportamiento por defecto
            const modalId = btn.getAttribute("data-modal");
            openModal(modalId);
        });
    });

    // Cerrar el modal cuando se hace clic en la "X"
    closeModalBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            const modalId = btn.getAttribute("data-close");
            closeModal(modalId);
        });
    });

    // Cerrar el modal si se hace clic fuera del contenido del modal
    window.addEventListener("click", function(event) {
        if (event.target.classList.contains("modal")) {
            closeModal(event.target.id);
        }
    });
});
</script>

<script>
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000,
      },
    });
</script>
  

</body>
</html>