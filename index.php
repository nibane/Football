


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});


$pays1 = new Pays("FRANCE");

$equipe1 = new Equipe("PSG","1970",$pays1);
$equipe2 = new Equipe("OM","1960",$pays1);

$joueur1 = new Joueurs("nom","prenom","francaise","1999",$equipe1);


// $pays1->afficherTouts();

// $equipe1->afficherTouts();

$joueur1->afficherJoueur();

?>