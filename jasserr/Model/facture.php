<?php
class facture
{
    private ?int $id_facture = null;
    private ?int $id_livraison = null;
    private ?int $co_client= null;
    private ?int $co_livreur= null;


    public function __construct($id = null, $il, $cc, $cl)
    {
        $this->id_facture = $id;
        $this->id_livraison = $il;
        $this->co_client = $cc;
        $this->co_livreur= $cl;
    }

    /**
     * Get the value of idClient
     */
    public function getIdFacture()
    {
        return $this->id_facture;
    }

    /**
     * Get the value of livraison
     */
    public function getIdLivraison()
    {
        return $this->id_livraison;
    }

    /**
     * Set the value of livraison
     *
     * @return  self
     */
    public function setIdLivraison($id_livraison)
    {
        $this->id_livraison = $id_livraison;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getCoClient()
    {
        return $this->co_client;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setCoClient($co_client)
    {
        $this->co_client = $co_client;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getCoLivreur()
    {
        return $this->co_livreur;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setCoLivreur($co_livreur)
    {
        $this->co_livreur = $co_livreur;

        return $this;
    }

    
}