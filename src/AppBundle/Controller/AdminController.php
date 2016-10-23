<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Campaign;


class AdminController extends Controller {


    /**
     * @Route("/admin", name="admin_index")
     */
    public function indexAction(Request $request) {

        $campaigns = $this->getDoctrine()
        ->getRepository('AppBundle:Campaign')
        ->findAll();

        return $this->render('admin/index.html.twig', array(
            'campaigns' => $campaigns
        ));

    }


    /**
     * @Route("/admin/campaign-add", name="admin_campaign_add")
     */
    public function campaignAdd(Request $request) {

        if($request->getMethod() == 'GET') {
            return $this->render('admin/campaign-add.html.twig');
        }

        $campaign = new Campaign();
        $em = $this->getDoctrine()->getManager();

        $vars = $request->request->all();
        $vars['start_date'] = \DateTime::createFromFormat('d/m/Y', $vars['start_date']);
        $vars['end_date'] = \DateTime::createFromFormat('d/m/Y', $vars['end_date']);

        $campaign->setName($vars['name']);
        $campaign->setYear($vars['year']);
        $campaign->setStartDate($vars['start_date']);
        $campaign->setEndDate($vars['end_date']);
        $em->persist($campaign);
        $em->flush();

        return $this->redirectToRoute('admin_index');

    }


}
