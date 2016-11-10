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

}
