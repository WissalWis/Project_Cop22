<?php

namespace CP\CopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CPCopBundle:Default:index.html.twig');
    }
}
