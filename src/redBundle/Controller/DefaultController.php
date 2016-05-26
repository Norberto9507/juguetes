<?php

namespace redBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('redBundle:Default:index.html.twig', array('name' => $name));
    }
}
