<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RssController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $terrains = $em->getRepository('PidevReaBundle:Offre')->findAll();
        return $this->render('PidevReaBundle:Rss:index.xml.twig', array('terrains' => $terrains));
    }
}
