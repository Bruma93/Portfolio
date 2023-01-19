<?php 
    $titulo = 'Jesús Martínez Bruque';
    require('resources/head.php');
?>
<body >
    <?php require('resources/body.php');?>
    <?php require('resources/nav.php');?>
<header class="d-flex align-items-center flex-column">

<div class="container my-auto d-grid">
    <img class="mx-auto mw-100 mb-4" src="resources/imgs/logo.png" alt="Logo">
    <h3 id="changing-text" class="text-center visible"></h3>
</div>


</header>
<main id="portfolio" class="container section">
    <h2 class="text-center">Portfolio</h2>
    <div class="row d-flex justify-content-around">

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/AOVE_LaTaranta_deskopt.webp" class="" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="https://via.placeholder.com/400x400.png" class="" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div class="postion-relative">
        </div>

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="https://via.placeholder.com/400x400.png" class="" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/statFootball.webp"  alt="...">
            </div> 
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/Cabecera.webp" class="" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card shadow_animation col-5">
            <div class="position-relative card-caja">
                <img src="resources/imgs/futbol_v1.webp" class="" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

</main>

<div id="lenguajes" class="container section">
    <h2 class="text-center mb-2">Lenguajes, tecnologías y...</h2>
    <p class="text-center mb-5">otras cosas bonitas</p>
    <div class="row">
        <div class="col col-2-md">A</div>
        <div class="row col col-2-md d-flex justify-content-around">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/javascript.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/html.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="HtML5">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/css-3.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="CSS3">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/php.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/swift.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Swift">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/kotlin.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Kotlin">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/vue.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Vue JS">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/laravel.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/git.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Git">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/wordpress.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Wordpress">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/visualStudio.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Visual Studio">
            <img class="col-4 col-md-2 my-auto" src="resources/imgs/Logos/Photoshop.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Photoshop">
        </div>
    </div>
    
</div>

<div id="experiencia" class="container section">
    <h2 class="text-center mb-5">Trayectoria Profesional</h2>
</div>

<div id="educacion" class="container section">
    <h2 class="text-center mb-5">Trayectoria Académica</h2>
</div>

<div id="contacto" class="container-fluid">   
    <div class="row">
        <div class="col-4">
            <h2 class="my-5 text-light">Contacto</h2>
            <h3 class="text-light">Email</h3>
            <a href="mailto:jmbcompra@gmail.com" class="">jmbcompra@gmail.com</a>
            <h3 class="text-light mt-5 mb-3">Redes Sociales</h3>
            <a href="https://www.linkedin.com/in/jesusmartinezbruque/" target="_blank"><img src="resources/imgs/linkedin-logo.png" alt="logo Linkedin"></a>
            <a href="https://github.com/Bruma93" target="_blank"><img src="resources/imgs/github.png" alt="Logo GitHub"></a>
        </div>
        <div class="col-8">
            <img src="resources/imgs/placeholder.jpg" alt="">
        </div>
    </div>
</div>

<footer class="container-fluid bg-dark text-center">
    <h6 class="text-light py-4 mb-0"> Jesús Bruma 2023 </h6>
</footer>


<script src="js/functions.js"></script>

</body>

</html>
