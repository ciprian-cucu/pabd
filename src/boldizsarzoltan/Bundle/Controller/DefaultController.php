<?php

namespace boldizsarzoltan\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('boldizsarzoltanBundle:Default:index.html.twig', array('name' => $name));
    }
}
