<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="webdoor">
    <div class="container">
        <div class="webdoor--menu row flex-nowrap justify-content-between align-items-center">
            <div class="logo-sbpsp col-md-2">
                <picture>
                    <source srcset="assets/images/logo.webp" type="image/webp">
                    <source srcset="assets/images/logo.png" type="image/png"> 
                    <img src="assets/images/logo.png" alt="Logo Sbpsp">
                </picture>
            </div>
            <div class="col-md-9">
                <nav class="nav align-items-center d-flex justify-content-end">
                    <a class="text-white" href="#">QUEM SOMOS</a>
                    <a class="text-white" href="#">FORMAÇÃO</a>
                    <a class="text-white" href="#">ATIVIDADES</a>
                    <a class="text-white" href="#">ESTUDOS E PESQUISAS</a>
                    <a class="text-white" href="#">ATENDIMENTO À COMUNIDADE</a>
                    <a class="text-white" href="#">BLOG</a>
                </nav>
            </div>
        </div>
        <div class="webdoor--content row flex-nowrap justify-content-between">
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h1 class="webdoor--title">
                   Sociedade Brasileira de<br>
                   Psicanálise de São Paulo 
                </h1>
                <i class="icon-arrow-down"></i>
            </div>
            <div class="col-md-4 d-flex justify-content-between align-items-center">
                <div class="webdoor--box">
                    <p>
                        Formação<br>
                        psicanálise<br>
                        na SBPSP<br>
                    </p>
                    <a class="btn-default" href="/inscricoes">
                        Inscrições abertas
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Próximos Eventos -->
<main class="next-events container">
    <div class="tab-blue-default"></div>
    <h2 class="next-events--title">Próximos eventos</h2>
    <div class="row">
        <div class="col-md-8 d-flex flex-wrap next-events--main">
            <div class="col-md-6">
              <div class="card mb-4">
                <picture>
                    <source srcset="assets/images/thumbnail-example.webp" type="image/webp">
                    <source srcset="assets/images/thumbnail-example.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/thumbnail-example.jpg" alt="Logo Sbpsp">
                </picture>
                <div class="card-body">
                    <div class="row d-flex px-4">
                        <span class="next-events--box-date">20<br>Nov</span>
                        <span class="next-events--box-title">Ciclo Cinema e<br>Psicanálise | Sem Amor</span>
                    </div>
                    <hr>
                    <div class="row d-flex px-4">
                        <span class="next-events--box-item"><i class="icon-time"></i>19 horas</span>
                        <span class="next-events--box-item"><i class="icon-location"></i>Museu Imagem e Som (MIS)</span>
                    </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="card mb-4">
                <picture>
                    <source srcset="assets/images/thumbnail-example.webp" type="image/webp">
                    <source srcset="assets/images/thumbnail-example.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/thumbnail-example.jpg" alt="Logo Sbpsp">
                </picture>
                <div class="card-body">
                    <div class="row d-flex px-4">
                        <span class="next-events--box-date">20<br>Nov</span>
                        <span class="next-events--box-title">Ciclo Cinema e<br>Psicanálise | Sem Amor</span>
                    </div>
                    <hr>
                    <div class="row d-flex px-4">
                        <span class="next-events--box-item"><i class="icon-time"></i>19 horas</span>
                        <span class="next-events--box-item"><i class="icon-location"></i>Museu Imagem e Som (MIS)</span>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4">
                <picture>
                    <source srcset="assets/images/thumbnail-example.webp" type="image/webp">
                    <source srcset="assets/images/thumbnail-example.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/thumbnail-example.jpg" alt="Logo Sbpsp">
                </picture>
                <div class="card-body">
                    <div class="row d-flex px-4">
                        <span class="next-events--box-date">20<br>Nov</span>
                        <span class="next-events--box-title">Ciclo Cinema e<br>Psicanálise | Sem Amor</span>
                    </div>
                    <hr>
                    <div class="row d-flex px-4">
                        <span class="next-events--box-item"><i class="icon-time"></i>19 horas</span>
                        <span class="next-events--box-item"><i class="icon-location"></i>Museu Imagem e Som (MIS)</span>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4">
                <picture>
                    <source srcset="assets/images/thumbnail-example.webp" type="image/webp">
                    <source srcset="assets/images/thumbnail-example.jpg" type="image/jpg"> 
                    <img class="card-img-top" src="assets/images/thumbnail-example.jpg" alt="Logo Sbpsp">
                </picture>
                <div class="card-body">
                    <div class="row d-flex px-4">
                        <span class="next-events--box-date">20<br>Nov</span>
                        <span class="next-events--box-title">Ciclo Cinema e<br>Psicanálise | Sem Amor</span>
                    </div>
                    <hr>
                    <div class="row d-flex px-4">
                        <span class="next-events--box-item"><i class="icon-time"></i>19 horas</span>
                        <span class="next-events--box-item"><i class="icon-location"></i>Museu Imagem e Som (MIS)</span>
                    </div>
                </div>
              </div>
            </div>
            <a class="btn-default" href="/">
                Ver todos
            </a>
        </div>

        <!-- Barra lateral -->
        <aside class="col-md-4 next-events--sidebar">
            <div class="next-events--sidebar--container">
                <div class="tab-blue-default"></div>
                <div class="p-3 mb-3 bg-light">
                    <h2 class="next-events--title py-4">Próximos cursos</h2>
                </div>
                <div class="p-3">
                    <div class="next-course">
                        <div class="next-course--item py-4">
                            <span class="next-course--date">
                                20/11 a 10/12
                            </span>
                            <a href="/" class="next-course--title">
                                Psicanálise da vincularidade de família e casal
                            </a>
                        </div>
                        <hr>
                        <div class="next-course--item py-4">
                            <span class="next-course--date">
                                20/11 a 10/12
                            </span>
                            <a href="/" class="next-course--title">
                                Psicanálise da vincularidade de família e casal
                            </a>
                        </div>
                        <hr>
                        <div class="next-course--item py-4">
                            <span class="next-course--date">
                                20/11 a 10/12
                            </span>
                            <a href="/" class="next-course--title">
                                Psicanálise da vincularidade de família e casal
                            </a>
                        </div>
                        <hr>
                        <div class="next-course--item py-4">
                            <span class="next-course--date">
                                20/11 a 10/12
                            </span>
                            <a href="/" class="next-course--title">
                                Psicanálise da vincularidade de família e casal
                            </a>
                        </div>
                        <a class="btn-default" href="/">
                            Ver todos
                        </a>
                    </div>
                </div>
            </div>
        </aside>

    </div>

