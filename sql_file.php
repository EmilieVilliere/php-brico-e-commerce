<?php 

$bdd = new PDO("mysql:host=localhost;charset=utf8", "root", "");

$bdd->query("CREATE DATABASE brico_e_com");

$bdd = new PDO("mysql:host=localhost;dbname=brico_e_com;charset=utf8", "root", "");

$bdd->query("CREATE TABLE `t_users` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    u_name VARCHAR(50) NOT NULL, 
    u_email VARCHAR(100) UNIQUE NOT NULL,
    u_password VARCHAR(100) NOT NULL

)");

$bdd->query("CREATE TABLE `t_categories` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
    c_name VARCHAR(50)

)");

$bdd->query("CREATE TABLE `t_products` (

    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, 
    p_name VARCHAR(50), 
    p_subtitle VARCHAR(50),
    p_description TEXT,
    p_price INT(11),
    p_image VARCHAR(255),
    p_category INT UNSIGNED NOT NULL

)");

$bdd->query("ALTER TABLE `t_products` ADD FOREIGN KEY (p_category) REFERENCES t_categories(id)");

$bdd->query("INSERT INTO `t_categories`(`c_name`) VALUES ('extérieur'), ('outillage'), ('salle d\'eau'), ('matériaux de construction'), ('peinture'), ('revêtement')");

$bdd->query("INSERT INTO `t_products`(`p_name`, `p_subtitle`, `p_description`, `p_price`, `p_image`, `p_category`) VALUES 
    
    ('Kit de peinture', 'Une kit de prise en main rapide.', 'Rouleau à peinture multifonctionnel- Le jeu de rouleaux à peinture professionnel LIUMY peut être utilisé sur une variété de surfaces.', 10, 'kit-peinture.jpg', 5),
    ('Boite à outils', 'Tous vos outils réunis à un seul endroit !', 'Matériel de qualité et Design raisonnable ! Fabriqué en acier au carbone la qualité de matériel assure la durabilité des outils', 95, 'boite-outils.jpg', 2),
    ('Laine de roche', 'Matériel thermique haute gamme', 'Retient leau mais fournit une bonne aération pour une croissance saine de ses grandes blabla de blabla de racines', 45, 'laine-roche.jpg', 4),
    ('Abri de jardin', 'Un cabanne qui saura ravir petits et grands !', 'Surface de stockage précieuse avec espace protégé inclut! De nombreux ustensiles, outils et meubles de jardin peuvent être rangés dans cette remise.', 219, 'abri-jardin.jpeg', 1),
    ('Sèche serviettes', 'Fonctionne à électrique, super puissant', 'Sèche-serviettes électrique en aluminium. Technologie WarmSpace, capable de réchauffer jusquà 8 m² efficacement. Inclut un kit dinstallation', 143, 'seche-serviettes.jpg', 3),
    ('Parquet en bois', 'Magnifique revêtement effet réel', 'Convient aux petites et aux grandes surfaces. Imperméable un température idéale de pose. Couleur aubepine il marie parfaitement!', 30, 'parquet-boheme.jpg', 6)

");

