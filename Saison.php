


<?php


class Saison{

    private int $dateDebut;
    private Equipe $equipe;
    private Joueur $joueur;


    function __construct(int $dateDebut, Joueur $joueur, Equipe $equipe)
    {
        $this->dateDebut = $dateDebut;
        $joueur->ajouterSaison($this);
        $equipe->ajouterSaison($this);
        $this->joueur = $joueur;
        $this->equipe = $equipe;
    }

   
    

    /**
     * Get the value of dateDebut
     */ 
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set the value of dateDebut
     *
     * @return  self
     */ 
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        
    }

    /**
     * Get the value of equipe
     */ 
    public function getEquipe()
    {
        return $this->equipe;
    }

    /**
     * Set the value of equipe
     *
     * @return  self
     */ 
    public function setEquipe($equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get the value of joueur
     */ 
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set the value of joueur
     *
     * @return  self
     */ 
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }


    function afficherSaison(){
        echo $this->equipe->getNom()." (".$this->getDateDebut().")<br>";
    }


}



?>