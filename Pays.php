


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

    //recupere le nom est la date de toutes les equipes
    function afficherTouts(){
        $result = "";
        echo $this->nom."<br>";
        foreach ($this->allEquipes as $equipes ){
            $result .= $equipes->getNom()."<br>";
        }
        echo $result."<br>";
    }









}
    
    


?>