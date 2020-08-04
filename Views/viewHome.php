<?php

$title= "Bricofou - Accueil";

ob_start(); ?>

<style>

    #card-brico { width: 350px; }
    .card-img { width: 250px; height: auto; margin: 0 auto; margin-top: 5px;}
    #price {font-weight: bold; font-size: 20px;}

</style>

<div class="container">
    <div class="card-deck">

        <?php

        $products = getProducts();

            foreach($products as $product) : ?>

                <div class="col-4 mt-3 mb-3">
                    <div class="card" id="card-brico">
                        <img class="card-img" src="<?= './images/' . $product['p_image'] ?>" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title"><?= $product['p_name'] ?></h4>
                            <p class="card-text"><?= $product['p_description'] ?></p>

                            <a href="#!" class="btn btn-primary card-link">En savoir plus</a>
                            <span class="card-link" id="price"><?= $product['p_price'] ?>€ </span>
                        </div>
                    </div>
                </div>
                         
            <?php endforeach; 

        ?>

    </div>
</div>

<?php 

$content = ob_get_clean(); 

require "Views/template.php"; ?>