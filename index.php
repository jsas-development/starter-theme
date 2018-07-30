<?php

    $title       = 'Starter Theme!';
    $description = 'v0.2.0';
    $keywords    = 'Starter, Initial Theme, Tema de arranque';
    
    include('header.php');

?>
<div class="container grid">
    <div class="panel header"></div>
    <div class="panel main">
        <div class="grid__cols">
            <div class="panel__col"><p>1</p></div>
            <div class="panel__col"><p>2</p></div>
            <div class="panel__col"><p>3</p></div>
            <div class="panel__col"><p>4</p></div>
            <div class="panel__col last"><p>5</p></div>
        </div>
    </div>
    <div class="panel aside"></div>
    <div class="panel footer"></div>
</div>

<?php 

   include('footer.php');
    
?>