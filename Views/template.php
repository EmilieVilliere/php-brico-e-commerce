<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
    <!-- Lien CDN CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Lien CDN CSS FontAwesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <style>
        body {display: block;}
        footer {background-color: #1EA1F5;}

        .navbar { background-color: #1EA1F5;}
        .items { opacity: 60%; text-transform: uppercase; }
        .items:hover { opacity: 100%; }
    </style>

    <header>
        <!-- NavBar Bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light mb-5">
            <div class="container">
                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- NavBar Navigation -->
                <class class="collapse navbar-collapse" id="navbarItems">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <!-- categories display in nav -->
                    <?php
                        $categories = getCategories();
                        foreach($categories as $category) : ?>

                        <li class="nav-item">
                            <a class="nav-link text-white items" href="#"> <?= $category["c_name"] ?> </a>
                        </li>
                           
                        <?php endforeach; ?>
                    </ul>
                
                    <!-- Account and Basket -->
                    <div class="account form-inline my-2 my-lg-0">
                        <a class="nav-link text-white items" href="#">Mon compte</a>
                        <button class="btn btn-light my-2 my-sm-0" type="submit">Panier 0 </button>
                    </div>
                </class>
            </div>
        </nav>
        <!-- End NavBar -->

        <a href="index.php"><h1 id="title">Bricofou</h1></a>
        <p id="p-temp">Bienvenue sur Bricofou !</p> 
    </header>

    <main>
        <?= $content ?>
    </main>


    <footer>
        <div class="footer-copyright text-center text-white py-3 mt-4">© 2020 Voici votre nouveau site :
            <a href="https://mdbootstrap.com/" class="text-white">Bricofou !</a>
        </div>
    </footer>

    <!-- Lien CDN JS Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>