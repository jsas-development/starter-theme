<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="webdoor-institucional quem-somos"></section>

<section class="institucional">
    <div class="row" style=>
        <div class="institucional--sidenav col-4 d-none d-md-flex justify-content-center">
            <ul>
                <li class="active">
                    <a href="/about.php">
                        Quem somos
                    </a>
                </li>
                <li>
                    <a href="">
                        Corpo Diretivo
                    </a>
                </li>
                <li>
                    <a href="">
                        Equipe
                    </a>

                </li>
                <li>
                    <a href="">
                        Contato
                    </a>
                </li>
            </ul>
        </div>
        <div class="institucional--select d-flex justify-content-center d-md-none col-12 px-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <i class="icon-arrow-carousel"></i>
                <select class="col-12 institucional--select-change" onchange="location = this.value;">
                    <option selected>A Sociedade</option>
                    <option value="/">Corpo Diretivo</option>
                    <option value="2">Equipe</option>
                    <option value="3">Contato</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="institucional--container px-5">
                <h1 class="institucional--title">Quem somos</h1>
                <span class="institucional--text">
                    <p>A Sociedade Brasileira de Psicanálise de São Paulo existe desde 24 de novembro de 1927, tendo sido a primeira sociedade psicanalítica da América Latina.  Foi a primeira sociedade brasileira a ser reconhecida pela Associação Psicanalítica Internacional da qual é membro componente, assim como é da Federação Psicanalítica da América Latina e da Federação Brasileira de Psicanálise.
                    <p>Composta atualmente por 453 membros efetivos e associados da SBPSP e 307 membros filiados ao Instituto Durval Marcondes, a Sociedade de São Paulo busca manter o pluralismo psicanalítico teórico-clínico, a interação de psicanalistas com orientações diversas e também estimular
                    <p>estimular férteis diálogos com outras áreas do conhecimento e da cultura. Mantém um notável fluxo científico e permanente de publicações, como o Jornal de Psicanálise e a Revista ide.
                </span>
                </p>
                <h2 class="institucional--title">O reconhecimento</h2>
                <span class="institucional--text">
                    <p>A SBPSP tem sido reconhecida por sua destacada participação na evolução da Psicanálise latino-americana e internacional, a partir do trabalho pioneiro de Durval Marcondes e Adelheid Koch e da contínua atividade de seus seguidores, até os dias de hoje. Não só ajudou o desenvolvimento de outras sociedades, como passou a ser um criativo pólo irradiador de idéias e de novos centros analíticos. Progressivamente, vários de seus membros tem tido uma importante participação no cenário nacional e internacional da Psicanálise e na vida associativa da ABP, da FEPAL e da IPA.
                    <p>A IPA, fundada por Freud em março de 1910, durante o Congresso de Nuremberg, tem como objetivo garantir a vigência e o desenvolvimento permanente da Psicanálise como ciência, como tratamento e como profissão. Agrega psicanalistas de 33 países tendo por primeira vez como presidente um brasileiro, empossado em 2005 no Rio de Janeiro, no primeiro Congresso Internacional de Psicanálise realizado no Brasil. O atual presidente é canadense.
                    <p>A FEBRAPSI – Federação Brasileira de Psicanálise fundada em 6 de maio de 1967 é composta pelas Sociedades, Grupos de Estudos e Núcleos que integram a psicanálise brasileira filiada a IPA, tem como função congregar as organizações componentes promovendo, integrando, difundindo e refletindo a Psicanálise que existe e que é praticada no Brasil. Mantém atividades científicas, administrativas, de relações exteriores, de publicações e de divulgação. Promove em anos alternados o Congresso Brasileiro de Psicanálise e publica a Revista Brasileira de Psicanálise. Patrocina e promove eventos, simpósios e intercâmbio científico em vários estados brasileiros.
                </span>
            </div>
        </div>
    </div>

</section>


<?php 

   include('footer.php');
    
?>