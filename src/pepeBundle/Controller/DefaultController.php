<?php

namespace pepeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('pepeBundle:Default:index.html.twig', array('name' => $name));
    }
}
