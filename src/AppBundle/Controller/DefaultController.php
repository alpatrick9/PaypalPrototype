<?php

namespace AppBundle\Controller;

use AppBundle\Type\PaypalFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig',[
            'form'=>$this->createForm(PaypalFormType::class)->createView()
        ]);
    }

    /**
     * @return Response
     * @Route("/cancel", name="cancel")
     */
    public function cancelAction() {
        return new Response("Operation annuler");
    }
}
