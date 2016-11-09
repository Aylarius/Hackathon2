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
}
