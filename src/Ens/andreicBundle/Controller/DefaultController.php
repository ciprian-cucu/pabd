<?php

namespace Ens\andreicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EnsandreicBundle:Default:index.html.twig', array('name' => $name));
    }
    public function pagina2Action()
    {
        return $this->render('EnsandreicBundle:Default:2.html.twig');
    }



}
