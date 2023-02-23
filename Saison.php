


<?php


class Saison{

    //Attributs
    private Joueur $joueur;
    private Equipe $equipes;
    private int $anneeDebut;


    function __construct(Joueur $joueur, Equipe $equipes, int $anneeDebut)
    {
        $this->joueur = $joueur;
        $joueur->ajouterSaisons($this);
        $this->equipes = $equipes;
        $equipes->ajouterSaisons($this);
        $this->anneeDebut = $anneeDebut;
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
     * Get the value of anneeDebut
     */ 
    public function getAnneeDebut()
    {
        return $this->anneeDebut;
    }

    /**
     * Set the value of anneeDebut
     *
     * @return  self
     */ 
    public function setAnneeDebut($anneeDebut)
    {
        $this->anneeDebut = $anneeDebut;

        return $this;
    }
}    



?>