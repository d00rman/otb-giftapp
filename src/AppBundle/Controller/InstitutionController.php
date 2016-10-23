<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Institution;

class InstitutionController extends Controller
{
    /**
     * @Route("admin/institution-list", name="admin_institution_list")
     */
    public function indexAction(Request $request)
    {
        $institutions = $this->getDoctrine()
        ->getRepository('AppBundle:Institution')
        ->findAll();

        return $this->render('admin/institution-list.html.twig', array(
            'institutions' => $institutions
        ));
    }

    /**
     * @Route("admin/institution-add", name="admin_institution_add")
     */
    public function addAction(Request $request)
    {

    	$institutionTypes = $this->getDoctrine()
        ->getRepository('AppBundle:InstitutionType')
        ->findAll();

        $regions = $this->getDoctrine()
        ->getRepository('AppBundle:Region')
        ->findAll();

    	if($request->isMethod('POST')) {
			$em = $this->getDoctrine()->getManager();
			$institutionType = $em->getRepository('AppBundle\Entity\InstitutionType')->find($request->request->get('type'));
			$region = $em->getRepository('AppBundle\Entity\Region')->find($request->request->get('region'));

    		$institution = new Institution();
    		$institution->setName($request->request->get('name'));
    		$institution->setAddress($request->request->get('address'));
    		$institution->setType($institutionType);
    		$institution->setRegion($region);

		    $em->persist($institution);
		    $em->flush();

		    return $this->redirectToRoute('admin_institution_list');
    	}

        return $this->render('admin/institution-add.html.twig', array(
        	'institutionTypes' => $institutionTypes,
        	'regions' => $regions
    	));
    }

    /**
     * @Route("admin/institution-edit/{id}", name="admin_institution_edit")
     */
    public function editAction($id, Request $request)
    {
		$em = $this->getDoctrine()->getManager();
    	$institution = $em->getRepository('AppBundle\Entity\Institution')->find($id);
    	$institutionTypes = $this->getDoctrine()
        ->getRepository('AppBundle:InstitutionType')
        ->findAll();

        $regions = $this->getDoctrine()
        ->getRepository('AppBundle:Region')
        ->findAll();

    	if($request->isMethod('POST')) {
			$institutionType = $em->getRepository('AppBundle\Entity\InstitutionType')->find($request->request->get('type'));
			$region = $em->getRepository('AppBundle\Entity\Region')->find($request->request->get('region'));

    		$institution->setName($request->request->get('name'));
    		$institution->setAddress($request->request->get('address'));
    		$institution->setType($institutionType);
    		$institution->setRegion($region);

		    $em->persist($institution);
		    $em->flush();

		    return $this->redirectToRoute('admin_institution_list');
    	}

        return $this->render('admin/institution-edit.html.twig', array(
        	'institution' => $institution,
        	'institutionTypes' => $institutionTypes,
        	'regions' => $regions
    	));
    }
}
