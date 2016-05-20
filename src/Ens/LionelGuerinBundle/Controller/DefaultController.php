<?php

namespace Ens\LionelGuerinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsLionelGuerinBundle:Default:index.html.twig');
    }
}
