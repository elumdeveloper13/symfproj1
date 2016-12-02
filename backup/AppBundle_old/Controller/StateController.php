<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class StateController extends Controller
{
	
    /**
     * @Route("/state/capital")
     */
	public function capitalAction()
	{
		$captial = 'Mumbai';
		
		//return new Response("<h1>Captial of Maharashtra is ".$captial."<h1>");
		
		return $this->render("capital/capital.html.twig",array("capital" => $captial,));
		//return $this->render('lucky/number.html.twig', array('number' => $number,));
		
	}
}
?>