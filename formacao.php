<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="webdoor-institucional formacao"></section>

<section class="institucional">
    <div class="row" style=>
        <div class="institucional--sidenav col-4 d-none d-md-flex justify-content-center">
            <ul>
                <li class="active">
                    <a href="/about.php">
                        O Instituto
                    </a>
                </li>
                <li>
                    <a href="">
                        Formação
                    </a>
                </li>
                <li>
                    <a href="">
                        Associação
                    </a>

                </li>
                <li>
                    <a href="">
                        Processo Seletivo
                    </a>
                </li>
            </ul>
        </div>
        <div class="institucional--select d-flex justify-content-center d-md-none col-12 px-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <i class="icon-arrow-carousel"></i>
                <select class="col-12 institucional--select-change" onchange="location = this.value;">
                    <option selected>O Instituto</option>
                    <option value="/">Formação</option>
                    <option value="2">Associação</option>
                    <option value="3">Processo Seletivo</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="institucional--container px-5">
                <h1 class="institucional--title">Instituto Durval Marcondes</h1>
                <span class="institucional--text">
                    <p>
                    Durval Bellegarde Marcondes, ao entrar em contato com as ideias de Sigmund Freud sobre a mente humana, pela leitura do artigo “Do delírio em geral”, escrito por Franco da Rocha e publicado em O Estado de São Paulo em 1919, organizou aos poucos um grupo de interessados na busca de conhecimento sobre a nova matéria. Em 1936 conseguiu trazer uma analista didata para São Paulo, a Doutora Adelheid Lucy Koch, referendada pela IPA, para iniciar as análises de acordo com as regras então propostas por esta instituição internacional.
 
                    <p>Aos 5 de Junho de 1944 Durval Marcondes, Adelheid Lucy Koch, Darcy de Mendonça Uchoa, Flávio Rodrigues Dias, Frank Julien Philips e Virgínia Leone Bicudo, formalizaram a fundação do Grupo Psychoanalytico de São Paulo. Nesta ocasião, o Grupo estabeleceu que seria criada uma Comissão de Ensino para organizar o estudo da Psicanálise, nos conformes estipulados pela International Psychoanalytical Association (IPA). Em 1951, por ocasião do XVII Congresso Internacional em Amsterdam, a IPA reconheceu como sua integrante a agora denominada Sociedade Brasileira de Psicanálise de São Paulo (SBPSP).
 
                    <p>Em setembro/outubro de 1958 foi fundado o Instituto de Psicanálise da SBPSP, que recebeu posteriormente, como justa homenagem, o nome de “Durval Marcondes”.   O Instituto é o órgão da SBPSP que coordena as atividades didáticas na finalidade de formar psicanalistas. Tais atividades compreendem: análise didática dos pretendentes à formação psicanalítica, organização de cursos teóricos, seminários clínicos, supervisões oficiais, e a instalação de Comissões formadas para apreciar os relatórios de membros filiados visando sua qualificação segundo o Regulamento do Instituto.
 
                    <p>O Instituto é composto pela sua Diretoria e pelos Corpos Docente e Discente. Compõem a Diretoria: o Diretor, o Secretário Geral, o Secretário de Seleção, o Secretário de Currículo, o Secretário de Acompanhamento, o Secretário de Análise de Crianças e Adolescentes e o Secretário Adjunto.
 
                    <p>A Comissão de Ensino é um órgão da SBPSP cujos componentes são eleitos em Assembléia Geral Ordinária e é coordenada pelo Diretor do Instituto, sendo constituída por membros efetivos, dos quais  sete são analistas didatas e cinco são professores. Também participam da Comissão todos os membros da Diretoria do Instituto, considerados membros natos e dois representantes do Corpo Discente, eleitos por seus pares.
 
                    <p>A Diretoria do Instituto e a Comissão de Ensino têm por finalidade refletir sobre a formação psicanalítica e estabelecer suas normas.
 
 
                    <p>SOBRE A FORMAÇÃO
 
                    <p>A formação psicanalítica é oferecida a médicos e psicólogos graduados, registrados nos respectivos Conselhos Regionais. A aceitação de profissionais graduados em outras áreas do conhecimento humano ficará a critério da Comissão de Ensino.
 
                    <p>Para ser aceito como pretendente à formação é necessário ser aprovado em processo de seleção descrito no site www.sbpsp.org.br 
                </span>
            </div>
        </div>
    </div>

</section>


<?php 

   include('footer.php');
    
?>