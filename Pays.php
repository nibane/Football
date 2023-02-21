


<?php

class Pays{
    
    private string $nom ;
    private array $allEquipes ;

    function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->allEquipes = [];
    }

    


   
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function getAllEquipes()
    {
        return $this->allEquipes;
    }

    public function setAllEquipes($allEquipes)
    {
        $this->allEquipes = $allEquipes;
        return $this;
    }

    //sert a integrer une Equipes dans un pays 
    function ajouterEquipes(Equipe $equipes){
        $this->allEquipes[] = $equipes;
    }

    //sert a afficher l'objet en entier
    function afficherTouts(){
        $result = "";
        foreach ($this->allEquipes as $equipes ){
            $result .= $equipes."<br>";
        }
        echo $result;
    }









}
    
    


?>