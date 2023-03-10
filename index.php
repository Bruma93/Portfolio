<?php 
    $titulo = 'Jesús Martínez Bruque';
    require('resources/head.php');
?>
<body >
    <?php require('resources/body.php');?>
    <?php require('resources/nav.php');?>
<header class="d-flex align-items-center flex-column">

    <div class="container my-auto d-flex">
        <div class="me-auto col-6 d-none d-lg-block">
           
        </div>
        <div class="col d-flex flex-column justify-content-evenly" id="box-text-logo">
        <img id="logo-principal" class="d-none d-lg-block mb-5" src="resources/imgs/logo-dark.svg" width="200em" alt="Logo">
            <div>
                <h4>En pocas palabras soy</h4>
                <h1><b>Jesús Martínez Bruque</b></h1>
                <h4><span>Proto</span> Web Design | IOS Developers | Android Developer | Software Developer</h4>
            </div>
            <h3 id="changing-text" class="text-center visible"></h3>
        </div>
    </div>

</header>

<main id="portfolio" class="container section">
    <h2 class="text-center">Portfolio</h2>
    <div class="row d-flex justify-content-around">

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/AOVE_LaTaranta_desktop.webp" id="Aove" class="" alt="AOVE La Taranta" onclick="aovePortfolio()">
            </div>
            <div class="card-body">
                <h5 class="card-title">Web AOVE La Taranta</h5>
                <p class="card-text">Web realizada en Wordpress para una marca Local con el fin de aumentar su presencia en internet. Construida en Wordpress. Recursos obtenidos a través de Adobe Photoshop y Adobe Ilustrator</p>
                <p>Actualmente se encuentra a la espera de un rework debido a unas modificaciones realizadas por el cliente</p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/wordpress.png" alt="">
                    <img src="resources/imgs/Logos/Photoshop.png" alt="">
                    <img src="resources/imgs/Logos/Ilustrator.png" alt="">
                </div>
                <a href="#" class="btn btn-primary">Visitar web</a>
            </div>
        </div>

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/Web Personal 1.jpg" alt="..." id="" class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Portfolio (Rompiendo la cuarta pared)</h5>
                <p class="card-text">Desarrollo de esta web con el fin de <del>conseguir</del> mostrar mi <a href="https://media.tenor.com/H5qUIZvdWG0AAAAC/robin-hood-beggar.gif" target="_blank" rel="nofollow"><b>trabajo</b></a></p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/html.png" alt="">
                    <img src="resources/imgs/Logos/css-3.png" alt="">
                    <img src="resources/imgs/Logos/javascript.png" alt="">
                    <img src="resources/imgs/Logos/bootstrap.png" alt="">
                </div>
                <a href="#" class="btn btn-primary">Ver repositorio</a>
            </div class="postion-relative">
        </div>

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/" alt="..." id="" class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Calculadora IOS</h5>
                <p class="card-text">Aplicación de una calculadora realizada en XCode y programada en Swift</p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/swift.png" alt="">
                    <img src="resources/imgs/Logos/XCode.png" alt="">
                </div>
                <a href="#" class="btn btn-primary">Ver repositorio</a>
            </div>
        </div>

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/statFootball.webp"  alt="..." id="appFut" class="" onclick="appFutPortfolio()">
            </div> 
            <div class="card-body">
                <h5 class="card-title">App de resultados de futbol</h5>
                <p class="card-text">Aplicación realizada en Android Studio y desarrollada en Koltin. Para realizarla se uso la Api de <a href="https://www.football-data.org/" target="_blank" rel="nofollow">footbal-data</a></p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/kotlin.png" alt="">
                    <img src="resources/imgs/Logos/Android Studio.jpeg" alt="">
                </div>
                <a href="#" class="btn btn-primary">Ver repositorio</a>
            </div>
        </div>

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/Cabecera.webp"  alt="..." onclick="ilustacionPortfolio()" id="ilustraciones" class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Ilustraciones</h5>
                <p class="card-text">Diseños realizados en ilustrator con el único objetivo de desarrollar la creatividad y mejorar mi manejo con esta herramienta. </p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/Ilustrator.png" alt="">
                </div>
            </div>
        </div>

        <div class="card shadow_animation col-12 col-md-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/futbol_v1.webp" onclick="futbolPortfolio()" alt="..." id="futbol" class="">
            </div>
            <div class="card-body">
                <h5 class="card-title">Diseños temática fútbol</h5>
                <p class="card-text">Diseños realizados en photoshop con el único objetivo de desarrollar la creatividad y mejorar mi manejo con la herramienta. </p>
                <div class="tech_usadas d-flex">
                    <img src="resources/imgs/Logos/Photoshop.png" alt="">
                </div>
            </div>
        </div>
    </div>

