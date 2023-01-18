<?php 
    $titulo = 'Jesús Martínez Bruque';
    require('resources/head.php');
?>
<body class="container">
    <?php require('resources/body.php');?>
<header class="d-flex align-items-center flex-column">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img class="mw-100" src="resources/imgs/iconMenu.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#portfolio">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#experiencia">Experiencia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#educación">Educación</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>

                    <a href="resources/documents/CV Jesús Martínez bruque.pdf" class="btn btn-primary button-link ms-4" target="_blank">Descargar CV</a>
                </ul>
            </div>
        </div>
    </nav>
<div class="my-auto">
    <img class="mx-auto mw-100" src="resources/imgs/logo.png" alt="Logo">
</div>
<h3 id="changing-text" class="text-center visible"></h3>


</header>
<main id="portfolio" class="container">
    <h2 class="text-center mb-4">Portfolio</h2>
    <div class="row d-flex justify-content-around">
        <div class="card col-lg-8" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        <div class="card col-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    </div>

</main>

<div id="lenguajes" class="container">
    <h2 class="text-center mb-2">Lenguajes, tecnologías y...</h2>
    <p class="text-center">otras cosas bonitas</p>
    <div class="row d-flex justify-content-around">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/javascript.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="JavaScript">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/html.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="HtML5">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/css-3.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="CSS3">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/php.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="PHP">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/swift.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Swift">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/kotlin.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Kotlin">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/vue.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Vue JS">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/laravel.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Laravel">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/git.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Git">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/wordpress.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Wordpress">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/visualStudio.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Visual Studio">
        <img class="col-4 col-md-2 mb-2" src="resources/imgs/Logos/Photoshop.png" alt="" data-bs-toggle="tooltip" data-bs-placement="top" title="Photoshop">
    </div>
</div>

<div id="experiencia" class="container">
    <h2 class="text-center mb-5">Trayectoria Profesional</h2>
</div>

<div id="educacion" class="container">
    <h2 class="text-center mb-5">Trayectoria Académica</h2>
</div>

<div id="contacto" class="container">
    <h2 class="text-center mb-5">Contacto</h2>
</div>

<footer>
    
</footer>


<script src="js/functions.js"></script>

</body>

</html>
