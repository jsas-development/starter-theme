<?php

   $title       = ((isset($title) && !empty($title)) ? $title : '');
   $description = ((isset($description) && !empty($description)) ? $description : '');
   $keywords    = ((isset($keywords) && !empty($keywords)) ? $keywords : '');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="title" content="<?= $title;?>" />
    <meta name="description" content="<?= $description;?>" />
    <meta name="keywords" content="<?= $keywords;?>" />
    <meta name="robots" content="index,follow" />

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $title;?>" />
    <meta property="og:description" content="<?= $description;?>" />

    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:locale" content="" />

    <link rel="icon" href="/" />

    <title><?= $title;?></title>

    <link rel="stylesheet" href="/assets/styles/styles.min.css" media="all">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <header>
    <div class="container">
      <div class="header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-md-4 pt-1">
            <a href="https://www.facebook.com/sbpsp/">
              <i class="mx-3 icon icon-facebook"></i>
            </a>
            <a href="https://twitter.com/sbpsp">
              <i class="mx-3 icon icon-twitter"></i>
            </a>
            <a href="https://www.youtube.com/user/sbpsp">
              <i class="mx-3 icon icon-youtube"></i>
            </a>
          </div>
          <div class="col-md-6 d-flex justify-content-between align-items-center">
            <a class="psicanalistas-link" href="#">
              <p>Psicanalistas</p>
            </a>
            <a class="text-light d-flex align-items-md-center justify-content-md-center search-link" href="#">
              <img class="mx-2" src="assets/images/icon-search.png" alt="Ícone de busca">
              <p>Buscar</p>
            </a>
            <a class="text-light d-flex align-items-md-center justify-content-md-center" href="#">
              <i class="mx-2 icon icon-user"></i>
              <p>Acesso a membros</p>
            </a>
            <div>
              <a class="btn btn-sm btn-outline-light text-light btn-font-size" href="#">A -</a>
              <a class="btn btn-sm btn-outline-light text-light btn-font-size" href="#">A +</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header--menu">
    <div class="container">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="logo-sbpsp col-md-2">
          <picture>
              <source srcset="assets/images/logo-blue.webp" type="image/webp">
              <source srcset="assets/images/logo-blue.png" type="image/png"> 
              <img src="assets/images/logo-blue.png" alt="Logo Sbpsp">
          </picture>
        </div>
        <div class="col-md-9">
          <div class="d-flex flex-column">
            <nav class="nav align-items-center d-flex justify-content-start py-2">
                <a class="btn-quem-somos" href="#">QUEM SOMOS</a>
                <a class="btn-formacao" href="#">FORMAÇÃO</a>
                <a class="btn-atividades" href="#">ATIVIDADES</a>
                <a class="btn-estudos-e-pesquisas" href="#">ESTUDOS E PESQUISAS</a>
                <a class="btn-atendimento-comunidade" href="#">ATENDIMENTO À COMUNIDADE</a>
                <a class="btn-blog" href="#">BLOG</a>
            </nav>
            <nav id="btn-quem-somos" class="subnav py-2">
                <a href="#">A Sociedade</a>
                <a href="#">Corpo Diretivo</a>
                <a href="#">Equipe</a>
                <a href="#">Contato</a>
            </nav>
            <nav id="btn-formacao" class="subnav py-2">
                <a href="#">teste 1</a>
                <a href="#">teste 2</a>
                <a href="#">Teste 3</a>
                <a href="#">Contato</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="psicanalistas">
    <div class="container">
      <div class="d-flex flex-row justify-content-between align-items-center py-5">
        <h3 class="psicanalistas--title">
          Encontre psicanalistas membros e membros filiados
        </h3>
        <i class="icon-close-search close-psicanalistas"></i>
      </div>
      <div class="d-flex flex-row justify-content-around align-items-center">
        <div class="col-2 input-group">
          <input type="text" class="" placeholder="Nome" aria-label="Nome">
        </div>
        <div class="col-2 input-group">
          <input type="text" class="" placeholder="Digite o seu CEP" aria-label="cep">
        </div>
        <div class="col-2 input-group">
          <input type="text" class="" placeholder="Cidade" aria-label="cidade">
        </div>
        <div class="col-2 input-group">
          <input type="text" class="" placeholder="Bairro" aria-label="bairro">
        </div>
        <a class="btn-default" href="/">buscar</a>
      </div>
    </div>
  </div>
  <div class="search">
    <div class="search--container">
      <div class="container">
        <div class="d-flex flex-row justify-content-between align-items-center">
          <h3 class="psicanalistas--title d-flex">
            <img class="mx-2" src="assets/images/icon-search-dark.png" alt="Ícone de busca">
            <div class="col-2 input-group">
              <input type="text" placeholder="O que você procura">
            </div>
          </h3>
          <i class="icon-close-search close-search"></i>
        </div>
      </div>
    </div>
  </div>
</header>

