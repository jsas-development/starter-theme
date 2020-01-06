<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="contato--title">
    <div class="container">
        <h1>Entre em contato</h1>
    </div>
</section>

<section class="institucional">
    <div class="row m-0">
        <div class="institucional--sidenav col-12 col-md-5 d-flex justify-content-end">
            <div class="contato--form">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="digite seu nome">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" placeholder="digite seu sobrenome">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail">E-mail</label>
                        <input type="text" class="form-control" id="inputEmail" placeholder="email@email.com.br">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputTelefone">Telefone</label>
                        <input type="text" class="form-control" id="inputTelefone" placeholder="(   )">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAssunto">Assunto</label>
                        <input type="text" class="form-control" id="inputAssunto" placeholder="sobre o que deseja falar?">
                    </div>
                    <div class="form-group">
                        <label for="exampleMensagem">Mensagem</label>
                        <textarea class="form-control" id="exampleMensagem" placeholder="digite aqui sua mensagem" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn-default">Enviar Mensagem</button>
                </form>
                <div class="contato--modal-sucess">
                    <div class="contato--modal-sucess--content d-flex flex-column justify-content-between align-items-center">
                        <i class="icon-success"></i>
                        <h2>Mensagem enviada.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis ante ut sapien lacinia sagittis. Sed nisi purus, pulvinar et leo vitae, facilisis rhoncus neque. Morbi vitae dolor id ipsum commodo elementum. </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-6 background-thumb">
            <div class="institucional--container px-5">
                <div class="contato--content">
                    <h2 class="contato--title-mobile">Onde estamos</h2>   
                    <div class="row">
                        <div class="contato--content--item m-md-2 col-12 col-md-5 col-lg-5 d-flex flex-column">
                            <span>Sede Vila Olímpia</span>
                            <p>
                                Av. Dr. Cardoso de Melo, 1450<br>
                                9º andar - Vila Olímpia<br>
                                Telefone: 11 2125.3777<br>
                            </p>
                            <a class="maps-fancybox" href="#vilaOlimpia">Como chegar ></a>
                            <iframe id="vilaOlimpia" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5170.672887193085!2d-46.692137242824906!3d-23.596518387857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5748585a3fbd%3A0x14dc603c42bf52cb!2sAv.%20Dr.%20Cardoso%20de%20Melo%2C%201450%20-%20Vila%20Ol%C3%ADmpia%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004547-005!5e0!3m2!1spt-BR!2sbr!4v1578343779252!5m2!1spt-BR!2sbr" width="1000" height="650" frameborder="0" style="border:0;display:none;" allowfullscreen=""></iframe>
                        </div>
                        <div class="contato--content--item m-md-2 col-12 col-md-5 col-lg-5 d-flex flex-column justify-content-between">
                            <span>Sede Rua Sergipe</span>
                            <p>
                                Rua Sergipe, 441<br>
                                Conj. 62 e 51 - Higienópolis<br>
                                Telefone: 11 3661.9822<br>
                            </p>
                            <a class="maps-fancybox" href="#sergipe">Como chegar ></a>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.564492273541!2d-46.6602255850224!3d-23.548161384689408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5830f329b395%3A0x6d97e6b2718431a3!2sRua%20Sergipe%2C%20441%20-%20Consola%C3%A7%C3%A3o%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001243-001!5e0!3m2!1spt-BR!2sbr!4v1578344384037!5m2!1spt-BR!2sbr" width="1000" height="650" frameborder="0" style="border:0;display:none;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <h2 class="contato--title-mobile">E-mails</h2>   
                    <div class="row">
                        <div class="contato--content--item m-md-2 mobile col-12 col-md-5 col-lg-5 d-flex flex-column justify-content-between">
                            <div>
                                <span>Editora</span>
                                <p class="contato--content--email">editora@sbpsp.org.br</p>
                            </div>
                            <div>
                                <span>Diretoria</span>
                                <p class="contato--content--email">diretoria@sbpsp.org.br</p>
                            </div>
                        </div>
                        <div class="contato--content--item m-md-2 mobile col-12 col-md-5 col-lg-5 d-flex flex-column justify-content-between">
                            <div>
                                <span>Secretaria</span>
                                <p class="contato--content--email">secretaria@sbpsp.org.br</p>
                            </div>
                            <div>
                                <span>Biblioteca</span>
                                <p class="contato--content--email">biblioteca@sbpsp.org.br</p>
                            </div>
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