<?php

namespace SpectacleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpectacleBundle:Default:index.html.twig');
    }
}
