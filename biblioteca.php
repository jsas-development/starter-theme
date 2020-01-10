<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="webdoor-institucional webdoor-biblioteca"></section>

<section class="institucional">
    <div class="d-block d-md-flex">
        <div class="institucional--sidenav biblioteca--sidenav col-4 d-none d-md-flex justify-content-end px-0">
            <ul class="d-block nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <li class="active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-1">
                        Biblioteca
                        <i class="icon-arrow-carousel"></i>
                    </a>
                    <ul id="submenu-1" class="collapse">
                        <li>
                            <a id="v-pills-sobre-tab" class="sub-items nav-link p-0" data-toggle="pill" href="#v-pills-sobre" role="tab" aria-controls="v-pills-sobre" aria-selected="false">
                            <span>Sobre</span>
                            </a>
                        </li>
                        <li>
                            <a id="v-pills-regulamento-tab" class="sub-items nav-link p-0" data-toggle="pill" href="#v-pills-regulamento" role="tab" aria-controls="v-pills-regulamento" aria-selected="false">
                            <span>Regulamento</span>
                            </a>
                        </li>
                        <li>
                            <a class="sub-items" href="#">
                            <span>Novidades</span>
                            </a>
                        </li>
                        <li>
                            <a class="sub-items" href="#">
                            <span>Nosso acervo</span>
                            </a>
                        </li>
                    </ul>    
                </li>
                <li>
                    <a class="nav-link" id="v-pills-documentacao-tab" data-toggle="pill" href="#v-pills-documentacao" role="tab" aria-controls="v-pills-documentacao" aria-selected="false">
                        Divisão de Documentação
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#submenu-2">
                        Publicações
                        <i class="icon-arrow-carousel"></i>
                    </a>
                    <ul id="submenu-2" class="collapse">
                        <li>
                            <a id="v-pills-posts-tab" class="sub-items nav-link p-0" data-toggle="pill" href="#v-pills-posts" role="tab" aria-controls="v-pills-posts" aria-selected="false">
                                <span>Publicações</span>
                            </a>
                        </li>
                        <li>
                            <a id="v-pills-revista-tab" class="sub-items nav-link p-0" data-toggle="pill" href="#v-pills-revista" role="tab" aria-controls="v-pills-revista" aria-selected="false">
                                <span>Revista IDE</span>
                            </a>
                        </li>
                        <li>
                            <a class="sub-items" href="#">
                                <span>Jornal da Psicanálise</span>
                            </a>
                        </li>
                        <li>
                            <a class="sub-items" href="#">
                                <span>Revista Brasileira<br>de Psicanálise</span>
                            </a>
                        </li>
                        <li>
                            <a class="sub-items" href="#">
                                <span>Livros</span>
                            </a>
                        </li>
                    </ul> 
                </li>
            </ul>
        </div>

        <!--Inicio Versão Mobile -->
        <div class="institucional--select d-flex justify-content-center d-md-none col-12 px-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <i class="icon-arrow-carousel"></i>
                <select class="col-12 institucional--select-change" onchange="location = this.value;">
                    <option class="option" value="/biblioteca.php?biblioteca" selected>Biblioteca</option>
                    <option class="option" value="/biblioteca.php?divisao">Div. de Documentos</option>
                    <option class="option" value="/biblioteca.php?posts">Publicações</option>
                </select>
            </div>
        </div>
        <!--Fim Versão Mobile -->

        <div class="tab-content" id="v-pills-tabContent">

            <div id="v-pills-sobre" role="tabpanel" aria-labelledby="v-pills-sobre-tab" class="col-12 tab-pane fade show active">
                <div class="institucional--container px-5">
                    <h1 class="institucional--title">Sobre a Biblioteca</h1>
                    <span class="institucional--text">
                        <p>A Biblioteca Virginia Leone Bicudo iniciou suas atividades em junho de 1977. Especializada em Psicanálise e assuntos correlatos atende, prioritariamente, aos Membros da SBPSP e Membros Filiados ao Instituto de Psicanálise Durval Marcondes da SBPSP. Usuários externos podem consultar a Biblioteca no local ou On-Line.
                        <p>A Base de Dados PSIQUE - implantada a partir de novembro de  1989, inclui 70.540 registros, indexados analiticamente, dos documentos do acervo: Livros, Periódicos, Anais, Teses, Separatas, etc.
                        <p>Em 2005 tornou-se Centro Cooperante da ReBAP (Rede Brasileira de Bibliotecas da Área de Psicologia)  responsabilizando-se pela indexação on-line, na Base de Dados INDEXPSI, do Jornal de Psicanálise – publicação do Instituto de Psicanálise.
                    </span>
                    </p>
                </div>
            </div>

            <div id="v-pills-regulamento" role="tabpanel" aria-labelledby="v-pills-regulamento-tab" class="col-12 tab-pane fade">
                <div class="institucional--container px-5">
                    <h1 class="institucional--title">teste</h1>
                    <span class="institucional--text">
                        <p>asdasdasdasdad asd asdasdasd asdasd asd asd asd asd asd asdasd asd asd asd asd asd asd as das das das dasd a sd asdas dad as das das das dasd asd asdasdasd asd 
                        <p>asdasdasdasdad asd asdasdasd asdasd asd asd asd asd asd asdasd asd asd asd asd asd asd as das das das dasd a sd asdas dad as das das das dasd asd asdasdasd asd 
                        <p>asdasdasdasdad asd asdasdasd asdasd asd asd asd asd asd asdasd asd asd asd asd asd asd as das das das dasd a sd asdas dad as das das das dasd asd asdasdasd asd 
                    </span>
                    </p>
                </div>
            </div>

            <div id="v-pills-documentacao" role="tabpanel" aria-labelledby="v-pills-documentacao-tab" class="col-12 tab-pane fade">
                <div class="institucional--container px-5">
                    <h1 class="institucional--title">Divisão de Documentação e Pesquisa da História da Psicanalise</h1>
                    <span class="institucional--text">
                        <p>Durval Bellegarde Marcondes, ao entrar em contato com as ideias de Sigmund Freud sobre a mente humana, pela leitura do artigo “Do delírio em geral”, escrito por Franco da Rocha e publicado em O Estado de São Paulo em 1919, organizou aos poucos um grupo de interessados na busca de conhecimento sobre a nova matéria. Em 1936 conseguiu trazer uma analista didata para São Paulo, a Doutora Adelheid Lucy Koch, referendada pela IPA, para iniciar as análises de acordo com as regras então propostas por esta instituição internacional.
                        <p>Aos 5 de Junho de 1944 Durval Marcondes, Adelheid Lucy Koch, Darcy de Mendonça Uchoa, Flávio Rodrigues Dias, Frank Julien Philips e Virgínia Leone Bicudo, formalizaram a fundação do Grupo Psychoanalytico de São Paulo. Nesta ocasião, o Grupo estabeleceu que seria criada uma Comissão de Ensino para organizar o estudo da Psicanálise, nos conformes estipulados pela International Psychoanalytical Association (IPA). Em 1951, por ocasião do XVII Congresso Internacional em Amsterdam, a IPA reconheceu como sua integrante a agora denominada Sociedade Brasileira de Psicanálise de São Paulo (SBPSP).
                        <p>Em setembro/outubro de 1958 foi fundado o Instituto de Psicanálise da SBPSP, que recebeu posteriormente, como justa homenagem, o nome de “Durval Marcondes”.   O Instituto é o órgão da SBPSP que coordena as atividades didáticas na finalidade de formar psicanalistas. Tais atividades compreendem: análise didática dos pretendentes à formação psicanalítica, organização de cursos teóricos, seminários clínicos, supervisões oficiais, e a instalação de Comissões formadas para apreciar os relatórios de membros filiados visando sua qualificação segundo o Regulamento do Instituto.
                        <p>O Instituto é composto pela sua Diretoria e pelos Corpos Docente e Discente. Compõem a Diretoria: o Diretor, o Secretário Geral, o Secretário de Seleção, o Secretário de Currículo, o Secretário de Acompanhamento, o Secretário de Análise de Crianças e Adolescentes e o Secretário Adjunto.
                        <p>A Comissão de Ensino é um órgão da SBPSP cujos componentes são eleitos em Assembléia Geral Ordinária e é coordenada pelo Diretor do Instituto, sendo constituída por membros efetivos, dos quais  sete são analistas didatas e cinco são professores. Também participam da Comissão todos os membros da Diretoria do Instituto, considerados membros natos e dois representantes do Corpo Discente, eleitos por seus pares.
                        <p>A Diretoria do Instituto e a Comissão de Ensino têm por finalidade refletir sobre a formação psicanalítica e estabelecer suas normas.
                        <p>SOBRE A FORMAÇÃO
                        <p>A formação psicanalítica é oferecida a médicos e psicólogos graduados, registrados nos respectivos Conselhos Regionais. A aceitação de profissionais graduados em outras áreas do conhecimento humano ficará a critério da Comissão de Ensino.
                        <p>Para ser aceito como pretendente à formação é necessário ser aprovado em processo de seleção descrito no site www.sbpsp.org.br 
                    </span>
                    </p>
                </div>
            </div>

            <div id="v-pills-posts" role="tabpanel" aria-labelledby="v-pills-documentacao-tab" class="col-12 tab-pane fade">
                <div class="posts">
                    <div class="institucional--container p-0 px-md-5">
                        <h1 class="institucional--title">Publicações</h1>
                        <span class="institucional--text d-none d-md-block">
                            <p>Confira nossas últimas publicações.</p>
                        </span>
                        <span class="institucional--text d-block d-md-none">
                            <p>A Revista ide é uma publicação semestral da Sociedade Brasileira de Psicanálise de São Paulo, desde 1975, e tem como linha editorial o diálogo entre psicanálise e cultura.
                            <p>Contém uma significativa coletânea de trabalhos, entrevistas e resenhas que incluem psicanalistas e pensadores das diversas áreas do conhecimento - filósofos, literatos, antropólogos, artistas plásticos, sociólogos etc. -, nacionais e estrangeiros.
                            <p>A ide aceita trabalhos, independentemente de o autor ser filiado à instituição que a publica.
                        </span>
                        <div class="d-flex flex-column justify-content-between align-items-center">
                            <a class="btn-default" href="">Revista IDE</a>
                            <a class="btn-default" href="">Jornal de Psicanálise</a>
                            <a class="btn-default" href="">Revista da Psicanálise</a>
                        </div>
                        <div class="posts--content container">
                            <div class="posts--background"></div>
                            <div class="row mx-3">
                                <div class="col-md-4 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post1.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post1.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post1.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-md-4 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post2.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post2.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post2.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-md-4 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post3.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post3.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post3.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>  
                                    </a>
                                </div>
                                <div class="col-md-4 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post4.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post4.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post4.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="v-pills-revista" role="tabpanel" aria-labelledby="v-pills-revista-tab" class="col-12 tab-pane fade">
                <div class="posts">
                    <div class="institucional--container px-5">
                        <h1 class="institucional--title">Revista IDE</h1>
                        <span class="institucional--text">
                            <p>A Revista ide é uma publicação semestral da Sociedade Brasileira de Psicanálise de São Paulo, desde 1975, e tem como linha editorial o diálogo entre psicanálise e cultura.

                            <p>Contém uma significativa coletânea de trabalhos, entrevistas e resenhas que incluem psicanalistas e pensadores das diversas áreas do conhecimento - filósofos, literatos, antropólogos, artistas plásticos, sociólogos etc. -, nacionais e estrangeiros.

                            <p>A ide aceita trabalhos, independentemente de o autor ser filiado à instituição que a publica..
                        </span>
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <a class="btn-default" href="">CORPO DIRETIVO</a>
                            <a class="btn-default" href="">NORMAS DE PUBLICAÇÃO</a>
                            <a class="btn-default" href="">ASSINATURA/COMPRAR</a>
                        </div>
                        <div class="posts--revistas text-center">
                        <div class="row mx-3">
                                <div class="col-md-3 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post1.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post1.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post1.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-md-3 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post2.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post2.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post2.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                                <div class="col-md-3 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post3.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post3.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post3.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>  
                                    </a>
                                </div>
                                <div class="col-md-3 p-0">
                                    <a href="/">
                                        <picture>
                                            <source srcset="assets/images/latest-post4.webp" type="image/webp">
                                            <source srcset="assets/images/latest-post4.png" type="image/png"> 
                                            <img class="card-img-top latest-posts--img" src="assets/images/latest-post4.png" alt="Logo Sbpsp">
                                            <div class="latest-posts--img-opacity d-none d-md-flex">
                                                <span class="caption">
                                                    <b>Interpretações da Cultura</b><br>
                                                    Edição 78
                                                </span>
                                                <a href="/" class="link">leia mais</a>
                                            </div>
                                        </picture>
                                    </a>
                                </div>
                            </div>
                            <a class="btn-default" href="">VER EDIÇÕES ANTERIORES</a>
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