<?php

namespace MovBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MovBundle\Entity\Photos;
use MovBundle\Entity\Commentaires;
use MovBundle\Form\CommentairesType;

class MozaController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository('MovBundle:Photos')->findAll();

        foreach ($photos as $photo) {

            $comEm = $this->getDoctrine()->getManager();
            $commentaires = $comEm->getRepository('MovBundle:Commentaires')->findAll();

            $photo_id=$photo->getId();

            $commentaire = new Commentaires();
            $commentaire->setPhoto_id($photo_id);
            $new = $this->createForm(new CommentairesType(), $commentaire);
            $new->handleRequest($request);

            if ($new->isSubmitted() && $new->isValid()) {
                $cEm = $this->getDoctrine()->getManager();
                $cEm->persist($commentaire);
                $cEm->flush();

                return $this->redirectToRoute('homepage');
            }
        }
        return $this->render('MovBundle::moza.html.twig', array(
            'photos' => $photos,
            'commentaires' => $commentaires,
            'new' => $new->createView(),
        ));
    }
}