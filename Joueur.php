


<?php

class Joueur{

    private string $nom;
    private string $prenom;
    private string $pays;
    private DateTime $date;
    private array $saison;
    private Equipe $equipe;
    

    function __construct(string $nom, string $prenom, string $pays, string $date, Equipe $equipe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->pays = $pays;
        $this->date = new DateTime($date);
        $equipe->ajouterJoueurs($this);
        $this->saison = [];
        $this->equipe = $equipe;
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
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;
        
        return $this;
    }

    
    /**
     * Get the value of pays
     */ 
    public function getpays()
    {
        return $this->pays;
    }
    
    /**
     * Set the value of pays
     *
     * @return  self
     */ 
    public function setpays($pays)
    {
        $this->pays = $pays;
        
        return $this;
    }
    
    
    /**
     * Get the value of saison
     */ 
    public function getSaison()
    {
        return $this->saison;
    }

    /**
     * Set the value of saison
     *
     * @return  self
     */ 
    public function setSaison($saison)
    {
        $this->saison = $saison;

        return $this;
    }
    
    //integre saison aux tableaux saison
    function ajouterSaison(Saison $saison){
        $this->saison[] = $saison;
    }

    
    //affiche $nom $prenom $date joueur
    function afficherJoueur(){
        echo $this->nom." ".$this->prenom." <br>".$this->pays." ".$this->date->format("Y")."<br>";
        foreach($this->saison as $saison){
            echo $saison->afficherSaison();
        }
        
    }

    function afficherSaison(){

    }
    
    
    
}





?>