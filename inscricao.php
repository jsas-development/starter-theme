<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<section class="inscricao">
    <div class="container">
        <div class="row m-0 pt-5">
            <div class="col-12 col-md-8 d-flex p-0">
                <div class="inscricao--form col-12">
                    <h1 class="inscricao--title">Ficha de Inscrição</h1>
                    <hr>
                    <p class="inscricao--text">Preencha o formulário com seus dados pessoais</p>
                    <form>
                        <div class="form-group">
                            <label for="inputNome">Nome Completo</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="digite seu nome">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">E-mail</label>
                                <input type="text" class="form-control" id="inputEmail" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCEP">CEP</label>
                                <input type="text" class="form-control" id="inputCEP" placeholder="Digite seu CEP">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-9">
                                <label for="inputEnd">Endereço</label>
                                <input type="text" class="form-control" id="inputEnd" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputNum">Número</label>
                                <input type="text" class="form-control" id="inputNum" placeholder="103">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputComp">Complemento</label>
                                <input type="text" class="form-control" id="inputComp" placeholder="Casa 1">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="form-control" id="inputBairro" placeholder="Moema">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputComp">Cidade</label>
                                <input type="text" class="form-control" id="inputComp" placeholder="Jardins">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputUf">UF</label>
                                <select id="inputUf" class="form-control">
                                    <option selected value="UF">SP</option>
                                    <option value="teste1">teste1</option>
                                    <option value="teste2">teste2</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="pb-4">
                            <span class="inscricao--subtitle">
                                Valor da Inscrição
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="form-check value-check col-md-4 d-flex align-items-center p-0 mr-4 mb-3 mb-md-0">
                                <input class="form-check-input mx-4" type="radio" name="option1" id="gridRadios1" value="option1">
                                <label class="form-check-label" for="gridRadios1">
                                    R$600,00 <br><span>Membros SBPSP</span>
                                </label>
                            </div>
                            <div class="form-check value-check col-md-4 d-flex align-items-center p-0">
                                <input class="form-check-input mx-4" type="radio" name="option1" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    R$700,00 <br><span>Demais membros</span>
                                </label>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn-inscricao btn-default">Continuar</button>
                    </form>
                    <div class="inscricao--modal-error">
                        <div class="inscricao--modal-error--content d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <i class="icon-error"></i>
                            <p>Olá <b>Milton Mattos</b>, não encontramos seu cadastro de membro. Se por acaso você esteja encontrando dificuldade, entre em contato peo e-mail <b>ajuda@sbpsp.org.br</b> </p>
                        </div>
                        <hr>
                        <button onclick="window.location.href='/inscricao.php'" class="btn-inscricao btn-default">Voltar</button>
                    </div>
                    <div class="inscricao--modal-success col-md-12">
                        <div class="d-flex flex-column">
                            <div class="row">
                                <div class="form-check active col-md-4 d-flex align-items-center p-0 my-md-3 mr-4">
                                    <label class="form-check-label">
                                        R$600,00 <br><span>Membros SBPSP</span>
                                    </label>
                                </div>
                            </div>
                            <p>Escolha a forma de pagamento</p>
                            <div class="row">
                                <div class="form-check form-pag col-md-5 d-flex align-items-center p-0 mr-0 mr-md-4 mb-3 mb-md-0">
                                    <input class="form-check-input mx-4" type="radio" name="option2" id="gridRadios3" value="option3">
                                    <label class="form-check-label" for="gridRadios3">
                                        <i class="icon-boleto"></i><span>Boleto Mensal</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </label>
                                </div>
                                <div class="form-check form-pag col-md-5 d-flex align-items-center p-0">
                                    <input class="form-check-input mx-4" type="radio" name="option2" id="gridRadios4" value="option4">
                                    <label class="form-check-label" for="gridRadios4">
                                        <picture>
                                            <source srcset="assets/images/pagseguro.webp" type="image/webp">
                                            <source srcset="assets/images/pagseguro.png" type="image/png"> 
                                            <img class="card-img-top" src="assets/images/pagseguro.png" alt="Logo Pagseguro">
                                        </picture>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn-pagamento btn-default">Continuar</button>
                    </div>
                    <div class="inscricao--modal-text-1 col-md-12">
                        <div class="d-flex flex-column">
                            <h2>Curso de Introdução a escuta Psicanalítica</h2>
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </li>
                                <li>
                                    Pellentesque purus felis, molestie vel enim id, cursus euismod ipsum.
                                </li>
                                <li>
                                    Nam condimentum sem justo, vel egestas nulla dictum eget.
                                </li>
                                <li>
                                    Donec sem leo, blandit in varius sed, congue vel lacus. Sed blandit tristique interdum. 
                                </li>
                                <li>
                                    Proin id ligula velit. Praesent tempus ultricies dolor, vitae fermentum libero rutrum eget. Integer efficitur lorem ligula, luctus sodales nibh sodales at. Vivamus aliquet mauris ligula, vitae viverra enim condimentum vel.
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <button type="submit" class="btn-texto1 btn-default">Continuar</button>
                    </div>
                    <div class="inscricao--modal-text-2 col-md-12">
                        <div class="d-flex flex-column">
                            <h2>Agradecemos pelo seu interesse em nosso curso</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque purus felis, molestie vel enim id, cursus euismod ipsum. Nam condimentum sem justo, vel egestas nulla dictum eget. Donec sem leo, blandit in varius sed, congue vel lacus.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            
            <div class="col-12 col-md-4 background-thumb mb-5">
                <div class="institucional--container pb-4">
                    <div class="col-12 col-md-12">
                        <div class="card inscricao--card">
                            <a href="/eventos-internas">
                                <picture>
                                    <source srcset="assets/images/cursos-card.webp" type="image/webp">
                                    <source srcset="assets/images/cursos-card.jpg" type="image/jpg"> 
                                    <img class="card-img-top" src="assets/images/cursos-card.jpg" alt="Logo Sbpsp">
                                </picture>
                                <div class="card-body p-1 p-md-3">
                                    <div class="row d-flex px-4">
                                        <span class="inscricao--card-subtitle">Tipo de Curso</span>
                                        <span class="inscricao--card-title">Curso de Introdução a<br>escuta Psicanalítica</span>
                                    </div>
                                    <div class="row d-flex px-4">
                                        <span class="inscricao--card-item"><i class="icon-calendar"></i>20 de Novembro de 2019</span>
                                        <span class="inscricao--card-item"><i class="icon-time"></i>A partir das 19 horas</span>
                                        <span class="inscricao--card-item"><i class="icon-location"></i>Auditório MIS</span>
                                    </div>
                                </div>
                            </a>
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