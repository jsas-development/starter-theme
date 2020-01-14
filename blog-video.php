<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="artigo">
    <div class="container py-5">
        <span class="artigo--subtitle">Vídeo</span>
        <h1 class="artigo--title">
            Bacurau - O Brasil em Pontência
        </h1>
        <span class="artigo--subtitle">20 de Novembro de 2019 </span>
        <div class="row">
            <div class="col-12 my-5 p-0">
                <picture class="d-flex">
                    <source srcset="assets/images/bacurau-artigo.webp" type="image/webp">
                    <source srcset="assets/images/bacurau-artigo.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/bacurau-artigo.jpg" alt="Bacurau">
                </picture>
                <div class="artigo--video">
                    <a class="video-fancybox" href="https://www.youtube.com/embed/Z63o83ZM86k?autoplay=1">
                        <i class="icon-play"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 pb-5">
                <div class="artigo--text">
                    <hr>
                    <span>
                        Por <u>Sociedade Brasileira de Psicanálise de São Paulo</u><br>
                        Categoria: <u>Podcast</u>
                    </span>

                    <div class="d-flex py-3">
                        <a href="">ARTE</a>
                        <a href="">CINEMA</a>
                        <a href="">POLÍTICA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="artigos-relacionados">
    <div class="container">
        <div class="col-12 text-center">
            <h2 class="artigos-relacionados--title">Artigos relacionados</h2>
        </div>
        <div class="row py-5 mb-5">
            <div class="col-4">
                <a href="">
                    <picture>
                        <source srcset="assets/images/artigo-relacionado-1.webp" type="image/webp">
                        <source srcset="assets/images/artigo-relacionado-1.jpg" type="image/jpg"> 
                        <img class="card-img-top" src="assets/images/artigo-relacionado-1.jpg" alt="Bacurau">
                    </picture>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <picture>
                        <source srcset="assets/images/artigo-relacionado-2.webp" type="image/webp">
                        <source srcset="assets/images/artigo-relacionado-2.jpg" type="image/jpg"> 
                        <img class="card-img-top" src="assets/images/artigo-relacionado-2.jpg" alt="Bacurau">
                    </picture>
                </a>
            </div>
            <div class="col-4">
                <a href="">
                    <picture>
                        <source srcset="assets/images/artigo-relacionado-3.webp" type="image/webp">
                        <source srcset="assets/images/artigo-relacionado-3.jpg" type="image/jpg"> 
                        <img class="card-img-top" src="assets/images/artigo-relacionado-3.jpg" alt="Bacurau">
                    </picture>
                </a>
            </div>
        </div>
    </div>
</section>

<?php 

   include('footer.php');
    
?>