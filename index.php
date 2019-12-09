<?php

    $title       = 'Starter Template!';
    $description = 'v2.0.0';
    $keywords    = 'Starter, Initial Template, Template de arranque';
    
    include('header.php');

?>

<div class="webdoor">
    <div class="container">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="logo-sbpsp col-md-2">
                <picture>
                    <source srcset="assets/images/logo.webp" type="image/webp">
                    <source srcset="assets/images/logo.png" type="image/png"> 
                    <img src="assets/images/logo.png" alt="Logo Sbpsp">
                </picture>
            </div>
            <div class="nav-scroller">
                <nav class="nav d-flex justify-content-between align-items-center col-md-6">
                    <a class="p-2 text-light" href="#">World</a>
                    <a class="p-2 text-light" href="#">U.S.</a>
                    <a class="p-2 text-light" href="#">Technology</a>
                    <a class="p-2 text-light" href="#">Design</a>
                    <a class="p-2 text-light" href="#">Culture</a>
                </nav>
            </div>
        </div>
    </div>
</div>


<?php 

   include('footer.php');
    
?>