<?php

namespace MovBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MovBundle\Entity\Photos;
use MovBundle\Entity\Commentaires;

/**
 * Photos controller.
 *
 */

class MapController extends Controller
{
    /**
     * Lists all Photos and Commentaires entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository('MovBundle:Photos')->findAll();
        $comEm = $this->getDoctrine()->getManager();
        $comments = $comEm->getRepository('MovBundle:Commentaires')->findAll();

        return $this->render('MovBundle::map.html.twig', array(
            'comments' => $comments,
            'photos' => $photos,
        ));
    }
}