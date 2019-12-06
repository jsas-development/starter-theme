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
              <i class="mx-2 icon icon-facebook"></i>
            </a>
            <a href="https://twitter.com/sbpsp">
              <i class="mx-2 icon icon-twitter"></i>
            </a>
            <a href="https://www.youtube.com/user/sbpsp">
              <i class="mx-2 icon icon-youtube"></i>
            </a>
          </div>
          <div class="col-md-8 d-flex justify-content-between align-items-center">
            <p>Psicanalistas</p>
            <a class="text-light d-flex align-items-md-center justify-content-md-center" href="#">
              <img class="mx-2" src="assets/images/icon-search.png" alt="Ícone de busca">
              <p>Buscar</p>
            </a>
            <a class="text-light d-flex align-items-md-center justify-content-md-center" href="#">
              <i class="mx-2 icon icon-youtube"></i>
              <p>Acesso a membros</p>
            </a>
            <div>
              <a class="btn btn-sm btn-outline-light text-light btn-font-size" href="#">A -</a>
              <a class="btn btn-sm btn-outline-light text-light btn-font-size" href="#">A +</a>
            </div>
          </div>
        </div>
      </div>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-light" href="#">World</a>
          <a class="p-2 text-light" href="#">U.S.</a>
          <a class="p-2 text-light" href="#">Technology</a>
          <a class="p-2 text-light" href="#">Design</a>
          <a class="p-2 text-light" href="#">Culture</a>
          <a class="p-2 text-light" href="#">Business</a>
          <a class="p-2 text-light" href="#">Politics</a>
          <a class="p-2 text-light" href="#">Opinion</a>
          <a class="p-2 text-light" href="#">Science</a>
          <a class="p-2 text-light" href="#">Health</a>
          <a class="p-2 text-light" href="#">Style</a>
          <a class="p-2 text-light" href="#">Travel</a>
        </nav>
      </div>
    </div>

