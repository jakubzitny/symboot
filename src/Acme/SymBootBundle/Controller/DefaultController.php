<?php

namespace Acme\SymBootBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeSymBootBundle:Default:index.html.twig', array('name' => "asd"));
    }
}
