<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Institution;
use AppBundle\Entity\GiftRequest;

class WishlistController extends Controller
{
    /**
     * @Route("admin/wishlist-list/{id}", name="admin_wishlist_list")
     */
    public function indexAction($id, Request $request)
    {
        $wishlists = $this->getDoctrine()
        ->getRepository('AppBundle:GiftRequest')
        ->findBy(array('institution' => $id));

        return $this->render('admin/institution-wishlist-list.html.twig', array(
            'wishlists' => $wishlists,
            'institution_id' => $id
        ));
    }

    /**
     * @Route("admin/wishlist-add/{id}", name="admin_wishlist_add")
     */
    public function addAction($id, Request $request)
    {
		$institution = $this->getDoctrine()
		->getRepository('AppBundle:Institution')
		->find($id);

    	if($request->isMethod('POST')) {

    		$wishlist = new GiftRequest();
    		$wishlist->setName($request->request->get('name'));
    		$wishlist->setAge($request->request->get('age'));
    		$wishlist->setAge($request->request->get('gift'));
    		$wishlist->setInstitution($institution);

		    $em->persist($wishlist);
		    $em->flush();

		    return $this->redirectToRoute('admin_wishlist_list', ['id' => $id]);
    	}

        return $this->render('admin/institution-wishlist-add.html.twig', array(
	    	'institution_id' => $id 
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
