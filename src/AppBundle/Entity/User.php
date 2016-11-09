<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;



class User extends BaseUser
{
    protected $id;

    private $facebook_id;

    public function setFacebookID($facebook_id)
    {
        $this->facebook_id = $facebook_id;

        return $this;
    }

    public function getFacebookID()
    {
        return $this->facebook_id;
    }
    /**
     * @var string
     */
    private $google_id;

    /**
     * @var string
     */
    private $twitter_id;


    /**
     * Set googleId
     *
     * @param string $googleId
     *
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->google_id = $googleId;

        return $this;
    }

    /**
     * Get googleId
     *
     * @return string
     */
    public function getGoogleId()
    {
        return $this->google_id;
    }

    /**
     * Set twitterId
     *
     * @param string $twitterId
     *
     * @return User
     */
    public function setTwitterId($twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitterId
     *
     * @return string
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }
}
