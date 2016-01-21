<?php

namespace Sdz1\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogManagerController extends Controller{

	public function indexAction()
	{ 
		return $this->render('Sdz1BlogBundle:Blog:ajouter.html.twig', array('nom' => 'lounis'));
	}
}

?>