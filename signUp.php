<?php

require "Model/Model.php";

if(isset($_POST["u_name"]) && isset($_POST["u_email"])) {

    if(!empty($_POST["u_name"]) && !empty($_POST["u_email"])) {


        $data = array(
    
            $u_name = $_POST["u_name"],
            $u_email =  $_POST["u_email"],
            $u_password = $_POST["u_password"],
           
        );
        
        createUser($data);
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

