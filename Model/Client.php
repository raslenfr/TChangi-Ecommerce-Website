
<?php
class Livreur
{
    private ?int $idLivreur= null;
    private ?string $NameLivreur = null;
    private ?string $EmailLivreur = null;
    private ?string $PassLivreur = null;
  

    public function __construct($id = null, $n, $p, $a)
    {
        $this->idLivreur = $id;
        $this->NameLivreur = $n;
        $this->EmailLivreur = $p;
        $this->PassLivreur = $a;
      
    }

    /**
     * Get the value of idClient
     */
    public function getIdLivreur()
    {
        return $this->idLivreur;
    }

    /**
     * Get the value of lastName
     */
    public function getName_livreur()
    {
        return $this->NameLivreur;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setName_livreur($NameLivreur)
    {
        $this->NameLivreur = $NameLivreur;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getEmail()
    {
        return $this->EmailLivreur;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setEmail($EmailLivreur)
    {
        $this->EmailLivreur = $EmailLivreur;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getPass()
    {
        return $this->PassLivreur;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setPass($PassLivreur)
    {
        $this->PassLivreur = $PassLivreur;

        return $this;
    }

    /**
     * Get the value of dob
     */

}
