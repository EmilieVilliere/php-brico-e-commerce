<?php

$title= "Bricofou - Accueil";

ob_start(); ?>

<style>
    #img-brico { width: 400px; height: auto; margin: 0 auto; margin-top: 5px;}
    #price {font-weight: bold; font-size: 26px;}
    .txt-price {font-size: 18px; color: red; text-decoration: line-through;}
</style>

<div class="container">

    <div class="jumbotron">
        <h1 class="display-3"><?= $p_name; ?></h1>
        <p class="lead"> <?= $p_description ?></p>
        <hr class="my-2">
        <p><?= $p_subtitle ?></p>
        
        <div id="img-div" class="mb-4">
            <img id="img-brico" class="shadow" src="<?= './images/' . $p_image ?>" alt="Card image">
        </div>

        <p id="price"> <?= $p_price ?> € </p>
        <p class="txt-price mb-3">Au lieu de :<span> 150 € </span></p>

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#!" role="button">Ajouter au panier</a>
        </p>
    </div>

</div>

<?php 

$content = ob_get_clean(); 

require "Views/template.php"; ?>