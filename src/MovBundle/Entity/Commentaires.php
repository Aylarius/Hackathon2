<?php

namespace MovBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaires
 */
class Commentaires
{

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
     * @var integer
     */
    private $photo_id;


    /**
     * Set photoId
     *
     * @param integer $photoId
     *
     * @return Commentaires
     */
    public function setPhoto_id($photoId)
    {
        $this->photo_id = $photoId;

        return $this;
    }

    /**
     * Get photoId
     *
     * @return integer
     */
    public function getPhoto_id()
    {
        return $this->photo_id;
    }
}
