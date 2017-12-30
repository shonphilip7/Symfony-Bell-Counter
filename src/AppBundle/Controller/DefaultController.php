<?php

namespace AppBundle\Controller;

use AppBundle\Form\TimeForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Utils\Bells;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, Bells $bell)
    {
		$bellCount = '';
		$form = $this->createForm(TimeForm::class);
		$form->handleRequest($request);
			
		if ($form->isSubmitted() && $form->isValid()) {
			$formData = $form->getData();
			$bellCount = $bell->countBells($formData['startTime'], $formData['endTime']);
		}
		
        return $this->render('default/index.html.twig', [
            'form' => $form->createView(), 'count' => $bellCount, 
        ]);
    }
}
