<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});


$pays1 = new Pays("France");
$pays2 = new Pays("France2");

$equipe1 = new Equipe("PSG",$pays1,"1970/12/28");
$equipe2 = new Equipe("PSG2",$pays2 ,"2000/08/09");

$joueur1 = new Joueur("kilian","mbape","1998/02/23",$pays1);
$joueur2 = new Joueur("kilian2","mbape2","1996/02/23",$pays1);
$joueur3 = new Joueur("kilian3","mbape3","2001/02/23",$pays2);

$saison1 = new Saison($joueur1,$equipe1,2016);
$saison2 = new Saison($joueur1,$equipe1,2020);
$saison3 = new Saison($joueur1,$equipe2,2008);
$saison4 = new Saison($joueur2,$equipe2,2019);
$saison5 = new Saison($joueur3,$equipe2,2029);
$saison4 = new Saison($joueur3,$equipe1,1971);


//affiche les pays est leur equipe
$pays1->afficherPays();
$pays2->afficherPays();

//affiche les equipe est leur joueurs avec leur date d'integration dans l'equipe
$equipe1->afficherEquipe();
$equipe2->afficherEquipe();

//affiche les joueurs est la date des equipes dans lequel ils sont ou etait
$joueur1->afficherJoueur();
$joueur2->afficherJoueur();
$joueur3->afficherJoueur();





?>