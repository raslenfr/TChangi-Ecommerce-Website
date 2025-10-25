<?php
class livr
{
    private ?int $id_livraison = null;
    private ?int $id_client = null;
    private ?int $id_livreur = null;
    private ?string $adresse = null;
    private ?DateTime $dob = null;
    private ?int $id_commande = null;

    public function __construct($id = null, $idC, $idL, $ad, $d, $idCM)
    {
        $this->id_livraison= $id;
        $this->id_client = $idC;
        $this->id_livreur = $idL;
        $this->adresse = $ad;
        $this->dob = $d;
        $this->id_commande = $idCM;

    }

    /**
     * Get the value of idClient
     */
    public function getIdLivraison()
    {
        return $this->id_livraison;
    }

    /**
     * Get the value of lastName
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;

        return $this;
    }
    public function getIdLivreur()
    {
        return $this->id_livreur;
    }
     /** 
     * Set the value of firstName
     *
     * @return  self
     */
    public function setIdLivreur($id_livreur)
    {
        $this->id_livreur= $id_livreur;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getadresse()
    {
        return $this->adresse;
    }
    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }
    public function getIdCommande()
    {
        return $this->id_commande;
   }
   /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setIdCommande($id_commande)
    {
        $this->id_commande= $id_commande;

        return $this;
    }
}