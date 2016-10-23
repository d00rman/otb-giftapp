<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $regions = $this->getDoctrine()
        ->getRepository('AppBundle:Region')
        ->findAll();

        return $this->render('default/index.html.twig', array(
            'regions' => $regions
        ));
    }
}
