<?php

namespace Pidev\ReaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Pidev\ReaBundle\Entity\Agence;

/**
 * Agence controller.
 *
 */
class StatController extends Controller
{

    public function testAction()
    {
    $em = $this->getDoctrine()->getManager();
    $stat= $em->getRepository("PidevReaBundle:Agence")->nbrAgence();
     return $this->render("PidevReaBundle:Stat:nbrAgenceZone.html.twig", array('stats' => $stat));
    }

}