</main>

<div id="lenguajes" class="container section">
    <h2 class="text-center mb-2">Lenguajes, tecnologías y...</h2>
    <h6 class="text-center pb-5">otras cosas bonitas</h6>
    <div class="row pt-0 pt-md-5">
        <div class="col-12 col-md-6">
            <p>Durante muchos años no he dejado de aprender. Desde que comencé realizando las primeras webs en Wordpress, siempre ha habido algo que me ha llamado la atención y me ha hecho querer aprender algo nuevo. <b>HTML y CSS, PHP y Javascript, Kotlin y Swift, etc.</b> !Soy una persona inquieta!</p>
            <p>Sin embargo esto también ha provocado que no me haya especializado en ninguna rama. <b>Front end, Back end, aplicaciones móviles...</b> ¿De verdad tengo que quedarme solo con una?</p>
            <p></p>
        </div>
        <div id="logos" class="row col-12 col-md-6 d-flex justify-content-around ps-5">
            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/javascript.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/html.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="HtML5">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/css-3.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="CSS3">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/php.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/swift.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Swift">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/kotlin.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Kotlin">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/vue.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Vue JS">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/laravel.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
            
            <img class="col-3 col-md-2 my-auto" src="resources/imgs/Logos/git.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Git">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/wordpress.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Wordpress">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/visualStudio.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Visual Studio">

            <img class="col-3 col-md-2 my-2" src="resources/imgs/Logos/Photoshop.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Photoshop">
        </div>
    </div>
    
</div>

<div id="experiencia" class="container section">
    <h2 class="text-center">Trayectoria Profesional</h2>
    <div id="trabajos" class="d-flex justify-content-around flex-wrap mb-2">
        <div id="benow" class="position-relative col-12 col-sm-5 me-5-sm">
            <h2>Social Media</h2>
            <h3>Benow Media</h3>
            <hr>
            <h5>Duración</h5>
            <p>Desde Septiembre 2021 - Actualidad</p>
            <hr>
            <h5>Descripción</h5>
            <p>Ocupé el puesto de Social Media. Gestión de Redes Sociales, Campañas, Webs en Wordpress, redacción de contenido SEO son solo algunas de las tareas que realizaba.</p>
            <hr>
            <h5>Funciones</h5>
            <ul>
                <li>Gestión de Redes Sociales</li>
                <li>Creación de contenido</li>
                <li>Redacción de contenido SEO</li> 
            </ul>
        </div>

        <div id="wom" class="position-relative col-12 col-sm-5">
            <h2>Social Media</h2>
            <h3>WOM Marketing</h3>
            <hr>
            <h5>Duración</h5>
            <p>Desde Diciembre 2018 - Noviembre 2020</p>
            <hr>
            <h5>Descripción</h5>
            <p>Ocupé el puesto de Social Media, aunque era un un poco el chico para todo. Gestión de Redes Sociales, Campañas, Webs en Wordpress, redacción de contenido SEO son solo algunas de las tareas que realizaba.</p>
            <hr>
            <h5>Funciones</h5>
            <ul>
                <li>Gestión de Redes Sociales</li>
                <li>Gestión de Campañas en Facebook Ads</li>            
                <li>Creación de contenido</li>
                <li>Creación de páginas web a través del CMR Wordpress</li>
                <li>Redacción de contenido SEO</li> 
            </ul>
        </div>

        <div id="wilcox" class="position-relative col-12 col-sm-5 me-5-sm">
            <h2>Maquetador Wordpress</h2>
            <h3>Wilcox Rocha</h3>
            <hr>
            <h5>Duración</h5>
            <p>Desde marzo 2018 - Octubre 2018</p>
            <hr>
            <h5>Descripción</h5>
            <p>Mi primer contacto con el mundo web. Durante el máster de marketing Digital entré en esta empresa. Me encargaba de desarrollar webs en wordpress siguiendo un diseño y en su posterior migración a los servidores del cliente.</p>
            <hr>
            <h5>Funciones</h5>
            <ul>
                <li>Maquetación de web en Wordpress</li>
                <li>Migración de sitios web</li>

            </ul>
        </div>

        <div id="expomoto" class="position-relative col-12 col-sm-5">
            <h2>Auxiliar de Contabilidad</h2>
            <h3>ExpoMoto</h3>
            <hr>
            <h5>Duración</h5>
            <p>Desde Febrero 2017 - Mayo 2017</p>
            <hr>
            <h5>Descripción</h5>
            <p>Realicé mis prácticas de la universidad en el departamento de contabilidad de una empresa familiar. Fue mi primera experiencia laboral. Me encargué únicamente de tareas contables. </p>
            <hr>
            <h5>Funciones</h5>
            <ul>
                <li>Balances</li>
                <li>Arqueos de caja</li>            
                <li>Gestión del archivo</li>
            </ul>
        </div>
    </div>
