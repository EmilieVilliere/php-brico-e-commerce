<?php

$title= "Bricofou - Accueil";

ob_start(); ?>

<style>

    #card-brico { width: 350px; }
    .card-img { width: 250px; height: auto; margin: 0 auto; margin-top: 5px;}
    #price {font-weight: bold; font-size: 20px;}

</style>

<div class="container">

    <div id="filterBy">
        <label for="filterBy">Filter par :</label>
        <a><button type="button" name="filter_p" class="btn btn-outline-primary" value="p_price">Prix</button></a>
        <a><button type="button" name="filter_n" class="btn btn-outline-primary" value="p_name">Ordre croissant</button></a>
    </div>

    <div class="card-deck">

        <?php

        $products = getProducts();

            foreach($products as $product) : ?>

                <div class="col-lg-4 col-sm-6 mt-3 mb-3">
                    <div class="card" id="card-brico">
                        <img class="card-img" src="<?= './images/' . $product['p_image'] ?>" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title"><?= $product['p_name'] ?></h4>
                            <p class="card-text"><?= $product['p_subtitle'] ?></p>

                            <a href="<?='basket.php?id=' . $product['id']?>" class="btn btn-primary card-link">En savoir plus</a>
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