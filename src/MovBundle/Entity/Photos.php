<?php

namespace MovBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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

    private $image;

    public function setImage ()
    {
        $this->image = $image;
        return $this;
    }

    public function getImage ()
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
}
