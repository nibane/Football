


<?php

class Joueurs{

    private string $nom;
    private string $prenom;
    private string $nationalité;
    private DateTime $date;
    private Equipe $equipe;

    function __construct(string $nom, string $prenom, string $nationalité, string $date, Equipe $equipe)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->nationalité = $nationalité;
        $this->date = new DateTime($date);
        $equipe->ajouterJoueurs($this);
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
         * Get the value of nationalité
         */ 
        public function getNationalité()
        {
            return $this->nationalité;
        }
    
        /**
         * Set the value of nationalité
         *
         * @return  self
         */ 
        public function setNationalité($nationalité)
        {
            $this->nationalité = $nationalité;
    
            return $this;
        }


        
    //affiche $nom $prenom $date joueur
    function afficherJoueur(){
        echo $this->nom." ".$this->prenom." <br>".$this->nationalité." ".$this->date->format("Y");

    }





}





?>