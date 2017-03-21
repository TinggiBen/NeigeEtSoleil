<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function PagesAction($id)
    {
        return $this->render('PagesBundle:Default:Pages/Layout/Pages.html.twig');
    }
}
