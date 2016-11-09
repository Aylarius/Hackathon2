<?php

namespace MovBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MovBundle\Entity\Photos;
use MovBundle\Form\PhotosType;


/**
 * Photos controller.
 *
 */

class UploadController extends Controller
{
    /**
     * Creates new entities.
     *
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $photos = $em->getRepository('MovBundle:Photos')->findAll();

        /* Formulaire Nouvelle Photo */
        $photo = new Photos();
        $new = $this->createForm('MovBundle\Form\PhotosType', $photo);
        $new->handleRequest($request);

        if ($new->isValid()) {
            $photo->setUpdated(new \DateTime());
        }
        if ($new->isSubmitted() && $new->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($photo);
            $em->flush();

            return $this->redirectToRoute('homepage');
        }

        return $this->render('MovBundle::moza.html.twig', array(
            'photos' => $photos,
            'photo' => $photo,
            'new' => $new->createView(),
        ));
    }
}