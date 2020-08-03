<?php

require_once "Model/Model.php";

if(isset($_POST["u_name"]) && isset($_POST["u_email"])) {

    if(!empty($_POST["u_name"]) && !empty($_POST["u_email"])) {


        $data = array(
    
            $b_title = $_POST["u_name"],
            $b_author =  $_POST["u_email"],
            $b_edition = $_POST["u_password"],
           
        );
    
        var_dump($data);
        
        // createUser($data);
    }
}

// function checkInfos($data) {

//     $login = $data[0];
//     $password = $data[1];
//     $infos = getInfos($login);

//     if($infos["password"] === $password) {
//       return true;
//     }
//     else {
//       return false;
//     }
// }

require "Views/viewSignUp.php";