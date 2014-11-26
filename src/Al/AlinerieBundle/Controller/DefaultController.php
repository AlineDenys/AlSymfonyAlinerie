<?php

namespace Al\AlinerieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AlAlinerieBundle:Default:index.html.twig', array('name' => $name));
    }
}
