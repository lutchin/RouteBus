<?php


namespace Bus\BusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BusBusBundle:Page:index.html.twig');
    }

    public function oneAction()
    {
        return $this->render('BusBusBundle:Page:one.html.twig');
    }
}
