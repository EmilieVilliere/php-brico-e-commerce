<?php

require "Model/Model.php";

// fonction de comparaison entre l'entrée et la bdd
function checkUsers($data) {

    $email = $data[0];
    $password = $data[1];
    $infos = getUsers($email);

    if($infos["u_password"] === $password) {
      return true;
    }
    else {
      return false;
    }
}

// vérification et redirection
if(!empty($_GET["u_email"]) && !empty($_GET["u_email"])) {
       
    $infos = array($_GET["u_email"], $_GET["u_password"]);
    $logged = checkUsers($infos);

    if(!empty($logged) && $logged == true) {

        require "Views/viewHome.php";
    
    } else {

        require "Views/viewSignIn.php";

    }
}
