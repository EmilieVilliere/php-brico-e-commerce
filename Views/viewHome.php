<?php

$title= "Bricofou - Accueil";

ob_start(); ?>

<h1>nik toi bien</h1>


<?php 

$content = ob_get_clean(); 

require "Views/template.php"; ?>