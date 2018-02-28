<?php

    $title       = 'Starter Theme!';
    $description = 'v0.2.0';
    $keywords    = 'Starter, Initial Theme, Tema de arranque';
    
    include('header.php');

?>
<section id="home">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?= $title; ?></h1>
				<p><?= $description; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h3>Plugins de Terceiro</h3>
				<p>Todos estão desabilitados, somente habilitar conforme forem necessários, para evitar carregarmos infos desnecessárias no carregamento</p>
				<div class="panel panel-default">
				  <div class="panel-heading">Como habilitar os javascripts</div>
				  <div class="panel-body">
				    No arquivo gulpfile descomentar as linhas dos arquivos nos quais serão usados e/ou acrescentar novos que serão usados.
				  </div>
				</div>
				<div class="panel panel-default">
				  <div class="panel-heading">Como habilitar os css</div>
				  <div class="panel-body">
				    No arquivo styles.min.scss descomentar as linhas dos arquivos nos quais serão usados e/ou acrescentar novos que serão usados.
				  </div>
				</div>


			</div>
		</div>
	</div>
</section>

<?php 

   include('footer.php');
    
?>