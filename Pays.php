


<?php

class Pays{
    
    //Attributs
    private string $nomPays;
    private array $equipes;
    private array $joueurs;

    
    function __construct(string $nomPays)
    {
        $this->nomPays = $nomPays;
        $this->equipes = [];
        $this->joueurs = [];
    }


    function ajouterJoueurs(Joueur $joueur){
        $this->joueurs[] = $joueur;
    }
    
    function ajouterEquipes(Equipe $equipe){
        $this->equipes[] = $equipe;
    }

    //affiche les equipes d'un pays
    function afficherPays(){
        echo "<div class=boitePays><div class=titre>".$this->nomPays."</div><div class=bas> ".$this->afficherEquipes()."</div></div>";
    }

    //affiche le contenue du tableau equipes
    function afficherEquipes(){
        $result = "";
        foreach ($this->equipes as $equipe){
            $result .= $equipe->getNomEquipe();
        }
        return $result;
    }

    /**
     * Get the value of nomPays
     */ 
    public function getNomPays()
    {
        return $this->nomPays;
    }

    /**
     * Set the value of nomPays
     *
     * @return  self
     */ 
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get the value of equipes
     */ 
    public function getEquipes()
    {
        return $this->equipes;
    }

    /**
     * Set the value of equipes
     *
     * @return  self
     */ 
    public function setEquipes($equipes)
    {
        $this->equipes = $equipes;

        return $this;
    }

    /**
     * Get the value of joueurs
     */ 
    public function getJoueurs()
    {
        return $this->joueurs;
    }

    /**
     * Set the value of joueurs
     *
     * @return  self
     */ 
    public function setJoueurs($joueurs)
    {
        $this->joueurs = $joueurs;

        return $this;
    }
}
    
    


?>