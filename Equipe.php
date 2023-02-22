


<?php

class Equipe{
    
    private string $nom;
    private int $creation;
    private Pays $pays ;
    private array $joueurs ;
    private array $saison ;

    function __construct(string $nom, int $creation, Pays $pays)
    {
        $this->nom = $nom;
        $this->creation = $creation;
        $this->pays = $pays;
        $this->joueurs = [];
        $this->saison = [];
        $pays->ajouterEquipes($this);
        
    }








    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of creation
     */ 
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set the value of creation
     *
     * @return  self
     */ 
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get the value of pays
     */ 
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setPays($pays)
    {
        $this->pays = $pays;

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

    //ajoute objet $joueur dans le tableaux joueurs
    function ajouterJoueurs($joueur){
        $this->joueurs[] = $joueur;
    }

    //affiche une equipe et ses joueurs
    function afficherEquipes(){
        $result = "";
       
        foreach ($this->saison as $joueur){
            $result .= $this->getNom()." ".$joueur->getPrenom()." ".$joueur->getDateDebut();
        }
        echo $this->nom." <br>".$this->creation."<br>".$result."<br>";
       
    }

    function ajouterSaison(Saison $saison){
        $this->saison[] = $saison;
    }



}


?>