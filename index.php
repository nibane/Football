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


$pays1 = new Pays("FRANCE");
$pays2 = new Pays("BIDULE");

$equipe1 = new Equipe("PSG","1970",$pays1);
$equipe2 = new Equipe("OM","1960",$pays1);
$equipe3 = new Equipe("BiduleTeam","2002",$pays2);
$equipe4 = new Equipe("MachinTeam","2003",$pays2);

$joueur1 = new Joueur("prenomFrancais","nomFrancais","France","1999",$equipe1);
$joueur2 = new Joueur("nomFrancais","prenomFrancais","France","2000",$equipe2);
$joueur3 = new Joueur("truc","muche","Bidulais","2000",$equipe2);
$joueur4 = new Joueur("muche","truc","Bidulais","2000",$equipe2);



$saison1 = new Saison("2015",$joueur1,$equipe1);
$saison2 = new Saison("2003",$joueur1,$equipe2);
$saison3 = new Saison("2005",$joueur3,$equipe3);
$saison4 = new Saison("20013",$joueur3,$equipe2);
$saison2 = new Saison("2018",$joueur4,$equipe4);
$saison2 = new Saison("2020",$joueur4,$equipe3);
$saison2 = new Saison("2014",$joueur2,$equipe2);
$saison2 = new Saison("2008",$joueur1,$equipe4);
$saison2 = new Saison("2007",$joueur1,$equipe3);


$pays1->afficherTouts();
$pays2->afficherTouts();

$equipe1->afficherTouts();
$equipe2->afficherTouts();
$equipe3->afficherTouts();
$equipe4->afficherTouts();


$joueur1->afficherJoueur();
$joueur2->afficherJoueur();
$joueur3->afficherJoueur();
$joueur4->afficherJoueur();


?>