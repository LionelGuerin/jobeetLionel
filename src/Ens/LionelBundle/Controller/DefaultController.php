<?php

namespace Ens\LionelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsLionelBundle:Default:index.html.twig');
    }
}