</div>

<div id="educacion" class="container section">
    <h2 class="text-center mb-5">Títulos académicos</h2>
    <div class="row pb-5">
        <div class="col-12 col-md-4 pb-3 text-center">
            <img src="resources/imgs/Estech_logo.png" alt="Logo Estech" class="pb-3 mx-auto" width="130px">
             <h4>Técnico de Desarrollo de Aplicaciones Multiplataforma en la escuela de technologías Es[Tech] | 2023 </h4>

        </div>
        <div class="col-12 col-md-4 pb-3 text-center">
            <img src="resources/imgs/UMA_logo.png" alt="Logo UMA" class="pb-3 mx-auto" width="130px">
            <h4>Máster en Gestión y Administración de Márketing Digital por la universidad de Málaga | 2019 </h4>
        </div>
        <div class="col-12 col-md-4 pb-3 text-center">
            <img src="resources/imgs/UJA.png" alt="Logo Uja" class="pb-3 mx-auto" width="130px">
            <h4>Grado en Administración y Dirección de Empresas por la universidad de Jaén | 2017 </h4>
        </div>
</div>
   
    <h3>Cursos Adicionales</h3>
    <img src="https://img.icons8.com/color/48/null/great-britain-circular.png"/><b>B1 de INGLÉS por Cambridge</b></br>
    <img src="https://img.icons8.com/color/48/null/under-computer.png"/> <b>Curso Google Analytics Advanced (Google)</b></br>
    <img src="https://img.icons8.com/color/48/null/under-computer.png"/> <b>INICIACIÓN A LA PROGRAMACIÓN WEB: PHP (Junta de andalucía)</b><br>
    <img src="https://img.icons8.com/color/48/null/man_reading_a_book.png"/><b>ANALÍTICA WEB PARA MEDIR RESULTADOS DE MARKETING (Nortempo)</b></br>
    <img src="https://img.icons8.com/color/48/null/man_reading_a_book.png"/><b>Curso Google Analytics Advanced (Google)Curso de Marketing Digital, aumenta tus conversiones y tu tráfico web, (Benowu)</b></br>
    <img src="https://img.icons8.com/color/48/null/paint-palette-with-brush.png"/><b>ADOBE PHOTOSHOP CS6 AVANZADO (Forinema)</b></br>
    <img src="https://img.icons8.com/color/48/null/paint-palette-with-brush.png"/><b>VII Curso De Extensión Universitaria En Diseño Gráfico: Marketing Creativo Y Creatividad Aplicada (UMA)</b></br>
    
</div>

<div id="contacto" class="container-fluid">   
    <div class="row justify-content-between">
        <div class="col-12 col-md-4 mb-5 mb-md-0">
            <h2 class="my-5 text-light">Contacto</h2>
            <h3 class="text-light">Email</h3>
            <a href="mailto:jmbcompra@gmail.com" class="">jmbcompra@gmail.com</a>
            <h3 class="text-light mt-5 mb-3">Redes Sociales</h3>
            <a href="https://www.linkedin.com/in/jesusmartinezbruque/" target="_blank"><img src="resources/imgs/linkedin-logo.png" alt="logo Linkedin"></a>
            <a href="https://github.com/Bruma93" target="_blank"><img src="resources/imgs/github.png" alt="Logo GitHub"></a>
        </div>
        <div class="col-12 col-md-7 p-0">
            <img src="resources/imgs/placeholder.jpg" alt="">
        </div>
    </div>
</div>

<footer class="container-fluid py-4">
    <hr class=" mx-5">
    <h6 class="text-light mb-0 text-center"> Jesús Bruma 2023 </h6>
</footer>

<script src="js/functions.js"></script>

</body>

</html>
