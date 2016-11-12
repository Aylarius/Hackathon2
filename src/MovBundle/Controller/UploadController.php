<?php

namespace MovBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use MovBundle\Entity\Photos;
use MovBundle\Entity\Map;
use MovBundle\Form\PhotosType;
use MovBundle\Form\MapType;


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
        /* Formulaire Nouvelle Photo */
        $photo = new Photos();
        $new = $this->createForm('MovBundle\Form\PhotosType', $photo);
        $new->handleRequest($request);

        if ($new->isValid()) {
            $photo->setUpdated(new \DateTime());
            $url = "https://maps.google.com/maps/api/geocode/json?address=" . $photo->getadresse() . "&key=AIzaSyD1U5cXo-xZ-tC3UWLnfYzXg0wO18RQI8A";

            function file_get_contents_curl($url) {

                $ch = curl_init();

                curl_setopt( $ch, CURLOPT_AUTOREFERER, TRUE );
                curl_setopt( $ch, CURLOPT_HEADER, 0 );
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
                curl_setopt( $ch, CURLOPT_URL, $url );
                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );

                $data = curl_exec( $ch );
                curl_close( $ch );

                return $data;

            }
            // get the json response
            $resp_json = file_get_contents_curl($url);

            // decode the json
            $resp = json_decode($resp_json, true);

            // response status will be 'OK', if able to geocode given address
            if ($resp['status'] == 'OK') {
                // get the important data
                $lati = $resp['results'][0]['geometry']['location']['lat'];
                $longi = $resp['results'][0]['geometry']['location']['lng'];

                // verify if data is complete
                if ($lati && $longi) {
                    $photo->setLat($lati);
                    $photo->setLgt($longi);
                }
            }
        }
        if ($new->isSubmitted() && $new->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($photo);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('MovBundle::upload.html.twig', array(
            'photo' => $photo,
            'new' => $new->createView(),
        ));

    }

    public function file_get_contents_curl( $url ) {

        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_AUTOREFERER, TRUE );
        curl_setopt( $ch, CURLOPT_HEADER, 0 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt( $ch, CURLOPT_URL, $url );
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );

        $data = curl_exec( $ch );
        curl_close( $ch );

        return $data;

    }

}