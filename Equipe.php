


<?php

class Equipe{

    //Attribut
    private string $nomEquipe;
    private Pays $pays;
    private DateTime $dateCreation;
    //historique des joueurs du club
    private array $saisons;


    function __construct(string $nomEquipe, Pays $pays, string $dateCreation)
    {
        $this->nomEquipe = $nomEquipe;
        $this->pays = $pays;
        $pays->ajouterEquipes($this);
        $this->dateCreation = new DateTime($dateCreation);
        $this->saisons = [];
    }


    









    function ajouterSaisons(Saison $saison){
        $this->saisons = $saison;
    }



 

    /**
     * Get the value of nomEquipe
     */ 
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * Set the value of nomEquipe
     *
     * @return  self
     */ 
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;

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
     * Get the value of dateCreation
     */ 
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set the value of dateCreation
     *
     * @return  self
     */ 
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

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