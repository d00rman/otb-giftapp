<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin_index")
     */
    public function indexAction(Request $request)
    {
        $campaigns = $this->getDoctrine()
        ->getRepository('AppBundle:Campaign')
        ->findAll();

        return $this->render('admin/index.html.twig', array(
            'campaigns' => $campaigns
        ));
    }
}
