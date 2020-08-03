<?php 

function getBdd() {
    $bdd = new PDO('mysql:host=localhost;dbname=brico_e_com;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // gère les exceptions et les erreurs
    return $bdd;
}

function createUser($data) {

    $bdd = getBdd();
    $create = $bdd->prepare("INSERT INTO t_users (u_name, u_email, u_password) VALUES (?, ?, ?)");
    $create->execute($data);
    
}