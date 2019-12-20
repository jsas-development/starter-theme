<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="webdoor-institucional central-de-vendas"></section>

<section class="institucional">
    <div class="row" style=>
        <div class="institucional--sidenav col-4 d-none d-md-flex justify-content-center">
            <ul>
                <li class="active">
                    <a href="/about.php">
                        Central de Atendimento
                    </a>
                </li>
                <li>
                    <a href="">
                        Parcerias e Convênios
                    </a>
                </li>
            </ul>
        </div>
        <div class="institucional--select d-flex justify-content-center d-md-none col-12 px-5">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <i class="icon-arrow-carousel"></i>
                <select class="col-12 institucional--select-change" onchange="location = this.value;">
                    <option selected>Central de Atendimento</option>
                    <option value="/">Parcerias e Convênios</option>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <div class="institucional--container px-5">
                <h1 class="institucional--title">O que é o Centro de Atendimento (CAP)?</h1>
                <span class="institucional--text"> 
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper orci vitae feugiat gravida. Pellentesque quis sapien at neque vehicula viverra non at sapien. Phasellus at risus sit amet lacus fringilla placerat non et orci. Fusce massa sem, mollis sed sapien vel, finibus scelerisque purus. Duis auctor gravida turpis, a egestas justo mollis eget. Quisque quis felis orci. Pellentesque eget ipsum ac magna euismod eleifend. In pellentesque, magna eu aliquet tincidunt, dui magna finibus turpis, nec porta tellus erat quis dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In euismod fringilla velit ac dignissim. In tempor diam a augue scelerisque pharetra. Phasellus nulla quam, accumsan tincidunt mollis posuere, semper a nisi. Curabitur ut posuere orci, et hendrerit nulla.
                <h2 class="institucional--title">Por que procurar tratamento psicanalítico? </h2>
                <span class="institucional--text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper orci vitae feugiat gravida. Pellentesque quis sapien at neque vehicula viverra non at sapien. Phasellus at risus sit amet lacus fringilla placerat non et orci. Fusce massa sem, mollis sed sapien vel, finibus scelerisque purus. Duis auctor gravida turpis, a egestas justo mollis eget. Quisque quis felis orci. Pellentesque eget ipsum ac magna euismod eleifend. In pellentesque, magna eu aliquet tincidunt, dui magna finibus turpis, nec porta tellus erat quis dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In euismod fringilla velit ac dignissim. In tempor diam a augue scelerisque pharetra. Phasellus nulla quam, accumsan tincidunt mollis posuere, semper a nisi. Curabitur ut posuere orci, et hendrerit nulla.
                </span>
                <h2 class="institucional--title">Inscrições</h2>
                <span class="institucional--text">
                    <p>A inscrição e pagamento de taxa de R$ 30,00 (trinta reais) devem ser realizados na secretaria do Centro de Atendimento à Rua Sergipe, 441
                    - 5º Andar – Conj. 51 – Higienópolis.
                </span>
                <h2 class="institucional--title">Entre em contato conosco.</h2>
                <span class="institucional--text">
                   <p>Telefone: 3661 8353 – Ramal 01 (para recado na secretária eletrônica)
                    Ou pelo email:  centro.atendimento@sbpsp.org.br
                </span>
            </div>
        </div>
    </div>

</section>


<?php 

   include('footer.php');
    
?>