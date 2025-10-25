<?php
class com
{
    private ?int $id_pub = null;
    private ?string $text_pub = null;
    private ?string $type_pub= null;
    private ?string $id_user = null;
    private ?DateTime $date_pub = null;

    public function __construct($id = null, $txt, $type, $user, $d)
    {
        $this->id_pub = $id;
        $this->text_pub = $txt;
        $this->type_pub= $type;
        $this->id_user = $user;
        $this->date_pub = $d;
    }

    /**
     * Get the value of idClient
     */


    public function getIdPub()
    {
        return $this->id_pub;
    }

    /**
     * Get the value of lastName
     */
    public function getTextPub()
    {
        return $this->text_pub;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setTextPub($text_pub)
    {
        $this->text_pub = $text_pub;

        return $this;
    }

    /**
     * Get the value of firstName
     */
    public function getTypePub()
    {
        return $this->type_pub;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */
    public function setTypePub($type_pub)
    {
        $this->type_pub = $type_pub;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of dob
     */
    public function getDateTime()
    {
        return $this->date_pub ;
    }

    /**
     * Set the value of dob
     *
     * @return  self
     */
    public function setDateTime($date_pub )
    {
        $this->date_pub  = $date_pub ;

        return $this;
    }
}