</main>


<!-- últimas publicações -->
<section class="latest-posts">
    <div class="container">
        <h2 class="latest-posts--title">Confira as últimas publicações</h2>
        <div class="row">
            <div class="col-md-3">
                <picture>
                    <source srcset="assets/images/latest-post1.webp" type="image/webp">
                    <source srcset="assets/images/latest-post1.png" type="image/png"> 
                    <img class="card-img-top latest-posts--img" src="assets/images/latest-post1.png" alt="Logo Sbpsp">
                    <div class="latest-posts--img-opacity">
                        <span class="caption">
                            <b>Interpretações da Cultura</b><br>
                            Edição 78
                        </span>
                        <a href="/" class="link">leia mais</a>
                    </div>
                </picture>
            </div>
            <div class="col-md-3">
                <picture>
                    <source srcset="assets/images/latest-post2.webp" type="image/webp">
                    <source srcset="assets/images/latest-post2.png" type="image/png"> 
                    <img class="card-img-top latest-posts--img" src="assets/images/latest-post2.png" alt="Logo Sbpsp">
                    <div class="latest-posts--img-opacity">
                        <span class="caption">
                            <b>Interpretações da Cultura</b><br>
                            Edição 78
                        </span>
                        <a href="/" class="link">leia mais</a>
                    </div>
                </picture>
            </div>
            <div class="col-md-3">
                <picture>
                    <source srcset="assets/images/latest-post3.webp" type="image/webp">
                    <source srcset="assets/images/latest-post3.png" type="image/png"> 
                    <img class="card-img-top latest-posts--img" src="assets/images/latest-post3.png" alt="Logo Sbpsp">
                    <div class="latest-posts--img-opacity">
                        <span class="caption">
                            <b>Interpretações da Cultura</b><br>
                            Edição 78
                        </span>
                        <a href="/" class="link">leia mais</a>
                    </div>
                </picture>
            </div>
            <div class="col-md-3">
                <picture>
                    <source srcset="assets/images/latest-post4.webp" type="image/webp">
                    <source srcset="assets/images/latest-post4.png" type="image/png"> 
                    <img class="card-img-top latest-posts--img" src="assets/images/latest-post4.png" alt="Logo Sbpsp">
                    <div class="latest-posts--img-opacity">
                        <span class="caption">
                            <b>Interpretações da Cultura</b><br>
                            Edição 78
                        </span>
                        <a href="/" class="link">leia mais</a>
                    </div>
                </picture>
            </div>
        </div>
        <a href="/" class="btn-default">Ver todos</a>
    </div>
</section>

