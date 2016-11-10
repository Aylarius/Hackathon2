<?php

namespace MovBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function sendMailAction()
    {
        $Request = $this->getRequest();
        if ($Request->getMethod() == "POST") {
            $Subject = $Request->get("Subject");
            $message = " " . $Request->get("message");
            $message = \Swift_Message::newInstance('Test')
                ->setSubject($Subject)
                ->setFrom('laposte974@laposte.net')
                ->setTo('laposte974@laposte.net')
                ->setBody($message);
            $this->get('mailer')->send($message);
            return $this->render('MovBundle:Default:mail.html.twig');
        }
        return $this->render('MovBundle:Default:formMail.html.twig');
    }

}