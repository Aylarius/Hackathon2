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
    /**
     * @var \MovBundle\Entity\Commentaires
     */
    private $comments;


    /**
     * Set comments
     *
     * @param \MovBundle\Entity\Commentaires $comments
     *
     * @return Photos
     */
    public function setComments(\MovBundle\Entity\Commentaires $comments = null)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return \MovBundle\Entity\Commentaires
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \MovBundle\Entity\Commentaires $comment
     *
     * @return Photos
     */
    public function addComment(\MovBundle\Entity\Commentaires $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \MovBundle\Entity\Commentaires $comment
     */
    public function removeComment(\MovBundle\Entity\Commentaires $comment)
    {
        $this->comments->removeElement($comment);
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
