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

class MozaController extends Controller
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

        /* Formulaire Nouveau Commentaire */
        $commentaire = new Commentaires();
        $new = $this->createForm('MovBundle\Form\CommentairesType', $commentaire);
        $new->handleRequest($request);
        
        if ($new->isSubmitted() && $new->isValid()) {
            $cEm = $this->getDoctrine()->getManager();
            $cEm->persist($commentaire);
            $cEm->flush();

            return $this->redirectToRoute('homepage');
        }
        
        return $this->render('MovBundle::moza.html.twig', array(
            'comments' => $comments,
            'comment' => $comment,
            'photos' => $photos,
        ));
    }
}