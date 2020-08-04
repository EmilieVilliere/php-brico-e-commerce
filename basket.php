<?php

require "Model/Model.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $infos = putInfosBasket($id);

    if ($infos->rowCount() == 1) {

        $n = $infos->fetch();
        $p_name = $n['p_name'];
        $p_subtitle = $n['p_subtitle'];
        $p_description = $n['p_description'];
        $p_price = $n['p_price'];
        $p_image = $n['p_image'];
        $p_category = $n['p_category'];
    }
}

require "Views/viewBasket.php";