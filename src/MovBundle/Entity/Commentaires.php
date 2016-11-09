<?php

namespace MovBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 */
class Commentaires
{
    public function __toString()
    {
        return $this->texte;
    }

    protected $createdAt;

    public function __construct()
    {
    $this->createdAt = new \DateTime('now');
    }

    public function setCreatedAt($createdAt)
    {
    $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
    return $this->createdAt;
    }

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $texte;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set texte
     *
     * @param string $texte
     * @return Commentaires
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }
    /**
     * @var \DateTime
     */
    private $created_at;


}
