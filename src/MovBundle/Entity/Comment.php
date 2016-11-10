<?php
// src/MyProject/MyBundle/Entity/Comment.php

namespace MovBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use FOS\MovBundle\Entity\Comment as BaseComment;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Thread of this comment
     *
     * @var Thread
     * @ORM\ManyToOne(targetEntity="MyProject\MyBundle\Entity\Thread")
     */
    protected $thread;
}