


<?php

class Joueur{

    //Attributs
    private string $prenom;
    private string $nom;
    private DateTime $dateNaissance;
    private Pays $pays;
    //parcours d'un joueur
    private array $saisons;
   

    function __construct(string $prenom, string $nom, string $dateNaissance, Pays $pays)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->pays = $pays;
        $pays->ajouterJoueurs($this);
        $this->saisons = [];
        
    }

    function ajouterSaisons(Saison $saison){
        $this->saisons = $saison;
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
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

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
     * Get the value of saison
     */ 
    public function getSaisons()
    {
        return $this->saisons;
    }

    /**
     * Set the value of saison
     *
     * @return  self
     */ 
    public function setSaisons($saison)
    {
        $this->saisons = $saison;

        return $this;
    }



}





?>