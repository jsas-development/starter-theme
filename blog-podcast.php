<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="artigo">
    <div class="container py-5">
        <span class="artigo--subtitle">Artigo</span>
        <h1 class="artigo--title">
            Episódio #3 | Bacurau - O Brasil em Pontência
        </h1>
        <span class="artigo--subtitle">20 de Novembro de 2019 </span>
        <div class="row">
            <div class="col-12 py-5">
                <picture>
                    <source srcset="assets/images/bacurau-artigo.webp" type="image/webp">
                    <source srcset="assets/images/bacurau-artigo.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/bacurau-artigo.jpg" alt="Bacurau">
                </picture>
            </div>
            <div class="col-12 p-3 p-md-5">
                <div class="artigo--text">
                    <p>Bacurau, longa metragem, dirigido pelos diretores pernambucanos Kleber Mendonça Filho e Juliano Dornelles, estreou no fim de agosto de 2019, nos cinemas do Brasil, depois de ter ganho o Prêmio do Júri no Festival de Cannes, e também eleito como o melhor filme do Festival de Cinema de Munique, na Alemanha, e do 23º Festival de Cinema de Lima, no Peru.
                        </p>
                    <div class="artigo--audio py-5">
                        <audio id="audio" controls>
                            <source src="assets/audio/teste.mp3" type="audio/ogg">
                            <source src="assets/audio/teste.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <hr>
                
                    <span>
                        Por <u>Sociedade Brasileira de Psicanálise de São Paulo</u><br>
                        Categoria: <u>Podcast</u>
                    </span>

                    <div class="d-flex flex-column flex-md-row py-3">
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
        <div class="row py-5 mb-5 d-none d-md-flex">
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
        <div class="row py-5 mb-5 d-flex d-md-none">
            <div class="col-12 col-md-6 my-3">
                <div class="position-relative">
                    <picture class="d-flex">
                        <source srcset="assets/images/caveira.webp" type="image/webp">
                        <source srcset="assets/images/caveira.jpg" type="image/jpg"> 
                        <img class="card-img-top"   src="assets/images/caveira.jpg" alt="Logo Sbpsp">
                    </picture>
                    <div class="page-blog--card-hover">
                        <span>10.11.19 | Por Heloisa Helena Sitrângulo Ditolvo </span>
                        <h2>Conversando com Shakespeare<br>e Freud</h2>
                        <div class="d-flex flex-row flex-wrap">
                            <a href="">CULTURA</a>
                            <a href="">PSICANÁLISE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-3">
                <div class="position-relative">
                    <picture class="d-flex">
                        <source srcset="assets/images/caveira.webp" type="image/webp">
                        <source srcset="assets/images/caveira.jpg" type="image/jpg"> 
                        <img class="card-img-top"   src="assets/images/caveira.jpg" alt="Logo Sbpsp">
                    </picture>
                    <div class="page-blog--card-hover">
                        <span>10.11.19 | Por Heloisa Helena Sitrângulo Ditolvo </span>
                        <h2>Conversando com Shakespeare<br>e Freud</h2>
                        <div class="d-flex flex-row flex-wrap">
                            <a href="">CULTURA</a>
                            <a href="">PSICANÁLISE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 my-3">
                <div class="position-relative">
                    <picture class="d-flex">
                        <source srcset="assets/images/caveira.webp" type="image/webp">
                        <source srcset="assets/images/caveira.jpg" type="image/jpg"> 
                        <img class="card-img-top"   src="assets/images/caveira.jpg" alt="Logo Sbpsp">
                    </picture>
                    <div class="page-blog--card-hover">
                        <span>10.11.19 | Por Heloisa Helena Sitrângulo Ditolvo </span>
                        <h2>Conversando com Shakespeare<br>e Freud</h2>
                        <div class="d-flex flex-row flex-wrap">
                            <a href="">CULTURA</a>
                            <a href="">PSICANÁLISE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

   include('footer.php');
    
?>