<!-- últimas publicações Twitter -->
<section class="latest-posts-twitter">
    <div class="container">
        <h2 class="latest-posts-twitter--title">Confira as últimas publicações</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="latest-posts-twitter--card d-flex flex-column justify-content-around align-items-center">
                    <i class="icon-twitter"></i>
                    <span class="latest-posts-twitter--user">@SBPSP</span>
                    <div>
                        <p class="latest-posts-twitter--text">Rafael Tinelli, Membro Filiado da SBPSP, propõe uma reflexão, 
                            a partir do fenômeno de João de Deus...</p>
                        <a href="https://wp.me/p4FPeU-nT">https://wp.me/p4FPeU-nT</a>
                    </div>
                    <span class="latest-posts-twitter--days">2 dias atrás</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-posts-twitter--card d-flex flex-column justify-content-around align-items-center">
                    <i class="icon-twitter"></i>
                    <span class="latest-posts-twitter--user">@SBPSP</span>
                    <div>
                        <p class="latest-posts-twitter--text">Rafael Tinelli, Membro Filiado da SBPSP, propõe uma reflexão, 
                            a partir do fenômeno de João de Deus...</p>
                        <a href="https://wp.me/p4FPeU-nT">https://wp.me/p4FPeU-nT</a>
                    </div>
                    <span class="latest-posts-twitter--days">2 dias atrás</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="latest-posts-twitter--card d-flex flex-column justify-content-around align-items-center">
                    <i class="icon-twitter"></i>
                    <span class="latest-posts-twitter--user">@SBPSP</span>
                    <div>
                        <p class="latest-posts-twitter--text">Rafael Tinelli, Membro Filiado da SBPSP, propõe uma reflexão, 
                            a partir do fenômeno de João de Deus...</p>
                        <a href="https://wp.me/p4FPeU-nT">https://wp.me/p4FPeU-nT</a>
                    </div>
                    <span class="latest-posts-twitter--days">2 dias atrás</span>
                </div>
            </div>
        </div>
        <a href="/" class="btn-default">Ver todos</a>
    </div>
</section>

<!-- Vídeos -->
<section class="videos">
    <div class="container">
        <h2 class="videos--title">Vídeos</h2>
        <div class="row">
            <div class="col-12 video-play">
                <div class="slider-for">
                    <a class="video-fancybox" href="https://www.youtube.com/embed/Z63o83ZM86k?autoplay=1">
                        <img width="100%" height="650" src="https://img.youtube.com/vi/LZGYdHV1KMc/0.jpg">
                    </a>
                    <a class="video-fancybox" href="https://www.youtube.com/embed/Z63o83ZM86k?autoplay=1">
                        <img width="100%" height="650" src="https://img.youtube.com/vi/LZGYdHV1KMc/1.jpg">
                    </a>
                    <a class="video-fancybox" href="https://www.youtube.com/embed/Z63o83ZM86k?autoplay=1">
                        <img width="100%" height="650" src="https://img.youtube.com/vi/GPPchsl96fc/0.jpg">
                    </a>
                </div>
                <div class="video-background d-flex align-items-center justify-content-center">
                    <i class="icon-play"></i>
                    <span>
                        Encontro sobre o Mal-Estar<br>
                        na Civilização: Poder
                    </span>
                </div>
            </div>
            <div class="col-12 video-nav">
                <div class="slider-nav">
                    <div class="col-12">
                        <picture>
                            <source srcset="assets/images/videos-example.webp" type="image/webp">
                            <source srcset="assets/images/videos-example.jpg" type="image/jpg"> 
                            <img class="card-img-top" src="assets/images/videos-example.jpg" alt="Logo Sbpsp">
                        </picture>
                    </div>
                    <div class="col-12">
                        <picture>
                            <source srcset="assets/images/videos-example.webp" type="image/webp">
                            <source srcset="assets/images/videos-example.jpg" type="image/jpg"> 
                            <img class="card-img-top" src="assets/images/videos-example.jpg" alt="Logo Sbpsp">
                        </picture>
                    </div>
                    <div class="col-12">
                        <picture>
                            <source srcset="assets/images/videos-example.webp" type="image/webp">
                            <source srcset="assets/images/videos-example.jpg" type="image/jpg"> 
                            <img class="card-img-top" src="assets/images/videos-example.jpg" alt="Logo Sbpsp">
                        </picture>
                    </div>
                    <div class="col-12">
                        <picture>
                            <source srcset="assets/images/videos-example.webp" type="image/webp">
                            <source srcset="assets/images/videos-example.jpg" type="image/jpg"> 
                            <img class="card-img-top" src="assets/images/videos-example.jpg" alt="Logo Sbpsp">
                        </picture>
                    </div>
                    <div class="col-12">
                        <picture>
                            <source srcset="assets/images/videos-example.webp" type="image/webp">
                            <source srcset="assets/images/videos-example.jpg" type="image/jpg"> 
                            <img class="card-img-top" src="assets/images/videos-example.jpg" alt="Logo Sbpsp">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="row">
        <div class="col-6 d-flex align-items-center flex-column justify-content-center">
            <div class="blog--container">
                <span>BLOG</span>
                <div class="blog--title">
                Conversando com<br>Shakespeare e Freud
                </div>
                <a href="" class="btn-default">Ver todos</a>
            </div>
        </div>
        <div class="col-6 blog--img">
        </div>
    </div>
</section>

<?php 

   include('footer.php');
    
?>