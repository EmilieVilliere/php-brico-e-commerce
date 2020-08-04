<?php 

function getBdd() {
    
    $bdd = new PDO('mysql:host=localhost;dbname=brico_e_com;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // gère les exceptions et les erreurs
    return $bdd;
}

// Users functions

function createUser($data) {

    $bdd = getBdd();
    $create = $bdd->prepare("INSERT INTO t_users (u_name, u_email, u_password) VALUES (?, ?, ?)");
    $create->execute($data);
}

function getUsers($data) {

    $bdd = getBdd();
    $users = $bdd->prepare("SELECT * FROM t_users WHERE u_email=?");
    $users->execute(array($data));

    if($users->rowCount() == 1) {

        return $users->fetch();
    
    } else {
        
        return false;
    }
}

// Products functions

function getProducts() {

    $bdd = getBdd();
    $products = $bdd->query("SELECT * FROM t_products");
    return $products;
}

// cateogries function

function getCategories() {

    $bdd = getBdd();
    $categories = $bdd->query("SELECT * FROM t_categories");
    return $categories;
}

