<?php

namespace MovBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Photos
 */
class Photos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $iname;

    public $image;

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

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
     * Set iname
     *
     * @param string $iname
     * @return Photos
     */
    public function setIname($iname)
    {
        $this->iname = $iname;

        return $this;
    }

    /**
     * Get iname
     *
     * @return string 
     */
    public function getIname()
    {
        return $this->iname;
    }


    /**
     * @var \DateTime
     */
    private $updated;


    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Photos
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * @var string
     */
    private $lgt;

    /**
     * @var string
     */
    private $lat;


    /**
     * Set lgt
     *
     * @param string $lgt
     * @return Map
     */
    public function setLgt($lgt)
    {
        $this->lgt = $lgt;

        return $this;
    }

    /**
     * Get lgt
     *
     * @return string
     */
    public function getLgt()
    {
        return $this->lgt;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Map
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }
    /**
    *@var string
     */
    
    private $adresse;

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Map
     */
    public function setadresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getadresse()
    {
        return $this->adresse;
    }

}
