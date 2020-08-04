<?php

$title= "Bricofou - Connexion";

ob_start(); ?>

<style>

    nav, footer, #p-temp {display: none;}

    #title {
        position: absolute;
        top: 10%;
        left: 45%;
    }

</style>

<div class="text-center">
    <form class="form-sign-in" action="signIn.php" method="GET">

        <img class="mb-4" src="images/brico-logo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 font-weight-normal">Veuillez vous connecter</h1>

        <label for="u_email" class="sr-only">Email</label>
        <input type="email" id="u_email" name="u_email" class="form-control" required="" autofocus="">

        <label for="u_password" class="sr-only">Mot de passe</label>
        <input type="password" id="u_password" name="u_password" class="form-control" required="">

        <div class="mb-3 mt-2">
            <a href="signUp.php">Je m'inscris !</a>
        </div>

        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Connexion</button>
        <p class="mt-5 mb-3 text-muted">© 2020</p>

    </form>

</div>


<?php 

$content = ob_get_clean(); 

require "Views/template.php"; ?>